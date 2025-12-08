<div class="screen end-screen">
    <div class="content">
        <h2 class="text-blue font-size-h1 font-hero" style="margin-bottom: 30px;">Итоги отбора</h2>

        <div class="clearfix"></div>

        <table>
            @isset($proposedAdmission)
                <tr>
                    <td>
                        @include('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-blue',
                            'title' => 'Предложено поступление',
                            'percentage' => $proposedAdmission['percentage'],
                            'value' => $proposedAdmission['count'],
                        ])
                    </td>
                </tr>
            @endisset
            @isset($appliedAdmission)
                <tr>
                    <td>
                        @include('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-blue',
                            'title' => 'Подали заявления на поступление',
                            'percentage' => $appliedAdmission['percentage'],
                            'value' => $appliedAdmission['count'],
                        ])
                    </td>
                </tr>
            @endisset
            @isset($enrolledProfileUZ)
                <tr>
                    <td>
                        @include('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-blue',
                            'title' => 'Зачислены в профильные УЗ',
                            'percentage' => $enrolledProfileUZ['percentage'],
                            'value' => $enrolledProfileUZ['count'],
                        ])
                    </td>
                </tr>
            @endisset
            @isset($concludedTargetAgreement)
                <tr>
                    <td>
                        @include('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-green',
                            'title' => 'Заключили ЦД',
                            'percentage' => $concludedTargetAgreement['percentage'],
                            'value' => $concludedTargetAgreement['count'],
                        ])
                    </td>
                </tr>
            @endisset
        </table>
    </div>
</div>
