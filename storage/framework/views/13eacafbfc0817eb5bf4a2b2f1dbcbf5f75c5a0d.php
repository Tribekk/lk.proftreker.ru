<div class="tab-pane show px-7" id="roles-tab" role="tabpanel">
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).''])->html();
} elseif ($_instance->childHasBeenRendered('zLU2aH3')) {
    $componentId = $_instance->getRenderedChildComponentId('zLU2aH3');
    $componentTag = $_instance->getRenderedChildComponentTagName('zLU2aH3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zLU2aH3');
} else {
    $response = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('zLU2aH3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:users.roles>
</div>
<?php /**PATH /var/www/proftracker/resources/views/admin/users/_edit/_roles-tab.blade.php ENDPATH**/ ?>