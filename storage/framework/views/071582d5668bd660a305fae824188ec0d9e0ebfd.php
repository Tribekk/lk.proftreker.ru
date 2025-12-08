<div class="card-header flex-wrap border-0 pt-6 pb-0">
    <h3 class="card-title align-items-start flex-column">
        <span class="card-label font-weight-bolder text-dark">
            <?php echo e(__('Настройка разрешений для роли')); ?> <span class="text-primary font-weight-boldest"><?php echo e($role->title); ?></span>
        </span>
    </h3>

    <div class="card-toolbar">
         <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['link' => ''.e(route('admin.roles.view')).'','title' => ''.e(__('К списку ролей')).'']); ?>
<?php $component->withName('inputs.button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f)): ?>
<?php $component = $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f; ?>
<?php unset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/admin/authorization/roles/_permissions/_header.blade.php ENDPATH**/ ?>