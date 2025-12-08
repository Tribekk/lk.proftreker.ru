<?php

namespace App\Quiz\ViewModels;

use Auth;
use Spatie\ViewModels\ViewModel;

class AvailableQuizzesViewModel extends ViewModel
{
    public function availableBaseQuizzes()
    {
        return Auth::user()
            ->availableQuizzes()
            ->whereHas('quiz', function($q) {
                $q->where('type', 'test');
                $q->where('group', 0);
            })->get();
    }

    public function availableDepthQuizzes()
    {
        return Auth::user()
            ->availableQuizzes()
            ->whereHas('quiz', function($q) {
                $q->where('type', 'test');
                $q->where('group', 1);
            })->get();
    }

    public function availableQuestionnaires()
    {
        return Auth::user()
            ->availableQuizzes()
            ->whereHas('quiz', function($q) {
                $q->where('type', 'form');
            })->get();
    }
}
