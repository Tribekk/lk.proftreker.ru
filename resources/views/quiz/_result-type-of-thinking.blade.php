<h3 class="font-pixel font-orange font-size-h1 mb-10">
    Результаты: {{ $availableQuiz->quiz->title }}
</h3>

@if(!isset($disablePreviousLink))
    <div>
        <a role="button" class="link font-size-h3" href="{{ route('quiz.view') }}">К списку анкет и тестов</a>
    </div>
@endif

<div class="row mt-12">
    <div class="col-md-7">
        @foreach($resultValues as $value)
            <div class="row">
                <div class="col-md-7 order-1 order-md-0">
                    <div class="progress mb-5 bg-transparent my-3" style="position: relative; width: 100%; height: 18px">
                        <div class="progress-bar rounded-pill" role="progressbar" style="width: {{ $value->percentage }}%; z-index: 2; background-color: {{$value->hexColor()}}"></div>
                        <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="{{ route('quiz.type-of-thinking-details', [$availableQuiz, $value->type_id]) }}" class="text-dark font-size-h4 {{ $value->is_higher ? 'font-weight-bold' : '' }}">{{ $value->type->title }}</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-5">
        <div class="mt-12">
            <div id="chart"></div>
        </div>
    </div>
</div>

<div class="row my-12">
    @forelse($userTypes as $thinkingType)
        <div class="col-md-6">
            <div class="my-8">
                <h3 class="font-size-h3 font-weight-bold font-blue mb-0">{!! $thinkingType->type->title !!}</h3>
                <p class="font-size-h5">{!! $thinkingType->type->who_is_it !!}</p>

                <div class="font-size-h5">{!! $thinkingType->type->description !!}</div>

                <h4 class="font-size-h4 font-weight-bold text-dark-50 mb-0 mt-5">{!! $thinkingType->manifestation->title !!}</h4>
                @if($thinkingType->manifestation->description)
                    <p class="font-size-h5">{!! $thinkingType->manifestation->description !!}</p>
                @endif
            </div>
            <hr>
        </div>
    @empty
        <h3 class="font-size-h3 text-dark">Тип мышления не выражен</h3>
    @endforelse
</div>

@push('css')
    <style>
        .progress__bg-line {
            width: 100%;
            height: 2px;
            top: 50%;
            left: 0;
            transform: translate(0, -50%);
            position: absolute;
            border-radius: 0;
        }
    </style>
@endpush

@push('scripts')
    <script>
        @php
            $totalValues = 0;
            foreach ($resultValues as $value) {
                $totalValues += $value->value;
            }
        @endphp

        @if($totalValues > 0)
            var options = {
                series: [@foreach($resultValues as $value){!! round((100 / $totalValues) * $value->value) !!},@endforeach],
                chart: {
                    height: 250,
                    type: 'donut',
                },
                dataLabels: {
                    enabled: false,
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '60%',
                            labels: {
                                show: false,
                            },
                        }
                    },

            },
            legend: false,
            colors: [@foreach($resultValues as $value) @if($value->value > 0) "{!! $value->type->hex_color !!}", @endif @endforeach],
            labels: [@foreach($resultValues as $value) @if($value->value > 0) "{!! $value->type->title !!}", @endif @endforeach],
        };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        @endif
    </script>
@endpush
