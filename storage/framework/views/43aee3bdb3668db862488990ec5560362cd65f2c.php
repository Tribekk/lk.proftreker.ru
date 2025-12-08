<tbody class="datatable-body">
<tr>
    <?php if($consultation->parent): ?>
        <td>
            <span class="font-size-h5">
                <span class="font-weight-bold">Мнение родителя</span><br>
                <?php echo e($consultation->parent->fullName); ?>

            </span>
        </td>

        <?php if($consultation->parent->parentQuestionnaireResult): ?>
            <!-- родитель. ценности -->
            <td>
                <?php $__empty_1 = true; $__currentLoopData = $consultation->parent->parentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- родитель. образ будущего -->
            <td>
                <?php $__empty_1 = true; $__currentLoopData = $consultation->parent->parentQuestionnaireResult->imagineFeature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- родитель. вероятность что останется строить карьеру -->
            <td>
                <span class="font-size-h5 text-break"><?php echo e($consultation->parent->parentQuestionnaireResult->probabilityWillRemain); ?></span>
            </td>

            <!-- родитель. мотивы выбора -->
            <td>
                <?php $__empty_1 = true; $__currentLoopData = $consultation->parent->parentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span class="font-size-h5">-</span>
                <?php endif; ?>
            </td>

            <!-- родитель. отношение к целевому обучению -->
            <td>
                <span class="font-size-h5 text-break"><?php echo e($consultation->parent->parentQuestionnaireResult->targetedTraining); ?></span>
            </td>

            <!-- родитель. интерес к получению информации о мероприятиях -->
            <td>
                <span class="font-size-h5 text-break"><?php echo e($consultation->parent->parentQuestionnaireResult->receivingProposalsForEvents); ?></span>
            </td>

            <!-- родитель. оценка проекта -->
            <td>
                <span class="font-size-h5">
                    <?php echo e(optional($consultation->parent->feedback)->mark ?? '-'); ?>

                </span>
            </td>
        <?php else: ?>
            <td colspan="8">
                <div class="font-size-h5 font-weight-bold">
                    Вы еще не заполнили анкету
                </div>
            </td>
        <?php endif; ?>
    <?php endif; ?>
</tr>

<!-- ребенок -->
<tr>
    <td>
        <span class="font-size-h5">
            <span class="font-weight-bold">Мнение ребенка</span><br>
            <?php echo e($consultation->child->fullName); ?>

        </span>
    </td>

    <!-- ребенок. ценности -->
    <td>
        <?php $__empty_1 = true; $__currentLoopData = $consultation->child->studentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span class="font-size-h5">-</span>
        <?php endif; ?>
    </td>

    <!-- ребенок. образ будущего -->
    <td>
        <?php $__empty_1 = true; $__currentLoopData = $consultation->child->studentQuestionnaireResult->perfectFuture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span class="font-size-h5">-</span>
        <?php endif; ?>
    </td>

    <!-- ребенок. вероятность остаться в родном городе -->
    <td>
        <div class="font-size-h5 text-break">
            <?php echo e($consultation->child->studentQuestionnaireResult->chancesOfStayingHometown['value']); ?>

        </div>
    </td>

    <!-- ребенок. мотивы выбора -->
    <td>
        <?php $__empty_1 = true; $__currentLoopData = $consultation->child->studentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="font-size-h5 my-2 text-break"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span class="font-size-h5">-</span>
        <?php endif; ?>
    </td>

    <!-- ребенок. отношение к целевому обучению -->
    <td>
        <span class="font-size-h5 text-break">
            <?php echo e($consultation->child->studentQuestionnaireResult->concludingContractTargetedTraining); ?>

        </span>
    </td>

    <!-- ребенок. интерес к получению предложений от работодателя -->
    <td>
        <span class="font-size-h5 text-break">
            <?php echo e($consultation->child->studentQuestionnaireResult->receiveOffersFromTheEmployer); ?>

        </span>
    </td>

    <!-- ребенок. оценка проекта -->
    <td>
        <span class="font-size-h5">
            <?php echo e(optional($consultation->child->feedback)->mark ?? '-'); ?>

        </span>
    </td>
</tr>
</tbody>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/consultations/_report/questionnaire/_table-body.blade.php ENDPATH**/ ?>