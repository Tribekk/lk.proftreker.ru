<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Результаты']); ?>
<?php $component->withName('subheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b)): ?>
<?php $component = $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b; ?>
<?php unset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="font-pixel font-blue font-size-h1 mb-10">
                    Итоговые результаты
                </h3>

                <div class="mb-12">
                    <a role="button" class="link font-size-h3" href="<?php echo e(route('quiz.result', $availableQuiz)); ?>">К результату теста</a>
                </div>

                <div class="text-right font-size-h5 mb-18">
                    Подходящий типаж выделен <span class="font-blue font-weight-bold">синим</span> цветом
                </div>

                <div class="row justify-content-center">
                    <?php $__currentLoopData = $professionalTypeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="<?php echo e(route('quiz.person-type-detail', [$availableQuiz, $type->type_id])); ?>" class="d-flex flex-wrap flex-column align-items-center">
                                <img class="max-h-100px max-w-100px max-h-sm-125px max-w-sm-125px img-fluid" src="<?php echo e(asset("/img/professions/".($type->active ? $type->type->activeImage : $type->type->inActiveImage))); ?>" alt="<?php echo e($type->type->title); ?>">
                                <span class="font-size-md-h4 font-size-lg text-center font-blue font-weight-bold my-4">
                                    <?php echo e($type->type->title); ?>

                                </span>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_result-person-types.blade.php ENDPATH**/ ?>