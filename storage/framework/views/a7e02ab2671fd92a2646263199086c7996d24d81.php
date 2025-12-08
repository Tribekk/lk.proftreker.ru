<div class="screen end-screen">
    <div class="content">
        <h2 class="text-blue font-size-h1 font-hero" style="margin-bottom: 30px;">Итоги отбора</h2>

        <div class="clearfix"></div>

        <table>
            <?php if(isset($proposedAdmission)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-blue',
                            'title' => 'Предложено поступление',
                            'percentage' => $proposedAdmission['percentage'],
                            'value' => $proposedAdmission['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($appliedAdmission)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-blue',
                            'title' => 'Подали заявления на поступление',
                            'percentage' => $appliedAdmission['percentage'],
                            'value' => $appliedAdmission['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($enrolledProfileUZ)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-blue',
                            'title' => 'Зачислены в профильные УЗ',
                            'percentage' => $enrolledProfileUZ['percentage'],
                            'value' => $enrolledProfileUZ['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($concludedTargetAgreement)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-green',
                            'title' => 'Заключили ЦД',
                            'percentage' => $concludedTargetAgreement['percentage'],
                            'value' => $concludedTargetAgreement['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</div>
<?php /**PATH /var/www/proftracker/resources/views/employer/reports/_students/_pdf/selection-results-screen.blade.php ENDPATH**/ ?>