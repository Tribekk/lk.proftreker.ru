<li class="nav-item mr-3">
    <a class="nav-link active" data-toggle="tab" href="#user-tab">
        <span class="nav-icon">
            <i class="la la-user"></i>
        </span>
        <span class="nav-text font-size-lg"><?php echo e(__('Пользователь')); ?></span>
    </a>
</li>


<li class="nav-item mr-3">
    <a class="nav-link mx-0" data-toggle="tab" href="#security-tab">
        <span class="nav-icon">
            <i class="la la-lock"></i>
        </span>
        <span class="nav-text font-size-lg"><?php echo e(__('Безопасность')); ?></span>
    </a>
</li>

<li class="nav-item mr-3">
    <a class="nav-link" data-toggle="tab" href="#notifications-tab">
        <span class="nav-icon">
            <i class="la la-telegram"></i>
        </span>
        <span class="nav-text font-size-lg">
            <?php echo e(__('Уведомления')); ?>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.unread-notifications-count', [])->html();
} elseif ($_instance->childHasBeenRendered('qNtXs1O')) {
    $componentId = $_instance->getRenderedChildComponentId('qNtXs1O');
    $componentTag = $_instance->getRenderedChildComponentTagName('qNtXs1O');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qNtXs1O');
} else {
    $response = \Livewire\Livewire::mount('user.profile.unread-notifications-count', []);
    $html = $response->html();
    $_instance->logRenderedChild('qNtXs1O', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </span>
    </a>
</li>
<?php if( auth()->user()->can('admin') || auth()->user()->hasRole('employer')): ?>
<li class="nav-item mr-3">
    <a class="nav-link mx-0" data-toggle="tab" href="#tmp-sms-tab">
        <span class="nav-icon">
            <i class="la la-sms"></i>
        </span>
        <span class="nav-text font-size-lg"><?php echo e(__('Шаблоны смс')); ?></span>
    </a>
</li>
<?php endif; ?>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/user/profile/_nav-items.blade.php ENDPATH**/ ?>