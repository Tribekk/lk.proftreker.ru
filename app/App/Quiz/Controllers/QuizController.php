<?php /** @noinspection PhpUndefinedMethodInspection */


namespace App\Quiz\Controllers;

use App\Quiz\ViewModels\AvailableQuizzesViewModel;
use App\Quiz\Wrappers\CharacterTraitResultWrapper;
use App\Quiz\Wrappers\ResultWrapper;
use App\Quiz\Wrappers\SolutionCasesResultWrapper;
use Barryvdh\DomPDF\Facade as PDF;
use Domain\Quiz\Models\Inclination;
use Domain\Quiz\Models\ProfessionalTypeResultValue;
use Domain\Quiz\Models\Situation;
use Domain\Quiz\Models\TypeOfThinking;
use Domain\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Domain\Quiz\Actions\OpenQuizAction;
use Domain\Quiz\Models\AvailableQuiz;
use Domain\Quiz\Models\CharacterTrait;
use Domain\Quiz\Models\ProfessionalType;
use Domain\Quiz\Models\SuitableProfessionResult;
use Domain\Quiz\States\Quiz\OpenQuizState;
use Domain\Quiz\States\Quiz\PendingQuizState;
use Support\Controller;

class QuizController extends Controller
{
    public function index()
    {
        if(!Auth::user()->isStudent) abort(404);
        $viewModel = new AvailableQuizzesViewModel();


        return view('quiz.index', $viewModel);
    }

    public function description(AvailableQuiz $availableQuiz)
    {
        if(Auth::id() != $availableQuiz->user_id) abort(404);
        if($availableQuiz->quiz->isSuitableProfessions() && !$availableQuiz->interestsQuizFinished()) {
            return redirect(route('quiz.view'));
        }

        if($availableQuiz->quiz->slug == 'student-questionnaire') {
            return view('quiz._instruction.student-questionnaire-instruction')
                ->withAvailableQuiz($availableQuiz);
        }

        return view('quiz.description')
            ->withAvailableQuiz($availableQuiz);
    }

    public function restartQuiz(AvailableQuiz $availableQuiz)
    {
        if(Auth::id() != $availableQuiz->user_id) abort(404);
        if($availableQuiz->quiz->isSuitableProfessions() && !$availableQuiz->interestsQuizFinished()) {
            return redirect(route('quiz.view'));
        }

        $user = Auth::user();
        $openQuizAction = new OpenQuizAction();
        $openQuizAction->run($user, $availableQuiz);

        return $this->startQuiz($availableQuiz);
    }

    public function startQuiz(AvailableQuiz $availableQuiz)
    {
        if(Auth::id() != $availableQuiz->user_id) abort(404);
        if($availableQuiz->quiz->isSuitableProfessions() && !$availableQuiz->interestsQuizFinished()) {
            return redirect(route('quiz.view'));
        }

        if ($availableQuiz->state->equals(OpenQuizState::class)) {
            $availableQuiz->update([
                'state' => PendingQuizState::class,
                'started_at' => Carbon::now()
            ]);
        }

        return redirect(route('quiz.show', $availableQuiz));
    }

    public function supplementQuiz(AvailableQuiz $availableQuiz)
    {

        if(Auth::id() != $availableQuiz->user_id) abort(404);
        if($availableQuiz->quiz->isSuitableProfessions() && !$availableQuiz->interestsQuizFinished()) {
            return redirect(route('quiz.view'));
        }

        $availableQuiz->update([
            'state' => PendingQuizState::class,
            'started_at' => Carbon::now()
        ]);
//dd($availableQuiz);
        return redirect(route('quiz.show', $availableQuiz));
    }

    public function show(AvailableQuiz $availableQuiz)
    {
        if(Auth::id() != $availableQuiz->user_id) abort(404);
        if(is_null($availableQuiz->started_at)) {
            $availableQuiz->update([
                'started_at' => Carbon::now()
            ]);
        }

        return view('quiz.show')
            ->withAvailableQuiz($availableQuiz);
    }

    public function result(AvailableQuiz $availableQuiz)
    {
        if ($availableQuiz->quiz->slug == 'traits') {
            $wrapper = app()->make(CharacterTraitResultWrapper::class);
            return $this->traitsResult($wrapper, $availableQuiz);
        } else if ($availableQuiz->quiz->slug == 'interests') {
            return $this->interestsResult($availableQuiz);
        } else if ($availableQuiz->quiz->isSuitableProfessions()) {
            return $this->suitableProfessionsDetails($availableQuiz);
        } else if ($availableQuiz->quiz->slug == 'parent-questionnaire') {
            return $this->parentQuestionnaireResult($availableQuiz);
        } else if ($availableQuiz->quiz->slug == 'student-questionnaire') {
            return $this->studentQuestionnaireResult($availableQuiz);
        } else if ($availableQuiz->quiz->slug == 'inclinations') {
            return $this->inclinationsResult($availableQuiz);
        } else if ($availableQuiz->quiz->slug == 'intelligence-level') {
            return $this->intelligenceLevelResult($availableQuiz);
        } else if ($availableQuiz->quiz->slug == 'type-of-thinking') {
            return $this->typeOfThinkingResult($availableQuiz);
        } else if ($availableQuiz->quiz->slug == 'solution_of_cases') {
            return $this->solutionOfCasesResult($availableQuiz);
        }

        return abort(404);
    }

