<div class="tab-pane show px-7 active" id="user-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.account', [])->html();
} elseif ($_instance->childHasBeenRendered('jrfcNI4')) {
    $componentId = $_instance->getRenderedChildComponentId('jrfcNI4');
    $componentTag = $_instance->getRenderedChildComponentTagName('jrfcNI4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jrfcNI4');
} else {
    $response = \Livewire\Livewire::mount('user.profile.account', []);
    $html = $response->html();
    $_instance->logRenderedChild('jrfcNI4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/user/profile/_user-tab.blade.php ENDPATH**/ ?>