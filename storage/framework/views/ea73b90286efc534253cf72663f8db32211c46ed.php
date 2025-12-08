<?php
    $inclinationResult = $consultation->child->inclinationResult;
    if($inclinationResult) {
        $resultValues = $inclinationResult->values;
        $inclinationTypes = $inclinationResult->values()->where('is_higher', 1)->get();
    }

    $availableQuiz = \Domain\Quiz\Models\AvailableQuiz::where('user_id', $consultation->child_id)
        ->whereHas('quiz', function($q) { $q->where('slug', 'inclinations'); })->first();
?>

<div class="row">
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
                    <a href="<?php echo e(route('quiz.inclination-details', [$availableQuiz, $value->inclination_id, 'backTo' => route('consultations.edit', $consultation)."#report-tab",])); ?>" class="text-dark font-size-h4 <?php echo e($value->is_higher ? 'font-weight-bold' : ''); ?>"><?php echo e($value->inclination->title); ?></a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-md-5">
        <?php $__empty_1 = true; $__currentLoopData = $inclinationTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inclinationType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/consultations/_report/report_type_inclinations.blade.php ENDPATH**/ ?>