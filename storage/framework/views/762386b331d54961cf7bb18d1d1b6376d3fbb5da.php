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
} elseif ($_instance->childHasBeenRendered('whArM7R')) {
    $componentId = $_instance->getRenderedChildComponentId('whArM7R');
    $componentTag = $_instance->getRenderedChildComponentTagName('whArM7R');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('whArM7R');
} else {
    $response = \Livewire\Livewire::mount('user.profile.unread-notifications-count', []);
    $html = $response->html();
    $_instance->logRenderedChild('whArM7R', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </span>
    </a>
</li>
<?php /**PATH /var/www/proftracker/resources/views/user/profile/_nav-items.blade.php ENDPATH**/ ?>