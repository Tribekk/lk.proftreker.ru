<div class="tab-pane show px-7" id="tmp-sms-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.tmp-sms', [])->html();
} elseif ($_instance->childHasBeenRendered('EWKbw8R')) {
    $componentId = $_instance->getRenderedChildComponentId('EWKbw8R');
    $componentTag = $_instance->getRenderedChildComponentTagName('EWKbw8R');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EWKbw8R');
} else {
    $response = \Livewire\Livewire::mount('user.profile.tmp-sms', []);
    $html = $response->html();
    $_instance->logRenderedChild('EWKbw8R', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/user/profile/_tmp-sms-tab.blade.php ENDPATH**/ ?>