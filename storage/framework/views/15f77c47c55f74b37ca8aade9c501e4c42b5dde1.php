<div class="screen">
    <div class="content">
        <h2 class="text-alla font-size-h1 font-hero" style="margin-bottom: 0px;">Сводные данные</h2>
        <h4 class="font-size-h3 font-weight-normal" style="margin-bottom: 35px;">Сопоставление ответов ребенка и родителя</h4>

        <?php
            $parent = null;
            if(!empty($parents) && count($parents)) {
                $parent = $parents[0];
            }
        ?>

        <div class="table__header">
            <div class="table__header-cell" style="width: 290px; height: 50px;">
                <span class="font-weight-bold">Текст вопроса</span>
            </div>
            <div class="table__header-cell" style="width: 290px; height: 50px;">
                <div class="font-weight-bold">Ответ ребенка</div>
                <?php echo e($user->fullName); ?>

            </div>
            <div class="table__header-cell" style="width: 290px; height: 50px;">
                <div class="font-weight-bold">Ответ родителя</div>
                <?php if($parent): ?>
                    <?php echo e($parent->fullName); ?>

                <?php else: ?>
                    Родитель не привязан
                <?php endif; ?>
            </div>
        </div>
        <div class="table__body">
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Ценности - главенствующие принципы в семье
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php $__empty_1 = true; $__currentLoopData = $user->studentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div style="margin-bottom: 5px; word-wrap: break-word;"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        Анкета не пройдена
                    <?php endif; ?>
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php if($parent): ?>
                        <?php if($parent->parentQuestionnaireResult): ?>
                            <?php $__empty_1 = true; $__currentLoopData = $parent->parentQuestionnaireResult->dominationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div style="margin-bottom: 5px; word-wrap: break-word;"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                -
                            <?php endif; ?>
                        <?php else: ?>
                            Анкета не пройдена
                        <?php endif; ?>
                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Образ будущего
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php $__empty_1 = true; $__currentLoopData = $user->studentQuestionnaireResult->perfectFuture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div style="margin-bottom: 5px; word-wrap: break-word;"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        Анкета не пройдена
                    <?php endif; ?>
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php if($parent): ?>
                        <?php if($parent->parentQuestionnaireResult): ?>
                            <?php $__empty_1 = true; $__currentLoopData = $parent->parentQuestionnaireResult->imagineFeature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div style="margin-bottom: 5px; word-wrap: break-word;"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                -
                            <?php endif; ?>
                        <?php else: ?>
                            Анкета не пройдена
                        <?php endif; ?>
                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Вероятность что ребенок останется в родном городе
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <span style="word-wrap: break-word;"><?php echo e($user->studentQuestionnaireResult->chancesOfStayingHometown['value']); ?></span>
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php if($parent): ?>
                        <?php if($parent->parentQuestionnaireResult): ?>
                            <span style="word-wrap: break-word;"><?php echo e($parent->parentQuestionnaireResult->probabilityWillRemain); ?></span>
                        <?php else: ?>
                            Анкета не пройдена
                        <?php endif; ?>
                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Мотивы выбора - определяющие факторы выбора специальности
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php if($parent): ?>
                        <?php if($parent->parentQuestionnaireResult): ?>
                            <?php $__empty_1 = true; $__currentLoopData = $user->studentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div style="margin-bottom: 5px; word-wrap: break-word;"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                -
                            <?php endif; ?>
                        <?php else: ?>
                            Анкета не пройдена
                        <?php endif; ?>
                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php if($parent): ?>
                        <?php if($parent->parentQuestionnaireResult): ?>
                            <?php $__empty_1 = true; $__currentLoopData = $parent->parentQuestionnaireResult->factorsChoseJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div style="margin-bottom: 5px; word-wrap: break-word;"><?php echo e($value); ?><?php echo e($loop->last ? '.' : ';'); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                -
                            <?php endif; ?>
                        <?php else: ?>
                            Анкета не пройдена
                        <?php endif; ?>
                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px;">
                    Отношение к целевому обучению
                </div>
                <div class="table__row-cell" style="width: 290px;;">
                    <span style="word-wrap: break-word;"><?php echo e($user->studentQuestionnaireResult->concludingContractTargetedTraining); ?></span>
                </div>
                <div class="table__row-cell" style="width: 290px;">
                    <?php if($parent): ?>
                        <?php if($parent->parentQuestionnaireResult): ?>
                            <span style="word-wrap: break-word;"><?php echo e($parent->parentQuestionnaireResult->targetedTraining); ?></span>
                        <?php else: ?>
                            Анкета не пройдена
                        <?php endif; ?>
                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px; height: 50px;">
                    Интерес к получению предложений о мероприятиях и обучении
                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    <span style="word-wrap: break-word;"><?php echo e($user->studentQuestionnaireResult->receiveOffersFromTheEmployer); ?></span>
                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    <?php if($parent): ?>
                        <?php if($parent->parentQuestionnaireResult): ?>
                            <span style="word-wrap: break-word;"><?php echo e($parent->parentQuestionnaireResult->receivingProposalsForEvents); ?></span>
                        <?php else: ?>
                            Анкета не пройдена
                        <?php endif; ?>
                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
            </div>
            <div class="table__row">
                <div class="table__row-cell text-dark-50" style="width: 290px; height: 50px;">
                    Оценка удовлетворенности результатами проекта
                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    <?php echo e(optional($user->feedback)->mark ?? '-'); ?>

                </div>
                <div class="table__row-cell" style="width: 290px; height: 50px;">
                    <?php if($parent): ?>
                        <?php echo e(optional($parent->feedback)->mark ?? '-'); ?>

                    <?php else: ?>
                        Родитель не привязан
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/_pdf/questionnaire-compare-screen.blade.php ENDPATH**/ ?>