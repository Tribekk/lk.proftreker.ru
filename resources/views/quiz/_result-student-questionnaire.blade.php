@extends('layout.page')

@section('subheader')
    <x-subheader title="Результаты, твой профиль"/>
@endsection

@section('content')
    <div class="container">
        <div class="col-xl-12">
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="mb-10">
                        <a role="button" class="link font-size-h3" href="{{ route('quiz.view') }}">К списку анкет и тестов</a>
                    </div>

                    <h2 class="font-weight-bold font-size-h1 text-warning mb-6">Образ будущего и мотивы выбора</h2>

                    <div class="row">
                        <div class="col-md-6 my-4">
                            <h3 class="font-weight-bold font-blue font-size-h3 mb-5">Я ценю в себе и людях</h3>
                            @foreach($result->valuesMeAndPeople as $value)
                                <div class="font-size-h6 my-2 text-break">
                                    <b>{{ $value['title'] }}</b>
                                    @if($value['description']) -  {{ $value['description'] }}@endif
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6 my-4">
                            <div class="mb-8">
                                <h3 class="font-weight-bold font-blue font-size-h3 mb-5">Мой жизненный девиз и его интерпретация</h3>
                                @foreach($result->lifeMottosAndInterpretations as $value)
                                    <div class="font-size-h6 my-2 text-break">
                                        <b>{{ $value['title'] }}</b>
                                        @if($value['description']) -  {{ $value['description'] }}@endif
                                    </div>
                                @endforeach
                            </div>

                            <div class="">
                                <h3 class="font-weight-bold font-blue font-size-h3">На текущий момент проявлена</h3>
                                <p class="font-size-h6 text-dark text-break">{{ $result->willingness_to_choose_profession_label }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 my-4">
                            <h3 class="font-weight-bold font-blue font-size-h3 mb-5">При выборе работы мне важно</h3>
                            @foreach($result->importantWhenChoosingJob as $value)
                                <div class="font-size-h6 my-2 text-break">{{ $value }}</div>
                            @endforeach
                        </div>
                        <div class="col-md-10 my-4">
                            <h3 class="font-weight-bold text-primary font-pixel font-size-h3 mb-7">Результаты: мотивы выбора</h3>
                            @include('quiz._result-student-questionnaire._result_factor_motive_of_choice')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