    public function traitsResult(CharacterTraitResultWrapper $wrapper, AvailableQuiz $availableQuiz)
    {
        $traits = CharacterTrait::all();

        /** @noinspection PhpUndefinedFieldInspection */
        $result = Auth::user()->characterTraitResult;
        if(empty($result)) abort(404);

        $resultValues = $result->values;

        return view('quiz.result')
            ->withAvailableQuiz($availableQuiz)
            ->withTraits($traits)
            ->withWrapper($wrapper)
            ->withResult($result)
            ->withResultValues($resultValues);
    }

    public function interestsResult(AvailableQuiz $availableQuiz)
    {
        $types = ProfessionalType::all();

        /** @noinspection PhpUndefinedFieldInspection */
        $result = Auth::user()->professionalTypeResult;
        if(empty($result)) abort(404);

        return view('quiz.result')
            ->withResult($result)
            ->withTypes($types)
            ->withAvailableQuiz($availableQuiz);
    }

    public function traitDetails(CharacterTraitResultWrapper $wrapper, AvailableQuiz $availableQuiz, CharacterTrait $trait)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $availableQuiz->user->characterTraitResult;
        if(empty($result)) abort(404);

        $resultTraits = $result->values;

        $resultValue = $result->values()->where('trait_id', $trait->id)->get()->first();

