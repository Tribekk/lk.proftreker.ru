@extends('layout.page')

@section('subheader')
    <x-subheader title="Профтрекер" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">

                    <div class="card-body">
                        <h3 class="font-pixel font-orange font-size-h1 mb-10">
                            Выбери тест
                        </h3>
{{--                        <img src="{{ asset('img/boy.png') }}" style="height: 150px"/>--}}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="font-size-h3 font-hero mb-5 bg-orange p-5 text-center border-radius rounded-pill text-white">Тест &laquo;Образ Я&raquo;</h4>
                                    </div>
                                </div>

                                <div class="d-flex flex-column justify-content-between">
                                    @foreach($availableBaseQuizzes as $availableQuiz)
                                        <livewire:quiz.quiz-card availableQuizId="{{ $availableQuiz->id }}"/>
                                    @endforeach
                                </div>
                            </div>
                            @if($availableQuestionnaires)
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            @if($availableQuestionnaires[0]->state->fillable())
                                                <a href="{{ route('quiz.description', $availableQuestionnaires[0]) }}" class="btn btn-info px-md-10 text-white py-4 px-5 font-size-h3 font-weight-bolder my-2 rounded-pill col-12">АНКЕТА</a>
                                            @else
                                                <form action="{{ route('quiz.supplement', $availableQuestionnaires[0]) }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-info px-md-10 text-white py-4 px-5 font-size-h3 font-weight-bolder my-2 rounded-pill col-12">Изменить анкету</button>
                                                </form>
                                            @endif
                                        </div>
                                        <div class="col-md-5">
                                            @if(Auth::user()->studentQuestionnaireResult)
                                                <div class="text-center text-md-left font-size-md-lg  text-dark-50">
                                                    <span class="font-weight-bold">Заполнена</span><br>
                                                    {{ Auth::user()->studentQuestionnaireResult->created_at ? Auth::user()->studentQuestionnaireResult->created_at->format('d.m.Y') : '' }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    @include('quiz._index.student-questionnaire')
                                </div>
                            @endif
                        </div>

                        @if($availableDepthQuizzes->count())
                            <div class="mt-12" id="depth-tests">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h4 class="font-size-h4 font-hero mb-5 mt-10 mt-md-0 bg-alla p-5 text-center border-radius rounded-pill text-white">Углубленное тестирование</h4>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column justify-content-between">
                                            @foreach($availableDepthQuizzes as $availableQuiz)
                                                <livewire:quiz.quiz-card availableQuizId="{{ $availableQuiz->id }}"/>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
