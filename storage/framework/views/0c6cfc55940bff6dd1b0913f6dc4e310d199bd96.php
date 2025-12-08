<tbody class="datatable-body">
<tr>
    <td>
        <span class="font-size-h5">
            Мое мнение
        </span>
    </td>

    <?php if($parent->parentQuestionnaireResult): ?>
        <!-- родитель. ценности -->
        <td>
            <?php $__empty_1 = true; $__currentLoopData = $parent->parentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <span class="font-size-h5">-</span>
            <?php endif; ?>
        </td>

        <!-- родитель. образ будущего -->
        <td>
            <?php $__empty_1 = true; $__currentLoopData = $parent->parentQuestionnaireResult->imagineFeature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <span class="font-size-h5">-</span>
            <?php endif; ?>
        </td>

        <!-- родитель. вероятность что останется строить карьеру -->
        <td>
            <span class="font-size-h5 text-break"><?php echo e($parent->parentQuestionnaireResult->probabilityWillRemain); ?></span>
        </td>

        <!-- родитель. мотивы выбора -->
        <td>
            <?php $__empty_1 = true; $__currentLoopData = $parent->parentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <span class="font-size-h5">-</span>
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
    <?php else: ?>
        <td colspan="8">
            <div class="font-size-h5 font-weight-bold">
                Вы еще не заполнили анкету
            </div>
        </td>
    <?php endif; ?>
</tr>
<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($child->studentQuestionnaireResult): ?>
        <tr>
            <td>
                <span class="font-size-h5">
                    <?php echo e($child->fullName); ?>

                </span>
            </td>

            <!-- ребенок. ценности -->
            <td>
                <?php $__empty_1 = true; $__currentLoopData = $child->studentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- ребенок. образ будущего -->
            <td>
                <?php $__empty_1 = true; $__currentLoopData = $child->studentQuestionnaireResult->perfectFuture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- ребенок. вероятность остаться в родном городе -->
            <td>
                <div class="font-size-h5 text-break">
                    <?php echo e($child->studentQuestionnaireResult->chancesOfStayingHometown['value']); ?>

                </div>
            </td>

            <!-- ребенок. мотивы выбора -->
            <td>
                <?php $__empty_1 = true; $__currentLoopData = $child->studentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- ребенок. отношение к целевому обучению -->
            <td>
                <span class="font-size-h5 text-break">
                    <?php echo e($child->studentQuestionnaireResult->concludingContractTargetedTraining); ?>

                </span>
            </td>

            <!-- ребенок. интерес к получению предложений от работодателя -->
            <td>
                <span class="font-size-h5 text-break">
                    <?php echo e($child->studentQuestionnaireResult->receiveOffersFromTheEmployer); ?>

                </span>
            </td>

            <!-- ребенок. оценка проекта -->
            <td>
                <span class="font-size-h5">
                    <?php echo e(optional($child->feedback)->mark ?? '-'); ?>

                </span>
            </td>
        </tr>
    <?php else: ?>
        <tr>
            <td>
                <span class="font-size-h5">
                    <?php echo e($child->fullName); ?>

                </span>
            </td>
            <td colspan="8">
                <div class="font-size-h5 font-weight-bold">
                    Ребенок еще не заполнил анкету
                </div>
            </td>
        </tr>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/parent/_children/_table-body.blade.php ENDPATH**/ ?>