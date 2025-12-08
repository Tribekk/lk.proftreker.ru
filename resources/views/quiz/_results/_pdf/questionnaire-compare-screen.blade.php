<div class="screen">
    <div class="content">
        <h2 class="text-alla font-size-h1 font-hero" style="margin-bottom: 0px;">Сводные данные</h2>
        <h4 class="font-size-h3 font-weight-normal" style="margin-bottom: 35px;">Сопоставление ответов ребенка и родителя</h4>

        @php
            $parent = null;
            if(!empty($parents) && count($parents)) {
                $parent = $parents[0];
            }
        @endphp

        <div class="table__header">
            <div class="table__header-cell" style="width: 290px; height: 50px;">
                <span class="font-weight-bold">Текст вопроса</span>
            </div>
            <div class="table__header-cell" style="width: 290px; height: 50px;">
                <div class="font-weight-bold">Ответ ребенка</div>
                {{ $user->fullName }}
            </div>
            <div class="table__header-cell" style="width: 290px; height: 50px;">
                <div class="font-weight-bold">Ответ родителя</div>
                @if($parent)
                    {{ $parent->fullName }}
                @else
                    Родитель не привязан
                @endif
            </div>
        </div>
        <div class="table__body">
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Ценности - главенствующие принципы в семье
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @forelse($user->studentQuestionnaireResult->dominationValues as $value)
                        <div style="margin-bottom: 5px; word-wrap: break-word;">{{ $value }}{{ $loop->last ? '.' : ';' }}</div>
                    @empty
                        Анкета не пройдена
                    @endforelse
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @if($parent)
                        @if($parent->parentQuestionnaireResult)
                            @forelse($parent->parentQuestionnaireResult->dominationValues as $value)
                                <div style="margin-bottom: 5px; word-wrap: break-word;">{{ $value }}{{ $loop->last ? '.' : ';' }}</div>
                            @empty
                                -
                            @endforelse
                        @else
                            Анкета не пройдена
                        @endif
                    @else
                        Родитель не привязан
                    @endif
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Образ будущего
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @forelse($user->studentQuestionnaireResult->perfectFuture as $value)
                        <div style="margin-bottom: 5px; word-wrap: break-word;">{{ $value }}{{ $loop->last ? '.' : ';' }}</div>
                    @empty
                        Анкета не пройдена
                    @endforelse
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @if($parent)
                        @if($parent->parentQuestionnaireResult)
                            @forelse($parent->parentQuestionnaireResult->imagineFeature as $value)
                                <div style="margin-bottom: 5px; word-wrap: break-word;">{{ $value }}{{ $loop->last ? '.' : ';' }}</div>
                            @empty
                                -
                            @endforelse
                        @else
                            Анкета не пройдена
                        @endif
                    @else
                        Родитель не привязан
                    @endif
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Вероятность что ребенок останется в родном городе
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <span style="word-wrap: break-word;">{{ $user->studentQuestionnaireResult->chancesOfStayingHometown['value'] }}</span>
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @if($parent)
                        @if($parent->parentQuestionnaireResult)
                            <span style="word-wrap: break-word;">{{ $parent->parentQuestionnaireResult->probabilityWillRemain }}</span>
                        @else
                            Анкета не пройдена
                        @endif
                    @else
                        Родитель не привязан
                    @endif
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Мотивы выбора - определяющие факторы выбора специальности
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @if($parent)
                        @if($parent->parentQuestionnaireResult)
                            @forelse($user->studentQuestionnaireResult->factorsChoseJob as $value)
                                <div style="margin-bottom: 5px; word-wrap: break-word;">{{ $value }}{{ $loop->last ? '.' : ';' }}</div>
                            @empty
                                -
                            @endforelse
                        @else
                            Анкета не пройдена
                        @endif
                    @else
                        Родитель не привязан
                    @endif
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @if($parent)
                        @if($parent->parentQuestionnaireResult)
                            @forelse($parent->parentQuestionnaireResult->factorsChoseJob as $value)
                                <div style="margin-bottom: 5px; word-wrap: break-word;">{{ $value }}{{ $loop->last ? '.' : ';' }}</div>
                            @empty
                                -
                            @endforelse
                        @else
                            Анкета не пройдена
                        @endif
                    @else
                        Родитель не привязан
                    @endif
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Отношение к целевому обучению
                </div>
                <div class="table__row-cell" style="width: 290px;;">
                    <span style="word-wrap: break-word;">{{ $user->studentQuestionnaireResult->concludingContractTargetedTraining }}</span>
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    @if($parent)
                        @if($parent->parentQuestionnaireResult)
                            <span style="word-wrap: break-word;">{{ $parent->parentQuestionnaireResult->targetedTraining }}</span>
                        @else
                            Анкета не пройдена
                        @endif
                    @else
                        Родитель не привязан
                    @endif
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px; height: 50px;">
                    Интерес к получению предложений о мероприятиях и обучении
                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    <span style="word-wrap: break-word;">{{ $user->studentQuestionnaireResult->receiveOffersFromTheEmployer }}</span>
                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    @if($parent)
                        @if($parent->parentQuestionnaireResult)
                            <span style="word-wrap: break-word;">{{ $parent->parentQuestionnaireResult->receivingProposalsForEvents }}</span>
                        @else
                            Анкета не пройдена
                        @endif
                    @else
                        Родитель не привязан
                    @endif
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px; height: 50px;">
                    Оценка удовлетворенности результатами проекта
                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    {{ optional($user->feedback)->mark ?? '-' }}
                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    @if($parent)
                        {{ optional($parent->feedback)->mark ?? '-' }}
                    @else
                        Родитель не привязан
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
