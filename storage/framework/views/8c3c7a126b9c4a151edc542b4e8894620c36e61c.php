<div class="tab-pane show px-7" id="roles-tab" role="tabpanel">
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).''])->html();
} elseif ($_instance->childHasBeenRendered('5VyyX9t')) {
    $componentId = $_instance->getRenderedChildComponentId('5VyyX9t');
    $componentTag = $_instance->getRenderedChildComponentTagName('5VyyX9t');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5VyyX9t');
} else {
    $response = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('5VyyX9t', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:users.roles>
</div>
<?php /**PATH /var/www/proftracker/resources/views/admin/users/_edit/_roles-tab.blade.php ENDPATH**/ ?>