<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">«Образ Я»</h3>
            <div style="margin-left: 10px">
                <h4 class="text-orange font-hero font-weight-bold m-0">ОСОБЕННОСТИ ХАРАКТЕРА</h4>
                <span class="text-dark-50">Портрет личности</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <div class="text-right text-dark-50" style="margin-bottom: 50px">
                Чем выше показатель, тем ярче выражена черта
                <div class="font-weight-bold">Степень проявленности этого качества указана в процентах</div>
            </div>

            <div style="margin-top: 40px;">
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

                <div style="margin-top: 25px">
                    <div class="font-size-h5 font-hero font-weight-bold text-blue" style="margin-bottom: 10px">Полученные результаты достоверны на <span class="font-size-h4 text-alla"><?php echo e($characterTraitResult->reliabilityPercentage == 70 ? 'менее 70': $characterTraitResult->reliabilityPercentage); ?>%</span></div>
                    <div class="progress" style="border-radius: 8px; margin-right: 290px">
                        <div class="progress-bar bg-alla }}" role="progressbar" style="width: <?php echo e($characterTraitResult->reliabilityPercentage); ?>%"></div>
                    </div>
                    <div style="margin-top: 12px;" class="font-size-h6"><?php echo e($characterTraitResult->reliabilityDescription); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__currentLoopData = $characterTraitResultValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="screen">
        <div class="content">
            <div style="width: 225px; padding-right: 30px; display: inline-block;">
                <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">«Образ Я»</h3>
                <div style="margin-left: 10px">
                    <h4 class="text-orange font-hero font-weight-bold m-0">ОСОБЕННОСТИ ХАРАКТЕРА</h4>
                    <span class="text-dark-50">Портрет личности</span>
                </div>
            </div>
            <div style="display: inline-block; width: 700px; float: right;">
                <h2 class="font-size-h2 text-center text-<?php echo e($characterTraitWrapper->color($value->is_higher)); ?>"><?php echo e($value->title); ?></h2>
                <div class="" style="margin-top: 15px; font-size: 14px;">
                    <?php echo str_replace(['&nbsp;', '  '], '', $value->description); ?>

                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/_pdf/test-screen__character-traits.blade.php ENDPATH**/ ?>