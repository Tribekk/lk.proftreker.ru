<div class="tab-pane px-7" id="report-tab" role="tabpanel">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('consultations.report', ['consultation' => $consultation])->html();
} elseif ($_instance->childHasBeenRendered('TsEv0le')) {
    $componentId = $_instance->getRenderedChildComponentId('TsEv0le');
    $componentTag = $_instance->getRenderedChildComponentTagName('TsEv0le');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TsEv0le');
} else {
    $response = \Livewire\Livewire::mount('consultations.report', ['consultation' => $consultation]);
    $html = $response->html();
    $_instance->logRenderedChild('TsEv0le', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:consultations.report>
</div>
<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/consultations/_edit/_report-tab.blade.php ENDPATH**/ ?>