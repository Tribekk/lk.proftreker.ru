<?php if(false): ?>
<div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 <?php if(Auth::user()->unreadNotifications->count()): ?> pulse pulse-primary btn-icon-primary <?php endif; ?>">
            <span class="pulse-ring"></span>
            <i class="fas fa-bell icon-lg"></i>
            <?php if(Auth::user()->unreadNotifications->count()): ?>
                <span class="ml-1 text-primary" style="font-size: 13px"><?php echo e(Auth::user()->unreadNotifications->count()); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <!--end::Toggle-->
    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
        <div class="px-4 mt-5">
            <?php $__empty_1 = true; $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.notification', ['notification' => $notification])->html();
} elseif ($_instance->childHasBeenRendered('NY9i6wP')) {
    $componentId = $_instance->getRenderedChildComponentId('NY9i6wP');
    $componentTag = $_instance->getRenderedChildComponentTagName('NY9i6wP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NY9i6wP');
} else {
    $response = \Livewire\Livewire::mount('user.notification', ['notification' => $notification]);
    $html = $response->html();
    $_instance->logRenderedChild('NY9i6wP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="alert alert-outline-secondary"><?php echo e(__('Уведомлений нет')); ?></div>
            <?php endif; ?>
        </div>
    </div>
    <!--end::Dropdown-->
</div>
<?php endif; ?>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/layout/partials/_header/_notifications.blade.php ENDPATH**/ ?>