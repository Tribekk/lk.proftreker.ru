<div class="tab-pane show px-7" id="security-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-7 my-2">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.profile.password', [])->html();
} elseif ($_instance->childHasBeenRendered('Rmoqz6V')) {
    $componentId = $_instance->getRenderedChildComponentId('Rmoqz6V');
    $componentTag = $_instance->getRenderedChildComponentTagName('Rmoqz6V');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Rmoqz6V');
} else {
    $response = \Livewire\Livewire::mount('user.profile.password', []);
    $html = $response->html();
    $_instance->logRenderedChild('Rmoqz6V', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/user/profile/_security-tab.blade.php ENDPATH**/ ?>