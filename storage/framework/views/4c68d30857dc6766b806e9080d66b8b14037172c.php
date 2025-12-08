<div class="tab-pane show px-7" id="roles-tab" role="tabpanel">
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).''])->html();
} elseif ($_instance->childHasBeenRendered('7ZjduUP')) {
    $componentId = $_instance->getRenderedChildComponentId('7ZjduUP');
    $componentTag = $_instance->getRenderedChildComponentTagName('7ZjduUP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7ZjduUP');
} else {
    $response = \Livewire\Livewire::mount('users.roles', ['userId' => ''.e($user->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('7ZjduUP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:users.roles>
</div>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/admin/users/_edit/_roles-tab.blade.php ENDPATH**/ ?>