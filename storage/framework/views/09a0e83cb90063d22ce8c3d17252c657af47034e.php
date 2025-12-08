<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__alla" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Углубленный тест</h3>
            <div style="margin-left: 10px">
                <h4 class="text-alla font-hero font-weight-bold m-0">ТИП МЫШЛЕНИЯ</h4>
                <span class="text-dark-50">Эффективный способ преобразования информации, коммуникаций и решения задач</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <?php $__currentLoopData = $typeThinkingValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="width: 700px">
                    <div style="width: 400px; margin-right: 20px; display: inline-block; vertical-align: top;">
                        <div class="progress bg-transparent">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo e($value->percentage); ?>%; z-index: 2; background-color: <?php echo e($value->hexColor()); ?>"></div>
                            <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%;"></div>
                        </div>
                    </div>
                    <div style="width: 360px; display: inline-block; vertical-align: top;">
                        <h4 class="font-size-h5 <?php echo e($value->is_higher ? 'font-weight-bold text-green' : ($value->value > 3 ? 'text-blue' : 'text-dark-50') . ' font-weight-normal'); ?>">
                            <?php echo e($value->type->title); ?>

                        </h4>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div style="width: 700px; margin-top: 40px;">
              <?php $__empty_1 = true; $__currentLoopData = $thinkingTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thinkingType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div style="margin-bottom: 20px;">
                        <h3 class="font-size-h4 font-weight-bold text-blue mb-0"><?php echo $thinkingType->type->title; ?></h3>
                        <div class="font-size-h5"><?php echo $thinkingType->type->who_is_it; ?></div>

                        <div class="font-size-h5"><?php echo $thinkingType->type->description; ?></div>

                        <h4 class="font-size-h4 font-weight-bold text-dark-50 mb-0 mt-5"><?php echo $thinkingType->manifestation->title; ?></h4>
                        <?php if($thinkingType->manifestation->description): ?>
                            <div class="font-size-h5"><?php echo $thinkingType->manifestation->description; ?></div>
                        <?php endif; ?>

                        <?php if(!$loop->last): ?>
                            <?php if($loop->index == 0): ?>
                                <div style="page-break-after: always"></div>
                            <?php elseif(($loop->index + 2) % 2 == 0): ?>
                                <div style="page-break-after: always"></div>
                            <?php else: ?>
                                <div style="margin-top: 20px; width: 700px;">
                                    <hr>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h3 class="font-size-h4 text-dark text-alla">Тип мышления не выражен</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/_pdf/test-screen__type-of-thinking.blade.php ENDPATH**/ ?>