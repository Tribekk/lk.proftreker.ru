<div class="tab-pane show px-7" id="security-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.password', [])->html();
} elseif ($_instance->childHasBeenRendered('xmxqYgM')) {
    $componentId = $_instance->getRenderedChildComponentId('xmxqYgM');
    $componentTag = $_instance->getRenderedChildComponentTagName('xmxqYgM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xmxqYgM');
} else {
    $response = \Livewire\Livewire::mount('user.profile.password', []);
    $html = $response->html();
    $_instance->logRenderedChild('xmxqYgM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/proftracker/resources/views/user/profile/_security-tab.blade.php ENDPATH**/ ?>