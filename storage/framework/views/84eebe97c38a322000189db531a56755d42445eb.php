<?php

        $matrix = \Domain\Quiz\Models\SuitableProfessionResult::where('user_id', 133)
                ->orderByDesc('created_at')
                ->first()->careerMatrix;
?>

<h4 class="font-size-h4 font-alla font-hero mb-5">
    Профессии: "<?php echo e($matrix->activityObject->title); ?>" + "<?php echo e($matrix->activityKind->title); ?>"
</h4>

<p class="font-size-h6">
    <?php echo e($matrix->description); ?>

</p>

<h4 class="font-size-h4 font-alla font-hero mt-10 mb-5">
    Примеры профессий:
</h4>

<p class="font-size-h6 mb-10">
    <?php echo $matrix->professions; ?>

</p>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_report/report_type_matrix.blade.php ENDPATH**/ ?>