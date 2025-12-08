<div class="tab-pane show px-7 active" id="user-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.account', [])->html();
} elseif ($_instance->childHasBeenRendered('M04brJC')) {
    $componentId = $_instance->getRenderedChildComponentId('M04brJC');
    $componentTag = $_instance->getRenderedChildComponentTagName('M04brJC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('M04brJC');
} else {
    $response = \Livewire\Livewire::mount('user.profile.account', []);
    $html = $response->html();
    $_instance->logRenderedChild('M04brJC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/user/profile/_user-tab.blade.php ENDPATH**/ ?>