<div class="card-body" id="interests">
    <div class="d-flex flex-sm-nowrap flex-wrap">
        <div class="mr-5 max-w-225px">
            <h3 class="w-225px bg-orange rounded-pill text-white py-4 px-8 font-weight-bold font-size-lg font-hero text-center">&laquo;Образ Я&raquo;</h3>
            <div class="mx-5 mt-7">
                <h4 class="text-uppercase font-orange font-size-h5 font-hero font-weight-bold">Интересы</h4>
                <span class="text-dark-50 font-size-lg">Направления будущей деятельности</span>
            </div>
        </div>
        <div class="separator separator-solid my-7 w-100 d-block d-sm-none"></div>
        <div class="ml-5 flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <?php $__currentLoopData = $professionalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php $value = $professionalTypeResult->values->where('type_id', $type->id)->first(); ?>

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

                    <div class="row mt-15">
                        <div class="col">
                            <div>
                                <span class="font-hero-super font-blue">Полученные результаты достоверны на</span> <span class="font-size-h2 font-hero-super font-alla"><?php echo e($professionalTypeResult->reliabilityPercentage == 70 ? 'менее 70' : $professionalTypeResult->reliabilityPercentage); ?>%</span>
                            </div>
                            <div class="font-size-lg mt-2">
                                <?php echo e($professionalTypeResult->reliabilityDescription); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/test-screen-interests.blade.php ENDPATH**/ ?>