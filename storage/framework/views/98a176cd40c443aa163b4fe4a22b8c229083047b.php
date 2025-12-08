<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Итог</h3>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <h3 class="font-size-h4 font-weight-bold text-orange" style="margin-bottom: 20px;">Ориентируйтесь на эти сферы интересов</h3>

            <?php $__currentLoopData = $professionalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $value = $professionalTypeResult->values->where('type_id', $type->id)->first() ?>
                <div style="display: block; margin: 0 0 20px 0; float: left; width: 700px; height: 25px">
                    <div style="width: 400px; margin-right: 12px; display: inline-block; vertical-align: top">
                        <div class="progress" style="border-radius: 8px;">
                            <div class="progress-bar bg-<?php echo e($value->color); ?>" role="progressbar" style="width: <?php echo e($value->percentage ?? 0); ?>%"></div>
                        </div>
                    </div>
                    <div class="font-size-h6 font-hero text-dark-50" style="width: 280px; display: inline-block; text-align: right;">
                        <?php echo e($type->area); ?>

                    </div>
                </div>
                <div class="clearfix"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Итог</h3>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <div style="width: 700px; vertical-align: top;">
                <h3 class="font-size-h4 font-weight-bold text-orange" style="margin-bottom: 20px;">Доминирующие черты</h3>

                <table>
                    <tr>
                        <td></td>
                        <td>
                            <div style="margin-bottom: 25px;">
                                <table>
                                    <tr>
                                        <td>
                                            <div class="text-alla font-weight-bold font-size-h4">100%</div>
                                        </td>
                                        <td>
                                            <div class="text-dark-50 font-weight-bold font-size-h4 text-center">50%</div>
                                        </td>
                                        <td>
                                            <div class="text-orange font-weight-bold font-size-h4 text-right">100%</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="clearfix"></div>

                <?php $__currentLoopData = $characterTraitResultValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin-bottom: 25px;">
                        <h4 class="font-size-h5" style="width: 50%; display: inline-block;">
                        <span class="<?php echo e($value->is_higher ? 'text-dark-50 font-weight-normal' : 'text-alla'); ?>">
                            <?php echo e($value->trait->lower_value); ?>

                        </span>
                        </h4>
                        <h4 class="font-size-h5" style="width: 49%; display: inline-block; text-align: right;">
                        <span class="<?php echo e($value->is_higher ? 'text-orange' : 'text-dark-50 font-weight-normal'); ?>">
                            <?php echo e($value->trait->higher_value); ?>

                        </span>
                        </h4>

                        <div class="progress" style="border-radius: 8px; margin-top: 8px;">
                            <?php if($value->is_higher): ?>
                                <div class="progress-bar <?php echo e($characterTraitWrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="border-radius: 0; left: 50%; width: <?php echo e($value->chart_percentage); ?>%"></div>
                            <?php else: ?>
                                <div class="progress-bar <?php echo e($characterTraitWrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="border-radius: 0; left: <?php echo e(50 - $value->chart_percentage); ?>%; width: <?php echo e($value->chart_percentage); ?>%"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div style="width: 700px; vertical-align: top; margin-top: 50px;">
                <h3 class="font-size-h4 font-weight-bold text-orange" style="margin-bottom: 12px;">Достоверность результатов интересы + черты характера</h3>
                <span class="font-hero text-blue font-weight-bold">Полученные результаты достоверны на</span> <span class="font-size-h3 font-weight-bold font-hero text-alla"><?php echo e($resultWrapper->bothReliabilityPercentage()); ?>%</span>
                <div class="font-size-h6" style="margin-top: 5px;">
                    <?php echo e($resultWrapper->bothReliabilityDescription()); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Итог</h3>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <div style="width: 700px; vertical-align: top; margin-bottom: 30px;">
                <h3 class="font-size-h4 font-weight-bold text-blue" style="margin-bottom: 12px;">Выбраны профессии</h3>
                <div class="font-size-h5">"<?php echo e($suitableProfessionMatrix->activityObject->title); ?>" + "<?php echo e($suitableProfessionMatrix->activityKind->title); ?>"</div>
            </div>
            <div style="width: 700px; vertical-align: top; margin-bottom: 30px;">
                <h3 class="font-size-h4 font-weight-bold text-blue" style="margin-bottom: 12px;">Мотивы выбора</h3>

                <div style="width: 700px">
                    <?php $__currentLoopData = $resultFactorMotiveOfChoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="width: 700px">
                            <div style="width: 380px; margin-right: 20px; display: inline-block; vertical-align: top;">
                                <div class="progress bg-transparent">
                                    <div class="progress-bar <?php echo e($factor->percentage >= 50 ? $progressColor ?? 'bg-blue' : 'bg-gray'); ?>" role="progressbar" style="width: <?php echo e($factor->percentage); ?>%;"></div>
                                    <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div style="width: 300px; display: inline-block; vertical-align: top;">
                                <h4 class="font-size-h5">
                                    <span class="<?php echo e($factor->percentage >= 50 ? $textColor ?? 'text-blue' : 'text-dark-50'); ?>">
                                        <?php echo e($factor->factor->title); ?>

                                    </span>
                                </h4>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div style="width: 700px; vertical-align: top;">
                <h3 class="font-size-h4 font-weight-bold text-blue" style="margin-bottom: 12px;">На текущий момент проявлена</h3>
                <div class="font-size-h5"><?php echo e($questionnaireResult->willingness_to_choose_profession_label); ?></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/_pdf/screen__base-results.blade.php ENDPATH**/ ?>