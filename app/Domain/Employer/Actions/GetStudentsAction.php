<?php

namespace Domain\Employer\Actions;

use Domain\Quiz\Models\Question;
use Domain\Quiz\States\Quiz\FinishedQuizState;
use Domain\User\Models\User;
use Illuminate\Support\Facades\DB;

class GetStudentsAction
{
    public function run(array $filters = [], bool $paginate = true)
    {
        $query = User::query()->students();

        $this->hasQuiz($query, 'student-questionnaire');
        $this->hasQuiz($query, 'traits');
        $this->hasQuiz($query, 'interests');
        $this->hasQuiz($query, 'suitable-professions');


        if (!empty($filters['chances_of_staying'])) {
            $chances = explode(';', $filters['chances_of_staying']);

            $query->whereHas('studentQuestionnaireResult', function ($q) use ($chances) {
                $q->whereHas('values', function($q2) use ($chances) {
                    $question = Question::where('content', "Какова вероятность, что ты останешься строить карьеру (любую) в родном городе")
                        ->firstOrFail();

                    $q2->where('question_id', $question->id)
                        ->whereHas('answer', function ($q) use ($chances) {
                            $q->where('title', '>=', intval($chances[0]))
                                ->where('title', '<=', intval($chances[1]));
                        });
                });
            });
        }

        if (!empty($filters['activity_kind'])) {
            $query->whereHas('suitableProfessions', function ($q) use ($filters) {
               $q->whereHas('careerMatrix', function ($q2) use ($filters) {
                  $q2->where('activity_kind_id', intval($filters['activity_kind']));
               });
            });
        }

        if (!empty($filters['activity_object'])) {
            $query->whereHas('suitableProfessions', function ($q) use ($filters) {
                $q->whereHas('careerMatrix', function ($q2) use ($filters) {
                    $q2->where('activity_object_id', intval($filters['activity_object']));
                });
            });
        }

        if (!empty($filters['school_id'])) {
            $query->where('school_id', $filters['school_id']);
        }

        if (!empty($filters['class_id'])) {
            $query->where('class_id', $filters['class_id']);
        }

        // join`ы
        $schoolClass = DB::table('school_classes')
            ->select(['id as sc_id', 'number as sc_number', 'letter as sc_letter']);

        $school = DB::table('schools')
            ->select(['id as s_id', 'number as s_number']);


        $query->leftJoinSub($schoolClass, 'sc', 'sc_id', '=', 'class_id')
            ->leftJoinSub($school, "s", "s_id", '=', 'school_id');

        $query->orderByRaw('s_number asc, sc_number asc, sc_letter asc, id desc');

        return $paginate ?
            $query->paginate() :
            $query->get();
    }

    private function hasQuiz($query, $slug)
    {
         $query->whereHas('availableQuizzes', function ($aq) use ($slug) {
             $aq->whereHas('quiz', function ($q) use ($slug) {
                 $q->where('slug', $slug);
             })->where('state', FinishedQuizState::class);
         });
    }
}
