<div class="tab-pane show px-7" id="tmp-sms-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.tmp-sms', [])->html();
} elseif ($_instance->childHasBeenRendered('f80XQOH')) {
    $componentId = $_instance->getRenderedChildComponentId('f80XQOH');
    $componentTag = $_instance->getRenderedChildComponentTagName('f80XQOH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('f80XQOH');
} else {
    $response = \Livewire\Livewire::mount('user.profile.tmp-sms', []);
    $html = $response->html();
    $_instance->logRenderedChild('f80XQOH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/user/profile/_tmp-sms-tab.blade.php ENDPATH**/ ?>