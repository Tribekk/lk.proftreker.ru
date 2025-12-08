<div class="screen">
    <div class="content">
        <div style="width: 225px; padding-right: 30px; display: inline-block">
            <h3 class="font-hero font-size-h5 pill pill__orange" style="margin-bottom: 10px; height: 40px; line-height: 25px; border-radius: 20px">«Образ Я»</h3>
            <div style="margin-left: 10px">
                <h4 class="text-orange font-hero font-weight-bold m-0">ИНТЕРЕСЫ</h4>
                <span class="text-dark-50">Направления будущей деятельности</span>
            </div>
        </div>
        <div style="display: inline-block; width: 700px; float: right;">
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

            <div style="margin-top: 15px">
                <div class="font-size-h5 font-hero font-weight-bold text-blue" style="margin-bottom: 10px">Полученные результаты достоверны на <span class="font-size-h4 text-alla"><?php echo e($professionalTypeResult->reliabilityPercentage == 70 ? 'менее 70' : $professionalTypeResult->reliabilityPercentage); ?>%</span></div>
                <div class="progress" style="border-radius: 8px; margin-right: 290px">
                    <div class="progress-bar bg-alla }}" role="progressbar" style="width: <?php echo e($professionalTypeResult->reliabilityPercentage); ?>%"></div>
                </div>
                <div style="margin-top: 12px;" class="font-size-h6"><?php echo e($professionalTypeResult->reliabilityDescription); ?></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/_pdf/test-screen__interests.blade.php ENDPATH**/ ?>