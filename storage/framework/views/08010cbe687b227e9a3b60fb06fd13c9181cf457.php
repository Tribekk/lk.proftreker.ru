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
} elseif ($_instance->childHasBeenRendered('18LZ8cq')) {
    $componentId = $_instance->getRenderedChildComponentId('18LZ8cq');
    $componentTag = $_instance->getRenderedChildComponentTagName('18LZ8cq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('18LZ8cq');
} else {
    $response = \Livewire\Livewire::mount('users.create-user-form-roles', []);
    $html = $response->html();
    $_instance->logRenderedChild('18LZ8cq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:users.create-user-form-roles>
</div>
<?php /**PATH /var/www/proftracker/resources/views/admin/users/_create/_roles-tab.blade.php ENDPATH**/ ?>