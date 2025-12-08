<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block;">
            <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">«Образ Я»</h3>
            <div style="margin-left: 10px">
                <h4 class="text-orange font-hero font-weight-bold m-0">ПОДХОДЯЩИЕ ПРОФЕССИИ</h4>
                <span class="text-dark-50">Варианты выбора</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
            <div class="text-right" style="margin-bottom: 40px">
                Подходящий типаж выделен <span class="text-blue font-weight-bold">синим</span> цветом
            </div>

            <?php $__currentLoopData = $professionalTypeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->index % 3 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
                <div class="text-center" style="display: inline-block; width: 200px; min-width: 200px; max-width: 200px; vertical-align: top; margin: 0 0 35px 0;">
                    <img style="max-width: 85px; max-height: 85px; width: auto; height: 85px;" src="<?php echo e(public_path("/img/professions/" . ($type->active ? $type->type->activeImage : $type->type->inActiveImage))); ?>" alt="<?php echo e($type->type->title); ?>">
                    <div class="font-size-h6 text-center <?php echo e($type->active ? 'text-blue' : 'text-dark-50'); ?> font-weight-bold">
                        <?php echo e($type->type->title); ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__currentLoopData = $professionalTypeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($type->active): ?>
        <div class="screen">
            <div class="content">
                <div style="width: 225px; padding-right: 30px; display: inline-block;">
                    <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">«Образ Я»</h3>
                    <div style="margin-left: 10px">
                        <h4 class="text-orange font-hero font-weight-bold m-0">ПОДХОДЯЩИЕ ПРОФЕССИИ</h4>
                        <span class="text-dark-50">Варианты выбора</span>
                    </div>
                </div>
                <div style="display: inline-block; width: 700px; float: right;">
                    <h2 class="font-size-h2 text-center text-blue"><?php echo e($type->type->title); ?></h2>
                    <div class="" style="margin-top: 15px; font-size: 14px;">
                        <?php echo str_replace(['&nbsp;', '  '], '',  $type->type->description); ?>

                    </div>

                    <div style="margin-top: 35px;">
                        <h3 class="text-blue font-size-h3">Подходящие профессии</h3>
                        <div style="font-size: 14px; margin-top: 15px;">
                            <?php $__currentLoopData = $type->professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo str_replace(['&nbsp;', '  '], '', $profession->title); ?>;
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/_pdf/test-screen__person-types.blade.php ENDPATH**/ ?>