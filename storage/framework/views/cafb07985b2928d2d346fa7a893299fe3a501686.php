<div>

    <h5 class="mb-5"><?php echo e(__('Уведомления')); ?></h5>

    <?php $__empty_1 = true; $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.notification', ['notification' => $notification])->html();
} elseif ($_instance->childHasBeenRendered('AKOfl3Q')) {
    $componentId = $_instance->getRenderedChildComponentId('AKOfl3Q');
    $componentTag = $_instance->getRenderedChildComponentTagName('AKOfl3Q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AKOfl3Q');
} else {
    $response = \Livewire\Livewire::mount('user.notification', ['notification' => $notification]);
    $html = $response->html();
    $_instance->logRenderedChild('AKOfl3Q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-outline-secondary"><?php echo e(__('Уведомлений нет')); ?></div>
    <?php endif; ?>


</div>
<?php /**PATH /var/www/proftracker/resources/views/layout/partials/_extras/offcanvas/_quick-user/_notifications.blade.php ENDPATH**/ ?>