<div class="card-body" id="traits">
    <div class="d-flex flex-sm-nowrap flex-wrap">
        <div class="mr-5 max-w-225px">
            <h3 class="w-225px bg-orange rounded-pill text-white py-4 px-8 font-weight-bold font-size-lg font-hero text-center">&laquo;Образ Я&raquo;</h3>
            <div class="mx-5 mt-7">
                <h4 class="text-uppercase font-orange font-size-h5 font-hero font-weight-bold">Особенности характера</h4>
                <span class="text-dark-50 font-size-lg">Портрет личности</span>
            </div>
        </div>
        <div class="separator separator-solid my-7 w-100 d-block d-sm-none"></div>
        <div class="ml-5 flex-grow-1">
            <div class="text-right">
                Чем выше показатель, тем ярче выражена черта<br>
                <b>Степень проявленности этого качества указана в процентах</b>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-12">
                            <?php echo $__env->make('quiz._percentage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <?php $__currentLoopData = $characterTraitResultValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row mt-8">
                            <div class="col-lg-3 col-6 order-0">
                                <h4 class="trait-font-size">
                                    <?php if (! ($value->is_higher)): ?>
                                        <a href="<?php echo e(route('quiz.trait-details', ['availableQuiz' => $traitsQuiz, 'trait' => $value->trait, 'backTo' => backResultsUrl('traits', $user->id)])); ?>">
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
                                        <div class="progress-bar <?php echo e($characterTraitWrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="width: <?php echo e($value->chart_percentage); ?>%"></div>
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo e(50 - $value->chart_percentage); ?>%"></div>
                                    <?php else: ?>
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo e(50 - $value->chart_percentage); ?>%"></div>
                                        <div class="progress-bar <?php echo e($characterTraitWrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="width: <?php echo e($value->chart_percentage); ?>%"></div>
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 order-1 order-lg-3 text-right text-lg-left">
                                <h4 class="trait-font-size">
                                    <?php if($value->is_higher): ?>
                                        <a href="<?php echo e(route('quiz.trait-details', ['availableQuiz' => $traitsQuiz, 'trait' => $value->trait, 'backTo' => backResultsUrl('traits', $user->id)])); ?>">
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

                    <div class="row mt-15">
                        <div class="col">
                            <div>
                                <span class="font-hero-super font-blue">Полученные результаты достоверны на</span> <span class="font-size-h2 font-hero-super font-alla"><?php echo e($characterTraitResult->reliabilityPercentage == 70 ? 'менее 70' : $characterTraitResult->reliabilityPercentage); ?>%</span>
                            </div>
                            <div class="font-size-lg mt-2">
                                <?php echo e($characterTraitResult->reliabilityDescription); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('css'); ?>
    <style>
        .trait-font-size {
            font-size: 1rem;
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
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/quiz/_results/test-screen__character_traits.blade.php ENDPATH**/ ?>