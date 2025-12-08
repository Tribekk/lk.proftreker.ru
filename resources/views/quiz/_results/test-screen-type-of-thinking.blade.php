<div class="card-body" id="type-of-thinking">
    <div class="d-flex flex-sm-nowrap flex-wrap">
        <div class="mr-5 max-w-225px">
            <h3 class="w-225px bg-alla rounded-pill text-white py-4 px-8 font-weight-bold font-size-lg font-hero text-center">Углубленный тест</h3>
            <div class="mx-5 mt-7">
                <h4 class="text-uppercase font-alla font-size-h5 font-hero font-weight-bold">Тип мышления</h4>
                <span class="text-dark-50 font-size-lg">Эффективный способ преобразования информации, коммуникаций и решения задач</span>
            </div>
        </div>
        <div class="separator separator-solid my-7 w-100 d-block d-sm-none"></div>
        <div class="ml-5 flex-grow-1">
            <div class="mb-15 d-flex justify-content-md-start justify-content-center my-4">
                <div id="chart2"></div>
            </div>

            @foreach($typeThinkingValues as $value)
                <div class="row">
                    <div class="col-md-5 order-1 order-md-0">
                        <div class="progress mb-5 bg-transparent my-3" style="position: relative; width: 100%; height: 18px">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: {{ $value->percentage }}%; z-index: 2; background-color: {{$value->hexColor()}}"></div>
                            <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="{{ route('quiz.type-of-thinking-details', [$typeThinkingQuiz, $value->type_id, 'backTo' => backResultsUrl('type-of-thinking', $user->id)]) }}" class="text-dark font-size-h4 {{ $value->is_higher ? 'font-weight-bold' : '' }}">{{ $value->type->title }}</a>
                    </div>
                </div>
            @endforeach
            <div class="row mt-15">
                @forelse($thinkingTypes as $thinkingType)
                    <div class="mb-8">
                        <h3 class="font-size-h3 font-weight-bold font-blue mb-0">{!! $thinkingType->type->title !!}</h3>
                        <p class="font-size-h5">{!! $thinkingType->type->who_is_it !!}</p>

                        <div class="font-size-h5">{!! $thinkingType->type->description !!}</div>

                        <h4 class="font-size-h4 font-weight-bold text-dark-50 mb-0 mt-5">{!! $thinkingType->manifestation->title !!}</h4>
                        @if($thinkingType->manifestation->description)
                            <p class="font-size-h5">{!! $thinkingType->manifestation->description !!}</p>
                        @endif
                    </div>

                    @if(!$loop->last)
                        <hr>
                    @endif
                @empty
                    <h3 class="font-size-h3 text-dark">Тип мышления не выражен</h3>
                @endforelse
            </div>
        </div>
    </div>
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
            foreach ($typeThinkingValues as $value) {
                $totalValues += $value->value;
            }
        @endphp

        @if($totalValues > 0)
        var options = {
            series: [@foreach($typeThinkingValues as $value){!! round((100 / $totalValues) * $value->value) !!},@endforeach],
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
            colors: [@foreach($typeThinkingValues as $value) @if($value->value > 0) "{!! $value->type->hex_color !!}", @endif @endforeach],
            labels: [@foreach($typeThinkingValues as $value) @if($value->value > 0) "{!! $value->type->title !!}", @endif @endforeach],
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
        @endif
    </script>
@endpush
