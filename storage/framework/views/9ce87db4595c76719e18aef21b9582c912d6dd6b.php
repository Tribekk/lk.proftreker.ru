<?php
    $solutionCasesResult = $consultation->child->solutionOfCasesResult;
    $situations = \Domain\Quiz\Models\Situation::all();
    $solutionCasesWrapper = new \App\Quiz\Wrappers\SolutionCasesResultWrapper();
?>

<div class="row">
    <?php $__currentLoopData = $situations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $situation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 my-3">
            <h2 class="font-size-h2 font-blue"><?php echo e($situation->title); ?></h2>
            <h5 class="font-size-h5 font-weight-bold"><?php echo e($situation->content); ?></h5>

            <?php
                $solutionCasesResults = $solutionCasesWrapper->results($situation->id, $solutionCasesResult->id);
            ?>

            <?php $__currentLoopData = $solutionCasesResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-8">
                    <?php if($value->description): ?>
                        <h4 class="font-weight-bold mb-3 font-size-h6"><?php echo e($value->description); ?></h4>
                    <?php endif; ?>

                    <?php echo $value->interpretation->content; ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/consultations/_report/report_type_cases.blade.php ENDPATH**/ ?>