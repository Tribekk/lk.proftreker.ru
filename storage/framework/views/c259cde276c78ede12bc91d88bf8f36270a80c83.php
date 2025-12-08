<div class="tab-pane show px-7" id="roles-tab" role="tabpanel">
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).''])->html();
} elseif ($_instance->childHasBeenRendered('aJuXgnS')) {
    $componentId = $_instance->getRenderedChildComponentId('aJuXgnS');
    $componentTag = $_instance->getRenderedChildComponentTagName('aJuXgnS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aJuXgnS');
} else {
    $response = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('aJuXgnS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:users.roles>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/admin/users/_edit/_roles-tab.blade.php ENDPATH**/ ?>