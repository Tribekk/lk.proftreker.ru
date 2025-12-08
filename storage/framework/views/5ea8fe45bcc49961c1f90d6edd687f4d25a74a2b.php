<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__alla" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">Углубленный тест</h3>
            <div style="margin-left: 10px">
                <h4 class="text-alla font-hero font-weight-bold m-0">ОБЩИЙ УРОВЕНЬ ИНТЕЛЛЕКТА</h4>
                <span class="text-dark-50">Способности, восприятие информации, уровень абстрактно-логического мышления</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
           <div style="width: 700px; margin-bottom: 70px;">
               <h3 class="font-size-h2 font-weight-bold font-hero">Твой уровень интеллекта - <?php echo e($intelligenceLevelResult->level->title); ?></h3>
               <h4 class="font-size-h5">определяет общую способность к решению
                   практических и интеллектуальных задач</h4>
           </div>

            <div style="width: 700px;">
                <?php $__currentLoopData = $intelligenceLevelValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="width: 700px; margin-bottom: 20px;">
                        <div style="margin-bottom: 12px;">
                            <h3 class="text-dark font-weight-bold font-size-h5"><?php echo e($value->type->title); ?></h3>
                            <h4 class="text-dark-50 font-weight-bold font-size-h5"><?php echo e($value->type->description); ?></h4>
                        </div>

                        <div class="progress bg-transparent">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo e($value->percentage); ?>%; z-index: 2; background-color: <?php echo e($value->hexColor()); ?>"></div>
                            <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%;"></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/_pdf/test-screen__intelligence-level.blade.php ENDPATH**/ ?>