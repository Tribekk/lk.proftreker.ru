<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block">
            <h3 class="font-hero font-size-h5 pill pill__blue" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Анкетные данные</h3>
            <div style="margin-left: 10px">
                <h4 class="text-blue font-hero font-weight-bold m-0">МОТИВЫ ВЫБОРА</h4>
                <span class="text-dark-50">Ключевые ориентиры любой деятельности</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <div style="word-wrap: break-word; white-space: pre-line;">
                <h3 class="font-weight-bold text-blue font-size-h4 mb-2">Я ценю в себе и людях</h3>
                <?php $__currentLoopData = $questionnaireResult->valuesMeAndPeople; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="font-size-h5" style="word-wrap: break-word;">
                        <span class="text-dark-50"><?php echo e($value['title']); ?></span>
                        <?php if($value['description']): ?> - <?php echo e($value['description']); ?><?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="mt-5" style="word-wrap: break-word; white-space: pre-line;">
                <h3 class="font-weight-bold text-blue font-size-h4 mb-2">При выборе работы мне важно</h3>
                <?php $__currentLoopData = $questionnaireResult->importantWhenChoosingJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="font-size-h5" style="word-wrap: break-word;"><?php echo e($value); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<!-- график -->
<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block">
            <h3 class="font-hero font-size-h5 pill pill__blue" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Анкетные данные</h3>
            <div style="margin-left: 10px">
                <h4 class="text-blue font-hero font-weight-bold m-0">МОТИВЫ ВЫБОРА</h4>
                <span class="text-dark-50">Ключевые ориентиры любой деятельности</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <h3 class="font-weight-bold text-blue font-size-h4 mb-2">Ради этого я буду работать</h3>

            <div style="margin-top: 20px; width: 700px">
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
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/_pdf/questionnaire-screen__motive-of-choice.blade.php ENDPATH**/ ?>