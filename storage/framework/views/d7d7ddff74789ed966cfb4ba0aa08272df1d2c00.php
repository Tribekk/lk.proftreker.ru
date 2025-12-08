<?php
    $professionalTypes = \Domain\Quiz\Models\ProfessionalType::all();
    $availableQuiz =  \Domain\Quiz\Models\AvailableQuiz::where('user_id', $consultation->child_id)
        ->whereHas('quiz', function($q) { $q->where('slug', 'interests'); })->first();
?>

<?php $__currentLoopData = $professionalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php $value = $consultation->child->professionalTypeResult->values->where('type_id', $type->id)->first() ?>

    <div class="row mt-8 px-1 px-md-15">
        <div class="col-6 col-md-8">
            <div class="progress mt-3">
                <div class="progress-bar bg-<?php echo e($value->color); ?>" role="progressbar" style="width: <?php echo e($value->percentage ?? 0); ?>%" aria-valuenow="<?php echo e($value->percentage ?? 0); ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="font-size-lg">
                <a class="link" href="<?php echo e(route('quiz.type-details', [$availableQuiz, $type, 'backTo' => route('consultations.edit', $consultation)."#report-tab",])); ?>">
                    <?php echo e($type->area); ?>

                </a>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="row mt-15">
    <div class="col">
        <div>
            <span class="font-hero-super font-blue">Полученные результаты достоверны на</span> <span class="font-size-h2 font-hero-super font-alla"><?php echo e($consultation->child->professionalTypeResult->reliabilityPercentage == 70 ? 'менее 70' : $consultation->child->professionalTypeResult->reliabilityPercentage); ?>%</span>
        </div>
        <div class="font-size-lg mt-2">
            <?php echo e($consultation->child->professionalTypeResult->reliabilityDescription); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_report/report_type_interests.blade.php ENDPATH**/ ?>