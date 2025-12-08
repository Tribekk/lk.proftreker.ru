<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'График консультаций']); ?>
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
            <div class="card-header">
                <h1 class="font-hero mb-0 font-size-h4">
                    Добавление времени консультации
                </h1>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('consultant.meeting_schedule.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                     <?php if (isset($component)) { $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\InputTextV::class, ['title' => 'Выберите день','required' => true,'placeholder' => 'Дата','datePicker' => true,'name' => 'date_at','id' => 'date_at']); ?>
<?php $component->withName('inputs.input-text-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f)): ?>
<?php $component = $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f; ?>
<?php unset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                     <?php if (isset($component)) { $__componentOriginalec4e7c2b7732157c812928c5165529797836140c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\Select::class, ['title' => 'Выберите временной промежуток (по уральскому времени)','required' => true,'values' => $timeIntervals,'name' => 'time_interval_id','id' => 'time_interval_id']); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalec4e7c2b7732157c812928c5165529797836140c)): ?>
<?php $component = $__componentOriginalec4e7c2b7732157c812928c5165529797836140c; ?>
<?php unset($__componentOriginalec4e7c2b7732157c812928c5165529797836140c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                    <div>
                        <a href="<?php echo e(route('consultant.meeting_schedule')); ?>" class="btn btn-outline-primary">Назад</a>
                        <button class="btn btn-primary">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/consultant/meeting-schedule/create.blade.php ENDPATH**/ ?>