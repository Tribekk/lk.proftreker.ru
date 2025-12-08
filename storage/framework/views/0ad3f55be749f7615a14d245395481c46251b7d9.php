<h3 class="font-pixel font-orange font-size-h1 mb-10">
    Результаты: <?php echo e($availableQuiz->quiz->title); ?>

</h3>

<?php if(!isset($disablePreviousLink)): ?>
    <div>
        <a role="button" class="link font-size-h3" href="<?php echo e(route('quiz.view')); ?>">К списку анкет и тестов</a>
    </div>
<?php endif; ?>

<div class="row mt-10">
    <?php $__currentLoopData = $situations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $situation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 my-3">
            <h2 class="font-size-h2 font-blue"><?php echo e($situation->title); ?></h2>
            <h5 class="font-size-h5 font-weight-bold"><?php echo e($situation->content); ?></h5>

            <?php
                $results = $wrapper->results($situation->id, $result->id);
            ?>

            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_result-solution_of_cases.blade.php ENDPATH**/ ?>