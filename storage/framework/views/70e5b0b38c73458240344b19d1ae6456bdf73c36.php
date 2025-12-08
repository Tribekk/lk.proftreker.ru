<div class="screen <?php if(!isset($proposedAdmission) && !isset($appliedAdmission) && !isset($enrolledProfileUZ) && !isset($concludedTargetAgreement)): ?> end-screen <?php endif; ?>">
    <div class="content">
        <h2 class="text-blue font-size-h1 font-hero" style="margin-bottom: 30px;">Этапы тестов и консультаций</h2>

        <div class="clearfix"></div>

        <table>
            <?php if(isset($studentsCount)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-silver',
                            'title' => 'Списочная численность школьников',
                            'percentage' => $studentsCount['percentage'],
                            'value' => $studentsCount['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($registrationStudentsCount)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                           'color' => 'progress-orange',
                           'title' => 'Зарегистрировано школьников',
                           'percentage' => $registrationStudentsCount['percentage'],
                           'value' => $registrationStudentsCount['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($baseTest)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-orange',
                            'title' => 'Пройден базовый тест',
                            'percentage' => $baseTest['percentage'],
                            'value' => $baseTest['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($participatedEvents)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-orange',
                            'title' => 'Участвовали в мероприятиях',
                            'percentage' => $participatedEvents['percentage'],
                            'value' => $participatedEvents['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($matchedSelectionBaseStep)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-light-green',
                            'title' => 'Соответствует базовому профилю',
                            'percentage' => $matchedSelectionBaseStep['percentage'],
                            'value' => $matchedSelectionBaseStep['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($inviteDepthTest)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-orange',
                            'title' => 'Приглашены на углубленный тест',
                            'percentage' => $inviteDepthTest['percentage'],
                            'value' => $inviteDepthTest['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($depthTest)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-orange',
                            'title' => 'Результаты углубленного теста',
                            'percentage' => $depthTest['percentage'],
                            'value' => $depthTest['count'],
                       ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($targetSelectionDepthStep)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-light-green',
                            'title' => 'Соответствуют целевому профилю',
                            'percentage' => $targetSelectionDepthStep['percentage'],
                            'value' => $targetSelectionDepthStep['count'],
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($gotConsultation)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar-consultation', [
                            'title' => 'Дети получили консультацию, в том числе с родителями',
                            'percentageChild' => $gotConsultation['percentage_child'],
                            'valueChild' => $gotConsultation['count_child'],
                            'percentageParent' => $gotConsultation['percentage_parent'],
                            'valueParent' => $gotConsultation['count_parent'],
                       ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($parentRegistration)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-orange',
                            'title' => 'Зарегистрировано родителей',
                            'percentage' => $parentRegistration['percentage'],
                            'value' => $parentRegistration['count'],
                       ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(isset($recommend)): ?>
                <tr>
                    <td>
                        <?php echo $__env->make('employer.reports._students._pdf._progressbar', [
                            'color' => 'progress-green',
                            'title' => 'Рекомендованы',
                            'percentage' => $recommend['percentage'],
                            'value' => $recommend['count'],
                       ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endif; ?>
        </table>

    </div>
</div>
<?php /**PATH /var/www/proftracker/resources/views/employer/reports/_students/_pdf/stages-screen.blade.php ENDPATH**/ ?>