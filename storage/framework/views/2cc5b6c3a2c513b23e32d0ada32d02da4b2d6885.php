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

                <div class="mb-8">
                    <a role="button" class="link font-size-h3" href="<?php echo e(request('backTo') ? request('backTo') : route('quiz.person-types', $availableQuiz)); ?>">К списку типажей</a>
                </div>

                <div class="row my-7">
                    <div class="col-md-3">
                        <img class="svg-icon-4x" src="<?php echo e(asset("/img/professions/{$type->type->activeImage}")); ?>" alt="<?php echo e($type->type->title); ?>">
                    </div>
                    <div class="col-md-8">
                        <h2 class="font-size-h2 font-blue font-weight-bold"><?php echo e($type->type->title); ?></h2>
                        <div class="mb-7">
                            <?php echo $type->type->description; ?>

                        </div>

                        <div>
                            <h3 class="font-size-h3 font-blue">Подходящие профессии</h3>
                            <?php $__currentLoopData = $type->professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $profession->title; ?>;
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_result-person-type-detail.blade.php ENDPATH**/ ?>