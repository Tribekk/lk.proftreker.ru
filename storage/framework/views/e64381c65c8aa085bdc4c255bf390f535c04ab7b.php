<h3 class="font-pixel font-orange font-size-h1 mb-10">
    Результаты: <?php echo e($availableQuiz->quiz->title); ?>

</h3>

<?php if(!isset($disablePreviousLink)): ?>
    <div>
        <a role="button" class="link font-size-h3" href="<?php echo e(route('quiz.view')); ?>">К списку анкет и тестов</a>
    </div>
<?php endif; ?>

<div class="row mt-6">
    <div class="col-md-7">
        <?php $__currentLoopData = $resultValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-md-8 order-1 order-md-0">
                    <div class="progress mb-5 bg-transparent my-3" style="position: relative; width: 100%; height: 18px">
                        <div class="progress-bar rounded-pill" role="progressbar" style="width: <?php echo e($value->percentage); ?>%; z-index: 2; background-color: <?php echo e($value->hexColor()); ?>"></div>
                        <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo e(route('quiz.inclination-details', [$availableQuiz, $value->inclination_id])); ?>" class="text-dark font-size-h4 <?php echo e($value->is_higher ? 'font-weight-bold' : ''); ?>"><?php echo e($value->inclination->title); ?></a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-md-5">
        <?php $__empty_1 = true; $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inclinationType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="mb-10">
                <h3 class="font-size-h2 font-weight-bold font-hero text-center mt-0"><?php echo e($inclinationType->inclination->title); ?></h3>
                <div class="font-size-h4 font-weight-bold text-dark mt-5"><?php echo $inclinationType->type->title; ?></div>
                <div class="font-size-lg mt-5"><?php echo $inclinationType->type->description; ?></div>
                <div class="font-size-lg text-dark-50 mt-5"><?php echo $inclinationType->inclination->professions_info; ?></div>
                <hr>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3 class="font-size-h3 text-dark">Профессиональная склонность не выражена</h3>
        <?php endif; ?>
    </div>
</div>

<?php $__env->startPush('css'); ?>
    <style>
        .progress__bg-line {
            width: 100%;
            height: 2px;
            top: 50%;
            left: 0;
            transform: translate(0, -50%);
            position: absolute;
            border-radius: 0;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_result-inclinations.blade.php ENDPATH**/ ?>