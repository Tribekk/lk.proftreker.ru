<h3 class="font-pixel font-orange font-size-h1 mb-10">
    Результаты: <?php echo e($availableQuiz->quiz->title); ?>

</h3>

<?php if(!isset($disablePreviousLink)): ?>
    <div>
        <a role="button" class="link font-size-h3" href="<?php echo e(route('quiz.view')); ?>">К списку анкет и тестов</a>
    </div>
<?php endif; ?>

<?php $__currentLoopData = $resultValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row mt-12">
        <div class="col-lg-3 col-6 order-0">
            <h4 class="trait-font-size">
                <?php if (! ($value->is_higher)): ?>
                    <a href="<?php echo e(route('quiz.trait-details', [
                            'availableQuiz' => $availableQuiz,
                            'trait' => $value->trait,
                            'backTo' => $backTo ?? false,
                        ])); ?>">
                        <span class="font-hero-super font-alla">
                            <?php echo e($value->trait->lower_value); ?>

                        </span>
                    </a>
                <?php else: ?>
                    <span class="font-grey-light">
                        <?php echo e($value->trait->lower_value); ?>

                    </span>
                <?php endif; ?>
            </h4>
        </div>
        <div class="col-lg-6 align-self-center order-3 order-lg-2">
            <div class="progress">
                <?php if($value->is_higher): ?>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"></div>
                    <div class="progress-bar <?php echo e($wrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="width: <?php echo e($value->chart_percentage); ?>%"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo e(50 - $value->chart_percentage); ?>%"></div>
                <?php else: ?>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo e(50 - $value->chart_percentage); ?>%"></div>
                    <div class="progress-bar <?php echo e($wrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="width: <?php echo e($value->chart_percentage); ?>%"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-3 col-6 order-1 order-lg-3 text-right">
            <h4 class="trait-font-size">
                <?php if($value->is_higher): ?>
                    <a href="<?php echo e(route('quiz.trait-details', ['availableQuiz' => $availableQuiz, 'trait' => $value->trait, 'backTo' => $backTo ?? false,])); ?>">
                        <span class="font-hero-super font-orange">
                            <?php echo e($value->trait->higher_value); ?>

                        </span>
                    </a>
                <?php else: ?>
                    <span class="font-grey-light">
                        <?php echo e($value->trait->higher_value); ?>

                    </span>
                <?php endif; ?>
            </h4>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('quiz._percentage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row mt-10 px-1 px-md-15">
    <div class="col">
        <div>
            <span class="font-hero-super font-blue">Полученные результаты достоверны на</span> <span class="font-size-h2 font-hero-super font-alla"><?php echo e($result->reliabilityPercentage == 70 ? 'менее 70' : $result->reliabilityPercentage); ?>%</span>
        </div>
        <div class="font-size-lg mt-2">
            <?php echo e($result->reliabilityDescription); ?>

        </div>
    </div>
</div>

<?php $__env->startPush('css'); ?>
    <style>
        .trait-font-size {
            font-size: 1.25rem;
        }

        @media  only screen and (max-width: 800px) {
            .trait-font-size {
                font-size: 1rem;
            }
        }

        @media  only screen and (max-width: 699px) {
            .trait-font-size {
                font-size: .9rem;
            }
        }

        @media  only screen and (max-width: 470px) {
            .trait-font-size {
                font-size: 1rem;
            }
        }

        @media  only screen and (max-width: 360px) {
            .trait-font-size {
                font-size: .9rem;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_result-traits.blade.php ENDPATH**/ ?>