<div class="tab-pane show px-7" id="security-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-3"></div>
        <div class="col-xl-7 my-2">
            <div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.change-password', ['userId' => $user->id])->html();
} elseif ($_instance->childHasBeenRendered('w1xRnN3')) {
    $componentId = $_instance->getRenderedChildComponentId('w1xRnN3');
    $componentTag = $_instance->getRenderedChildComponentTagName('w1xRnN3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('w1xRnN3');
} else {
    $response = \Livewire\Livewire::mount('users.change-password', ['userId' => $user->id]);
    $html = $response->html();
    $_instance->logRenderedChild('w1xRnN3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/proftracker/resources/views/admin/users/_edit/_security-tab.blade.php ENDPATH**/ ?>