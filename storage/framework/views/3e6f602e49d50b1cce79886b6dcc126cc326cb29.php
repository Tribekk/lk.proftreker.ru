<?php
    $professionalTypeValues = $consultation->child->professionalTypeResult->values;
    $prevItem = null;
    $sortedTypes = $professionalTypeValues->sortByDesc('value');
    foreach ($sortedTypes as $professionalTypeValue) {
        if(!empty($prevItem) && $prevItem->value != $professionalTypeValue->value || $professionalTypeValue->value == 0) {
            $professionalTypeValue->active = false;
            continue;
        }

        $prevItem = $professionalTypeValue;
        $professionalTypeValue->active = true;
    }

    $availableQuiz = \Domain\Quiz\Models\AvailableQuiz::where('user_id', $consultation->child_id)
            ->whereHas('quiz', function($q) { $q->where('slug', 'interests'); })->first();
?>
<div class="text-right font-size-h5 mb-18">
    Подходящий типаж выделен <span class="font-blue font-weight-bold">синим</span> цветом
</div>

<div class="row justify-content-center">
    <?php $__currentLoopData = $professionalTypeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="<?php echo e(route('quiz.person-type-detail', [$availableQuiz, $type->type_id, 'backTo' => route('consultations.edit', $consultation)."#report-tab",])); ?>" class="d-flex flex-wrap flex-column align-items-center">
                <img class="max-h-100px max-w-100px max-h-sm-125px max-w-sm-125px img-fluid" src="<?php echo e(asset("/img/professions/".($type->active ? $type->type->activeImage : $type->type->inActiveImage))); ?>" alt="<?php echo e($type->type->title); ?>">
                <span class="font-size-md-h4 font-size-lg text-center font-blue font-weight-bold my-4">
                    <?php echo e($type->type->title); ?>

                </span>
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_report/report_type_type.blade.php ENDPATH**/ ?>