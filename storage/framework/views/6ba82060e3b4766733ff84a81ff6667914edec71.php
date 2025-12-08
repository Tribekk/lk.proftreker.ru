<div class="tab-pane px-7" id="classes-tab" role="tabpanel">
    <div class="row">
        <div class="col-md-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('school.class-container', ['school' => $school])->html();
} elseif ($_instance->childHasBeenRendered('X2e8v6y')) {
    $componentId = $_instance->getRenderedChildComponentId('X2e8v6y');
    $componentTag = $_instance->getRenderedChildComponentTagName('X2e8v6y');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('X2e8v6y');
} else {
    $response = \Livewire\Livewire::mount('school.class-container', ['school' => $school]);
    $html = $response->html();
    $_instance->logRenderedChild('X2e8v6y', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/admin/schools/_edit/_classes-tab.blade.php ENDPATH**/ ?>