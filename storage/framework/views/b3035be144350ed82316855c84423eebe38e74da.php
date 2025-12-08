<div class="tab-pane px-7" id="report-tab" role="tabpanel">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('consultations.report', ['consultation' => $consultation])->html();
} elseif ($_instance->childHasBeenRendered('QOqgeqL')) {
    $componentId = $_instance->getRenderedChildComponentId('QOqgeqL');
    $componentTag = $_instance->getRenderedChildComponentTagName('QOqgeqL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QOqgeqL');
} else {
    $response = \Livewire\Livewire::mount('consultations.report', ['consultation' => $consultation]);
    $html = $response->html();
    $_instance->logRenderedChild('QOqgeqL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:consultations.report>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_edit/_report-tab.blade.php ENDPATH**/ ?>