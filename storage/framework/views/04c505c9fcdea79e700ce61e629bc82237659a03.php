<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Кабинет ребенка']); ?>
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
        <div class="card gutter-b">
            <div class="card-body">
                <h2 class="font-size-h2 text-primary font-weight-bold font-hero">Сводные данные</h2>
                <h3 class="font-size-h3 mb-8">
                    Здесь собраны анкетные данные, Вы можете сравнить ответы на идентичные вопросы –
                    увидеть мнение и видение Вашего ребенка
                </h3>

                <?php echo $__env->make('parent._children._table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h2 class="font-size-h2 text-primary font-weight-bold font-hero">Результаты тестирования</h2>
                <h3 class="font-size-h3 mb-8">
                    Вы можете изучить результаты и рекомендации
                </h3>

                <?php if($children->count()): ?>
                    <div class="button-group">
                        <a href="<?php echo e(route('observe.user')); ?>" class="btn btn-primary rounded-pill px-12 py-5 text-center min-h-90px my-2 mx-2 text-break">
                            <span class="d-block font-weight-bold font-size-h4 mb-0">Привязать аккаунт<br>ребенка</span>
                        </a>

                        <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('parent.children.results', ['child' => $child, 'backTo' => route('parent.children')])); ?>" class="btn btn-warning rounded-pill px-12 py-5 min-h-90px text-center my-2 mx-2 text-break">
                                <span class="d-block font-weight-bold font-size-h4 mb-0">Отчет по <?php echo e($child->finishedDepthTests ? 'глубинному тестированию' : 'базовому тесту'); ?></span>
                                <span class="d-block font-size-lg mt-0"><?php echo e($child->fullName); ?></span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <p class="font-size-h5">Привяжите аккаунт ребенка чтобы воспользоваться этой функцией</p>
                    <a href="<?php echo e(route('observe.user')); ?>" class="btn btn-primary rounded-pill px-12 py-5 text-center my-2 text-break">Привязать аккаунт ребенка</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/parent/children.blade.php ENDPATH**/ ?>