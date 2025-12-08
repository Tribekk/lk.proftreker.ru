<div class="tab-pane px-7" id="classes-tab" role="tabpanel">
    <div class="row">
        <div class="col-md-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('school.class-container', ['school' => $school])->html();
} elseif ($_instance->childHasBeenRendered('bQflxBi')) {
    $componentId = $_instance->getRenderedChildComponentId('bQflxBi');
    $componentTag = $_instance->getRenderedChildComponentTagName('bQflxBi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bQflxBi');
} else {
    $response = \Livewire\Livewire::mount('school.class-container', ['school' => $school]);
    $html = $response->html();
    $_instance->logRenderedChild('bQflxBi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/proftracker/resources/views/admin/schools/_edit/_classes-tab.blade.php ENDPATH**/ ?>