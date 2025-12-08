<div class="tab-pane show px-7" id="security-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.password', [])->html();
} elseif ($_instance->childHasBeenRendered('5Qicu1i')) {
    $componentId = $_instance->getRenderedChildComponentId('5Qicu1i');
    $componentTag = $_instance->getRenderedChildComponentTagName('5Qicu1i');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5Qicu1i');
} else {
    $response = \Livewire\Livewire::mount('user.profile.password', []);
    $html = $response->html();
    $_instance->logRenderedChild('5Qicu1i', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/user/profile/_security-tab.blade.php ENDPATH**/ ?>