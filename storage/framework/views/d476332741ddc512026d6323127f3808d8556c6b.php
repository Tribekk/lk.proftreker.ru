<div class="card-body" id="traits">
    <div class="d-flex flex-sm-nowrap flex-wrap">
        <div class="mr-5 max-w-225px">
            <h3 class="w-225px bg-orange rounded-pill text-white py-4 px-8 font-weight-bold font-size-lg font-hero text-center">Итог</h3>
        </div>
        <div class="separator separator-solid my-7 w-100 d-block d-sm-none"></div>
        <div class="ml-5 flex-grow-1">
            <div>
                <h3 class="font-size-h3 font-weight-bold font-orange">Ориентируйтесь на эти сферы интересов</h3>

                <?php $__currentLoopData = $professionalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php $value = $professionalTypeResult->values->where('type_id', $type->id)->first() ?>

                    <div class="row mt-8">
                        <div class="col-sm-6 col-md-7 order-1 order-sm-0">
                            <div class="progress mt-3">
                                <div class="progress-bar bg-<?php echo e($value->color); ?>" role="progressbar" style="width: <?php echo e($value->percentage ?? 0); ?>%" aria-valuenow="<?php echo e($value->percentage ?? 0); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 order-sm-1 order-0">
                            <div class="font-size-lg">
                                <a class="link" href="<?php echo e(route('quiz.type-details', [$professionalTypesQuiz, $type, 'backTo' => backResultsUrl('interests', $user->id)])); ?>">
                                    <?php echo e($type->area); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="mt-25">
                <h3 class="font-size-h3 font-weight-bold font-orange">Доминирующие черты</h3>

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
                    </div>
                </div>
            </div>

            <h3 class="font-size-h3 font-weight-bold font-orange mt-15">Достоверность результатов интересы + черты характера</h3>

            <div class="row">
                <div class="col">
                    <div>
                        <span class="font-hero-super font-blue">Полученные результаты достоверны на</span> <span class="font-size-h2 font-hero-super font-alla"><?php echo e($resultWrapper->bothReliabilityPercentage()); ?>%</span>
                    </div>
                    <div class="font-size-lg mt-2">
                        <?php echo e($resultWrapper->bothReliabilityDescription()); ?>

                    </div>
                </div>
            </div>

            <div class="mt-15">
                <h3 class="font-weight-bold font-blue font-size-h3">Выбраны профессии</h3>
                <p class="font-size-h6 text-dark font-weight-bold">"<?php echo e($suitableProfessionMatrix->activityObject->title); ?>" + "<?php echo e($suitableProfessionMatrix->activityKind->title); ?>"</p>
            </div>

            <div class="mt-8">
                <h3 class="font-size-h3 font-weight-bold font-orange mb-3">Мотивы выбора</h3>
                <?php echo $__env->make('quiz._result-student-questionnaire._result_factor_motive_of_choice', ['progressColor' => 'bg-blue', 'textColor' => 'font-blue'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="mt-8">
                <h3 class="font-weight-bold font-blue font-size-h3">На текущий момент проявлена</h3>
                <p class="font-size-h6 text-dark"><?php echo e($questionnaireResult->willingness_to_choose_profession_label); ?></p>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/result-screen.blade.php ENDPATH**/ ?>