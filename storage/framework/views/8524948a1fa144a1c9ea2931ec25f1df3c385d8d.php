<div class="tab-pane show px-7" id="security-tab" role="tabpanel">
    <div class="row">
        <div class="col-xl-3"></div>
        <div class="col-xl-7 my-2">
            <div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.change-password', ['userId' => $user->id])->html();
} elseif ($_instance->childHasBeenRendered('zfkBYzl')) {
    $componentId = $_instance->getRenderedChildComponentId('zfkBYzl');
    $componentTag = $_instance->getRenderedChildComponentTagName('zfkBYzl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zfkBYzl');
} else {
    $response = \Livewire\Livewire::mount('users.change-password', ['userId' => $user->id]);
    $html = $response->html();
    $_instance->logRenderedChild('zfkBYzl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/admin/users/_edit/_security-tab.blade.php ENDPATH**/ ?>