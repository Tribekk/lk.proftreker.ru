<div class="tab-pane show px-7" id="roles-tab" role="tabpanel">
    <div class="py-3">
        <?php if($errors->any()): ?>
            <div class="alert alert-custom alert-light-danger">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text"><?php echo e($errors->first()); ?></div>
            </div>
        <?php endif; ?>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.create-user-form-roles', [])->html();
} elseif ($_instance->childHasBeenRendered('q0FJ8e5')) {
    $componentId = $_instance->getRenderedChildComponentId('q0FJ8e5');
    $componentTag = $_instance->getRenderedChildComponentTagName('q0FJ8e5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('q0FJ8e5');
} else {
    $response = \Livewire\Livewire::mount('users.create-user-form-roles', []);
    $html = $response->html();
    $_instance->logRenderedChild('q0FJ8e5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:users.create-user-form-roles>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/admin/users/_create/_roles-tab.blade.php ENDPATH**/ ?>