        return view('quiz.details')
            ->withAvailableQuiz($availableQuiz)
            ->withTrait($trait)
            ->withResultTraits($resultTraits)
            ->withResultValue($resultValue)
            ->withWrapper($wrapper);
    }

    public function parentQuestionnaireResult(AvailableQuiz $availableQuiz)
    {
        if(Auth::id() != $availableQuiz->user_id) abort(403);
        return view('quiz._result-parent-questionnaire')
            ->withAvailableQuiz($availableQuiz);
    }

    public function studentQuestionnaireResult(AvailableQuiz $availableQuiz)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = Auth::user()->studentQuestionnaireResult;
        /** @noinspection PhpUndefinedFieldInspection */
        $resultFactorMotiveOfChoice = Auth::user()->factorMotiveOfChoiceResult;

        return view('quiz._result-student-questionnaire')
            ->withResult($result)
            ->withResultFactorMotiveOfChoice($resultFactorMotiveOfChoice)
            ->withAvailableQuiz($availableQuiz);
    }

    public function typeDetails(AvailableQuiz $availableQuiz, ProfessionalType $type)
    {
        $types = ProfessionalType::all();

        /** @noinspection PhpUndefinedFieldInspection */
        $result = $availableQuiz->user->professionalTypeResult;
        if(empty($result)) abort(404);

        return view('quiz.details')
            ->withTypes($types)
            ->withType($type)
            ->withAvailableQuiz($availableQuiz)
            ->withResult($result);
    }

    public function suitableProfessionsDetails(AvailableQuiz $availableQuiz)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $matrix = SuitableProfessionResult::where('user_id', $availableQuiz->user_id)
            ->orderByDesc('created_at')
            ->firstOrFail()
            ->careerMatrix;

        return view('quiz.result')
            ->withMatrix($matrix)
            ->withAvailableQuiz($availableQuiz);
    }

    public function personTypes(AvailableQuiz $availableQuiz)
    {
        try {
            $professionalTypeResult = $availableQuiz->user->professionalTypeResult;
            $professionalTypeValues = $professionalTypeResult->values;
        } catch (\Exception $exception) {
            abort(404);
        }

        $prevItem = null;
        $sortedTypes = $professionalTypeValues->sortByDesc('value');
        foreach ($sortedTypes as $professionalTypeValue) {
            if(!empty($prevItem) && $prevItem->value != $professionalTypeValue->value || $professionalTypeValue->value == 0) {
                $professionalTypeValue->active = false;
                continue;
            }

            $prevItem = $professionalTypeValue;
            $professionalTypeValue->active = true;
        }

        return view('quiz._result-person-types')
            ->withAvailableQuiz($availableQuiz)
            ->withProfessionalTypeValues($professionalTypeValues);
    }

    public function personTypeDetails(AvailableQuiz $availableQuiz, int $typeId)
    {
        $professionalType = ProfessionalTypeResultValue::where('type_id', $typeId)->firstOrFail();
        return view('quiz._result-person-type-detail')
            ->withAvailableQuiz($availableQuiz)
            ->withType($professionalType);
    }

    public function inclinationsResult(AvailableQuiz $availableQuiz)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $availableQuiz->user->inclinationResult;
        if(empty($result)) abort(404);

        $resultValues = $result->values;
        $userTypes = $result->values()->where('is_higher', 1)->get();


        return view('quiz.result')
            ->withAvailableQuiz($availableQuiz)
            ->withUserTypes($userTypes)
            ->withResult($result)
            ->withResultValues($resultValues);
    }

    public function inclinationsDetails(AvailableQuiz $availableQuiz, Inclination $inclination)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $availableQuiz->user->inclinationResult;
        if(empty($result)) abort(404);
        $inclinationResult = $result->values()->where('inclination_id', $inclination->id)->first();

        return view('quiz.details')
            ->withInclinationResult($inclinationResult)
            ->withAvailableQuiz($availableQuiz)
            ->withInclination($inclination);
    }

    public function intelligenceLevelResult(AvailableQuiz $availableQuiz)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = Auth::user()->intelligenceLevelResult;
        if(empty($result)) abort(404);

        $resultValues = $result->values;

        return view('quiz.result')
            ->withAvailableQuiz($availableQuiz)
            ->withResult($result)
            ->withResultValues($resultValues);
    }

    public function typeOfThinkingResult(AvailableQuiz $availableQuiz)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = Auth::user()->typeOfThinkingResult;
        if(empty($result)) abort(404);

        $resultValues = $result->values;
        $userTypes = $result->values()->where('is_higher', 1)->get();

        return view('quiz.result')
            ->withAvailableQuiz($availableQuiz)
            ->withUserTypes($userTypes)
            ->withResult($result)
            ->withResultValues($resultValues);
    }

    public function typeOfThinkingDetails(AvailableQuiz $availableQuiz, TypeOfThinking $type)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $availableQuiz->user->typeOfThinkingResult;
        if(empty($result)) abort(404);
        $typeResult = $result->values()->where('type_id', $type->id)->first();

        return view('quiz.details')
            ->withTypeResult($typeResult)
            ->withAvailableQuiz($availableQuiz)
            ->withType($type);
    }

    public function solutionOfCasesResult(AvailableQuiz $availableQuiz)
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $result = Auth::user()->solutionOfCasesResult;
        if(empty($result)) abort(404);
        $situations = Situation::all();
        $wrapper = new SolutionCasesResultWrapper();

        return view('quiz.result')
            ->withAvailableQuiz($availableQuiz)
            ->withSituations($situations)
            ->withResult($result)
            ->withWrapper($wrapper);
    }

    public function results()
    {
;
        if(!Auth::user()->isStudent) abort(404);
        $data = $this->takeUserResults(Auth::user());
//        dd($data, Auth::user()->getAuthIdentifier());
        if(empty($data)) return view('quiz.results_not_finished_tests')
            ->withUser(Auth::user());

        return view('quiz.results', $data);
    }

    public function createPdf()
    {
        if(!(Auth::user()->school_id && Auth::user()->class_id)) abort(404, 'Школа и класс не указаны');
        $data = $this->takeUserResults(Auth::user());
        if(empty($data)) abort(422, "Требуется пройти все тесты");


        $pdf = PDF::loadView('quiz.results-pdf', $data)
            ->setPaper('a4', 'landscape');
        return $pdf->stream('результаты.pdf');
    }

    public function userResults(User $user)
    {
        $data = $this->takeUserResults($user);
        if(empty($data)) return view('quiz.results_not_finished_tests')
            ->withUser($user);

        return view('quiz.results', $data);
    }

    public function createUserPdf(User $user)
    {
        if(!($user->school_id && $user->class_id)) abort(404, 'Школа и класс не указаны');
        $data = $this->takeUserResults($user);
        if(empty($data)) abort(422, "Требуется пройти все тесты");


        $pdf = PDF::loadView('quiz.results-pdf', $data)
            ->setPaper('a4', 'landscape');
        return $pdf->stream('результаты.pdf');
    }

    public function takeUserResults($user) {
        $traits = CharacterTrait::all();

        $resultWrapper = new ResultWrapper($user);

        /** @noinspection PhpUndefinedFieldInspection */
        $characterTraitResult = $user->characterTraitResult;
        if(empty($characterTraitResult)) return null;

        $characterTraitResultValues = $characterTraitResult->values;
        $characterTraitWrapper = new CharacterTraitResultWrapper();
        $traitsQuiz = AvailableQuiz::where('user_id', $user->id)
            ->whereHas('quiz', function ($q) {
                $q->where('slug', 'traits');
            })->first();

        $professionalTypes = ProfessionalType::all();
        /** @noinspection PhpUndefinedFieldInspection */
        $professionalTypeResult = $user->professionalTypeResult;
        $professionalTypesQuiz = AvailableQuiz::where('user_id', $user->id)
            ->whereHas('quiz', function($q) { $q->where('slug', 'interests'); })->first();

        $suitableProfessionMatrix = SuitableProfessionResult::where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->first();

        $questionnaireResult = $user->studentQuestionnaireResult;
        $resultFactorMotiveOfChoice = $user->factorMotiveOfChoiceResult;

        if(empty($suitableProfessionMatrix) || empty($professionalTypeResult) || empty($questionnaireResult) || empty($resultFactorMotiveOfChoice)) {
            return null;
        }

        $suitableProfessionMatrix = $suitableProfessionMatrix->careerMatrix;

        $professionalTypeValues = $professionalTypeResult->values;
        $prevItem = null;
        $sortedTypes = $professionalTypeValues->sortByDesc('value');
        foreach ($sortedTypes as $professionalTypeValue) {
            if(!empty($prevItem) && $prevItem->value != $professionalTypeValue->value || $professionalTypeValue->value == 0) {
                $professionalTypeValue->active = false;
                continue;
            }

            $prevItem = $professionalTypeValue;
            $professionalTypeValue->active = true;
        }


        $parents = [];
        $observers = $user->observers;
        if(!empty($observers)) {
            foreach ($observers as $observer) {
                $parents[] = $observer->user;
            }
        }

        $depthTestsFinished = $user->finishedDepthTests;

        // склонности
        $inclinationQuiz = AvailableQuiz::where('user_id', $user->id)
            ->whereHas('quiz', function($q) { $q->where('slug', 'inclinations'); })->first();
        $inclinationResult = $user->inclinationResult;
        if($inclinationResult) {
            $inclinationValues = $inclinationResult->values;
            $inclinationTypes = $inclinationResult->values()->where('is_higher', 1)->get();
        }

        // общий уровень интеллекта
        $intelligenceLevelResult = $user->intelligenceLevelResult;
        if($intelligenceLevelResult) {
            $intelligenceLevelValues = $intelligenceLevelResult->values;
        }

        // тип мышления
        $typeThinkingQuiz = AvailableQuiz::where('user_id', $user->id)
            ->whereHas('quiz', function($q) { $q->where('slug', 'type-of-thinking'); })->first();
        $typeThinkingResult = $user->typeOfThinkingResult;
        if($typeThinkingResult) {
            $typeThinkingValues = $typeThinkingResult->values;
            $thinkingTypes = $typeThinkingResult->values()->where('is_higher', 1)->get();
        }


        // решение кейсов
        $solutionCasesResult = $user->solutionOfCasesResult;
        $situations = Situation::all();
        $solutionCasesWrapper = new SolutionCasesResultWrapper();

        return [
            'user' => $user,
            'parents' => $parents,
            'depthTestsFinished' => $depthTestsFinished,
            'resultWrapper' => $resultWrapper,

            // анкета студента
            'questionnaireResult' => $questionnaireResult,
            'resultFactorMotiveOfChoice' => $resultFactorMotiveOfChoice,

            // результаты теста характер
            'traits' => $traits,
            'traitsQuiz' => $traitsQuiz,
            'characterTraitWrapper' => $characterTraitWrapper,
            'characterTraitResult' => $characterTraitResult,
            'characterTraitResultValues' => $characterTraitResultValues,

            // результаты интересы
            'professionalTypesQuiz' => $professionalTypesQuiz,
            'professionalTypes' => $professionalTypes,
            'professionalTypeResult' => $professionalTypeResult,
            'professionalTypeValues' => $professionalTypeValues,

            // результат подходящие профессии
            'suitableProfessionMatrix' => $suitableProfessionMatrix,

            // результат склонности
            'inclinationQuiz' => $inclinationQuiz,
            'inclinationResult' => $inclinationResult,
            'inclinationValues' => $inclinationValues ?? null,
            'inclinationTypes' => $inclinationTypes ?? null,

            // результат общий уровень интеллекта
            'intelligenceLevelResult' => $intelligenceLevelResult,
            'intelligenceLevelValues' => $intelligenceLevelValues ?? null,

            // результат тип мышления
            'typeThinkingQuiz' => $typeThinkingQuiz,
            'typeThinkingResult' => $typeThinkingResult,
            'typeThinkingValues' => $typeThinkingValues ?? null,
            'thinkingTypes' => $thinkingTypes ?? null,

            // результат решение кейсов
            'solutionCasesResult' => $solutionCasesResult,
            'situations' => $situations,
            'solutionCasesWrapper' => $solutionCasesWrapper,
        ];
    }
}
