@extends('layout.page')

@section('subheader')
    <x-subheader title="" :availableQuiz="$availableQuiz" :withProgress="true"/>
@endsection

@section('content')
    <div class="container">
{{--        <div class="quiz-timer float-right">--}}
{{--            <i class="la la-clock quiz-timer__icon"></i>--}}
{{--            <span class="quiz-timer__value" id="quiz-timer"></span>--}}
{{--        </div>--}}

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">

                    <div class="card-body">
                        <h3 class="font-pixel font-orange font-size-h1 mb-10">
                            @if($availableQuiz->quiz->type == "test")
                                Тест {{ $availableQuiz->quiz->title }}
                            @else
                                {{ $availableQuiz->quiz->title }}
                            @endif
                        </h3>

                        <div>
                            <livewire:quiz.run-quiz :availableQuiz="$availableQuiz"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <style>
        .quiz-timer {
            position: fixed;
            position: -ms-device-fixed;
            z-index: 1;
            right: 0;
            display: flex;
            background: #fefefe;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            padding: 15px 25px;
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            width: fit-content;
            width: -moz-fit-content;
            align-items: center;
            box-shadow: 0 0 30px 0 rgba(82, 63, 105, 0.1);
        }

        .quiz-timer__icon {
            font-size: 2rem;
            color: #C1121C;
        }

        .quiz-timer__value {
            margin-left: 12px;
            text-align: center;
            font-weight: bolder;
            font-size: 21px;
            color: #C1121C;
        }
    </style>
@endpush

@push('scripts')
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            const timerSegmentFormat = (segment) => segment < 10 ? `0${segment}` : segment;--}}
{{--            // вычисление даты--}}
{{--            const now = new Date();--}}
{{--            let startedAt = new Date('{{  $availableQuiz->started_at->setTimezone('UTC')}}');--}}
{{--            const utcHoursAdd = now.getHours() - now.getUTCHours();--}}
{{--            startedAt.setTime(startedAt.getTime() + (utcHoursAdd * 60 * 60 * 1000))--}}


{{--            // функционал таймера--}}
{{--            let timerSeconds = ((now.getTime() - startedAt.getTime()) / 1000) - 1;--}}
{{--            timerInterval();--}}

{{--            setInterval(timerInterval, 1000);--}}
{{--        });--}}
{{--    </script>--}}
@endpush
