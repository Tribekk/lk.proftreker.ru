<div>

    <h5 class="mb-5"><?php echo e(__('Уведомления')); ?></h5>

    <?php $__empty_1 = true; $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.notification', ['notification' => $notification])->html();
} elseif ($_instance->childHasBeenRendered('Oax5Agy')) {
    $componentId = $_instance->getRenderedChildComponentId('Oax5Agy');
    $componentTag = $_instance->getRenderedChildComponentTagName('Oax5Agy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Oax5Agy');
} else {
    $response = \Livewire\Livewire::mount('user.notification', ['notification' => $notification]);
    $html = $response->html();
    $_instance->logRenderedChild('Oax5Agy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-outline-secondary"><?php echo e(__('Уведомлений нет')); ?></div>
    <?php endif; ?>


</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/layout/partials/_extras/offcanvas/_quick-user/_notifications.blade.php ENDPATH**/ ?>