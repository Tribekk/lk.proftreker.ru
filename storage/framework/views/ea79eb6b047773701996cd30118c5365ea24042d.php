<div class="card-body" id="person-types">
    <div class="d-flex flex-sm-nowrap flex-wrap">
        <div class="mr-5 max-w-225px">
            <h3 class="w-225px bg-orange rounded-pill text-white py-4 px-8 font-weight-bold font-size-lg font-hero text-center">&laquo;Образ Я&raquo;</h3>
            <div class="mx-5 mt-7">
                <h4 class="text-uppercase font-orange font-size-h5 font-hero font-weight-bold">Подходящие профессии</h4>
                <span class="text-dark-50 font-size-lg">Варианты выбора</span>
            </div>
        </div>
        <div class="separator separator-solid my-7 w-100 d-block d-sm-none"></div>
        <div class="ml-5 flex-grow-1">
            <div class="text-right font-size-h5 mb-18">
                Подходящий типаж выделен <span class="font-weight-bold" style="color: #a3c255">зеленым</span> цветом
            </div>

            <div class="row justify-content-center">
                <?php $__currentLoopData = $professionalTypeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-6">
                        <a href="<?php echo e(route('quiz.person-type-detail', [$professionalTypesQuiz, $type->type_id, 'backTo' => backResultsUrl('person-types', $user->id)])); ?>" class="d-flex flex-wrap flex-column align-items-center">
                            <img class="max-h-100px max-w-100px max-h-sm-125px max-w-sm-125px img-fluid" src="<?php echo e(asset("/img/professions/" . ($type->active ? $type->type->activeImage : $type->type->inActiveImage))); ?>" alt="<?php echo e($type->type->title); ?>">
                            <span class="font-size-md-h4 font-size-lg text-center font-weight-bold my-4"
                                  <?php if($type->active): ?>
                                  style="color: #a3c255"
                                    <?php else: ?>
                                  style="color: #000000"
                                  <?php endif; ?>
                            >
                                <?php echo e($type->type->title); ?>

                            </span>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/test-screen-person-types.blade.php ENDPATH**/ ?>