<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__alla" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Углубленный тест</h3>
            <div style="margin-left: 10px">
                <h4 class="text-alla font-hero font-weight-bold m-0">СКЛОННОСТИ</h4>
                <span class="text-dark-50">Профессиональные предпочтения</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <?php $__currentLoopData = $inclinationValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="width: 700px">
                    <div style="width: 480px; margin-right: 20px; display: inline-block; vertical-align: top;">
                        <div class="progress bg-transparent">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo e($value->percentage); ?>%; z-index: 2; background-color: <?php echo e($value->hexColor()); ?>"></div>
                            <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%;"></div>
                        </div>
                    </div>
                    <div style="width: 200px; display: inline-block; vertical-align: top;">
                        <h4 class="font-size-h5 <?php echo e($value->is_higher ? 'font-weight-bold text-green' : ($value->value > 3 ? 'text-alla' : 'text-dark-50') . ' font-weight-normal'); ?>">
                            <?php echo e($value->inclination->title); ?>

                        </h4>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div style="width: 700px; margin-top: 40px; word-wrap: break-word;">
                <?php $__empty_1 = true; $__currentLoopData = $inclinationTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inclinationType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div style="margin-bottom: 20px;">
                        <h3 class="font-size-h4 font-weight-bold font-hero text-center mt-0"><?php echo e($inclinationType->inclination->title); ?></h3>
                        <div class="font-size-h5 font-weight-bold text-dark" style="margin-bottom: 10px;"><?php echo $inclinationType->type->title; ?></div>
                        <div class="font-size-h5" style="margin-bottom: 20px;"><?php echo $inclinationType->type->description; ?></div>
                        <div class="font-size-h5 text-dark-50" style="margin-bottom: 15px;"><?php echo $inclinationType->inclination->professions_info; ?></div>
                        <?php if(!$loop->last): ?>
                            <?php if(($loop->index + 1) % 2 == 0): ?>
                                <div style="page-break-after: always"></div>
                            <?php else: ?>
                                <div style="margin-top: 20px; width: 700px;">
                                    <hr>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h3 class="font-size-h4 text-dark text-alla">Профессиональная склонность не выражена</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/_pdf/test-screen__inclinations.blade.php ENDPATH**/ ?>