<tbody class="datatable-body">
<tr>
    <td>
        <span class="font-size-h5">
            Мое мнение
        </span>
    </td>

    <!-- ребенок. ценности -->
    <td>
        <?php $__empty_1 = true; $__currentLoopData = $user->studentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span class="font-size-h5">-</span>
        <?php endif; ?>
    </td>

    <!-- ребенок. образ будущего -->
    <td>
        <?php $__empty_1 = true; $__currentLoopData = $user->studentQuestionnaireResult->perfectFuture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span class="font-size-h5">-</span>
        <?php endif; ?>
    </td>

    <!-- ребенок. вероятность остаться в родном городе -->
    <td>
        <div class="font-size-h5 text-break">
            <?php echo e($user->studentQuestionnaireResult->chancesOfStayingHometown['value']); ?>

        </div>
    </td>

    <!-- ребенок. мотивы выбора -->
    <td>
        <?php $__empty_1 = true; $__currentLoopData = $user->studentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span class="font-size-h5">-</span>
        <?php endif; ?>
    </td>

    <!-- ребенок. отношение к целевому обучению -->
    <td>
        <span class="font-size-h5 text-break">
            <?php echo e($user->studentQuestionnaireResult->concludingContractTargetedTraining); ?>

        </span>
    </td>

    <!-- ребенок. интерес к получению предложений от работодателя -->
    <td>
        <span class="font-size-h5 text-break">
            <?php echo e($user->studentQuestionnaireResult->receiveOffersFromTheEmployer); ?>

        </span>
    </td>

    <!-- ребенок. оценка проекта -->
    <td>
        <span class="font-size-h5">
            <?php echo e(optional($user->feedback)->mark ?? '-'); ?>

        </span>
    </td>
</tr>

<?php $__empty_1 = true; $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php if($parent->parentQuestionnaireResult): ?>
            <tr>
            <td>
                <span class="font-size-h5">
                    Родитель<br>
                    <?php echo e($parent->fullName); ?>

                </span>
            </td>

            <!-- родитель. ценности -->
            <td>
                <?php $__empty_2 = true; $__currentLoopData = $parent->parentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- родитель. образ будущего -->
            <td>
                <?php $__empty_2 = true; $__currentLoopData = $parent->parentQuestionnaireResult->imagineFeature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- родитель. вероятность что останется строить карьеру -->
            <td>
                <span class="font-size-h5 text-break"><?php echo e($parent->parentQuestionnaireResult->probabilityWillRemain); ?></span>
            </td>

            <!-- родитель. мотивы выбора -->
            <td>
                <?php $__empty_2 = true; $__currentLoopData = $parent->parentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                    <span class="font-size-h5 text-break">-</span>
                <?php endif; ?>
            </td>

            <!-- родитель. отношение к целевому обучению -->
            <td>
                <span class="font-size-h5 text-break"><?php echo e($parent->parentQuestionnaireResult->targetedTraining); ?></span>
            </td>

            <!-- родитель. интерес к получению информации о мероприятиях -->
            <td>
                <span class="font-size-h5 text-break"><?php echo e($parent->parentQuestionnaireResult->receivingProposalsForEvents); ?></span>
            </td>

            <!-- родитель. оценка проекта -->
            <td>
                <span class="font-size-h5">
                    <?php echo e(optional($parent->feedback)->mark ?? '-'); ?>

                </span>
            </td>
        </tr>
    <?php else: ?>
        <tr>
            <td>
                <span class="font-size-h5">
                    Родитель<br>
                    <?php echo e($parent->fullName); ?>

                </span>
            </td>
            <td colspan="8">
                <div class="font-size-h5 font-weight-bold">
                     Еще не заполнил анкету
                </div>
            </td>
        </tr>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr>
        <td>
            <span class="font-size-h5">
                Мнение родителя
            </span>
        </td>
        <td colspan="8">
            <div class="font-size-h5 font-weight-bold">
                Родитель не привязан к аккаунту
            </div>
        </td>
    </tr>
<?php endif; ?>
</tbody>
<?php /**PATH /var/www/proftracker/resources/views/quiz/_results/_questionnaire-compare/_table-body.blade.php ENDPATH**/ ?>