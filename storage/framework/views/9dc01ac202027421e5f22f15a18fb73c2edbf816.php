<div class="tab-pane show px-7 active" id="user-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.account', [])->html();
} elseif ($_instance->childHasBeenRendered('68CqrzS')) {
    $componentId = $_instance->getRenderedChildComponentId('68CqrzS');
    $componentTag = $_instance->getRenderedChildComponentTagName('68CqrzS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('68CqrzS');
} else {
    $response = \Livewire\Livewire::mount('user.profile.account', []);
    $html = $response->html();
    $_instance->logRenderedChild('68CqrzS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/user/profile/_user-tab.blade.php ENDPATH**/ ?>