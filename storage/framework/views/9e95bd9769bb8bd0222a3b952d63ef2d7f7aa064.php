<h3 class="font-pixel font-orange font-size-h1 mb-10">
    Общая характеристика профессий
</h3>

<div>
    <a class="link font-size-h3" href="<?php echo e(request('backTo', false) ? request('backTo') : route('quiz.result', $availableQuiz)); ?>">К результатам</a>
</div>

<?php
    /** @var \Domain\Quiz\Models\ProfessionalType $type */
    /** @var \Domain\Quiz\Models\ProfessionalTypeResult $result */
?>

<div class="row mt-10">
    <div class="col-lg-12">
        <h2 class="text-center font-hero-super font-size-h2 font-blue text-center">
            <?php echo e($type->title); ?>

        </h2>
        <h4 class="text-center font-size-h4 mb-5">
            У Вас <?php echo e($result->value($type)); ?> балл(ов)
        </h4>
        <div class="font-size-lg mb-10">
            <?php echo $type->description; ?>

        </div>

        <?php $__currentLoopData = $type->professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3 class="font-size-h3 font-alla font-hero"><?php echo $profession->title; ?></h3>
            <div class="row font-size-lg mb-10">
                <div class="col-md-8">
                    <?php echo $profession->description; ?>

                </div>
                <div class="col-md-4">
                    <?php echo $profession->competence; ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_details-interests.blade.php ENDPATH**/ ?>