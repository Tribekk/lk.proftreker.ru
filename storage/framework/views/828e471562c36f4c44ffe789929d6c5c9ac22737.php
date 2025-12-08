<div class="tab-pane px-7" id="classes-tab" role="tabpanel">
    <div class="row">
        <div class="col-md-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('school.class-container', ['school' => $school])->html();
} elseif ($_instance->childHasBeenRendered('dJdOqfm')) {
    $componentId = $_instance->getRenderedChildComponentId('dJdOqfm');
    $componentTag = $_instance->getRenderedChildComponentTagName('dJdOqfm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dJdOqfm');
} else {
    $response = \Livewire\Livewire::mount('school.class-container', ['school' => $school]);
    $html = $response->html();
    $_instance->logRenderedChild('dJdOqfm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/admin/schools/_edit/_classes-tab.blade.php ENDPATH**/ ?>