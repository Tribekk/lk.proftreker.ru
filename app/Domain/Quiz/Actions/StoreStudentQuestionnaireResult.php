<?php

namespace Domain\Quiz\Actions;

use Domain\Kladr\Models\Kladr;
use Domain\Quiz\Models\Question;
use Domain\Quiz\Models\Quiz;
use Domain\Quiz\Models\StudentQuestionnaireResult;
use Domain\Quiz\Models\UserAnswer;
use Domain\User\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreStudentQuestionnaireResult
{
    public function run(User $user): ?StudentQuestionnaireResult
    {
        DB::transaction(function () use ($user, &$result) {
            StudentQuestionnaireResult::where('user_id', $user->id)->delete();

            $quiz = Quiz::query()
                ->where('slug', 'student-questionnaire')
                ->firstOrFail();

            $willToChooseProfScore = $this->calculateWillingnessToChooseProfession($quiz, $user);
            $willToChooseProfLabel = $this->willingnessToChooseProfessionByScore($willToChooseProfScore);

            /**
             * Сохранение результатов анкетирования студента
             * @var StudentQuestionnaireResult $result
             */
            $result = StudentQuestionnaireResult::create([
                'uuid' => Str::uuid(),
                'user_id' => $user->id,
                'willingness_to_choose_profession_score' => $willToChooseProfScore,
                'willingness_to_choose_profession_label' => $willToChooseProfLabel,
            ]);


            $answers = UserAnswer::query()
                ->where('quiz_id', $quiz->id)
                ->where('user_id', $user->id)
                ->whereNull('deleted_at')->get();


            $questionCity = Question::where('quiz_id', $quiz->id)->where('content', 'Город')->first()->id;
            $questionEmail = Question::where('quiz_id', $quiz->id)->where('content', 'Если есть, укажи адрес электронной почты')->first()->id;
            $questionSocialLink = Question::where('quiz_id', $quiz->id)->where('content', 'Вставь ссылку на свой профиль любимой соц. сети, будем там дружить:')->first()->id;

            foreach($answers as $answer) {
                if($answer->question_id == $questionCity) {
                    $kladr = Kladr::where('name', $answer->value)->first();
                    $user->update(['kladr_code' => $kladr->code ?? null]);
                } else if($answer->question_id == $questionEmail) {
                    if(!empty($answer->value) && strlen($answer->value)) {
                        $user->update(['email' => $answer->value]);
                    }
                } else if($answer->question_id == $questionSocialLink) {
                    $user->update(['social_link' => $answer->value]);
                }

                $result->values()->create([
                    'uuid' => Str::uuid(),
                    'question_id' => $answer->question_id,
                    'answer_id' => $answer->answer_id,
                    'value' => $answer->value,
                ]);
            }
        });

        return $result;
    }

    /**
     * Метод вычисляет кол-во набранных баллов и возвращает кол-во этих баллов
     * @param $quiz
     * @param User $user
     * @return int
     */
    private function calculateWillingnessToChooseProfession($quiz, User $user): int
    {
        $questions = Question::where('quiz_id', $quiz->id)
            ->whereIn('content', [
                'Ты уже выбрал(а) будущую профессию',
                'Ты изучаешь информацию в интернете, связанную с будущей профессией',
                'Тебе известны противопоказания для избранной профессии',
                'Ты развиваешь профессионально значимые качества для выбранной деятельности',
                'Ты знаешь о проблемах в будущей профессии',
                'У тебя есть опыт деятельности, близкой к будущей профессии',
                'Ты знаешь об условиях поступления в образовательную организацию',
                'Тебе известно о возможностях трудоустройства по избираемой профессии',
                'Ты знаешь о возможностях заработка в избираемой профессии',
                'Если не поступишь в желаемую образовательную организацию, то попытаешься еще раз',
            ])->get('id');

        $answers = UserAnswer::query()
            ->where('user_id', $user->id)
            ->whereIn('question_id', $questions)
            ->whereNull('deleted_at')->get();

        $score = 0;
        foreach ($answers as $answer) {
            if($answer->answer->value == 1) {
                $score++;
            }
        }

        return $score;
    }


    /**
     * Возвращает строчное значение готовности к выбору профессии по набранным баллам
     * @param int $score
     * @return string
     */
    private function willingnessToChooseProfessionByScore(int $score): string
    {
        if($score < 4) {
            return 'Неготовность выбора профессии';
        } else if($score >= 4 && $score < 6) {
            return 'Низкая готовность выбора профессии';
        } else if($score >= 6 && $score < 8) {
            return 'Достаточная готовность выбора профессии';
        } else {
            return 'Высокая готовность выбора профессии';
        }
    }
}
