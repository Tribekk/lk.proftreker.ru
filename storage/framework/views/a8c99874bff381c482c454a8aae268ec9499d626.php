<div class="tab-pane px-7" id="report-tab" role="tabpanel">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('consultations.report', ['consultation' => $consultation])->html();
} elseif ($_instance->childHasBeenRendered('DSAVLGM')) {
    $componentId = $_instance->getRenderedChildComponentId('DSAVLGM');
    $componentTag = $_instance->getRenderedChildComponentTagName('DSAVLGM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DSAVLGM');
} else {
    $response = \Livewire\Livewire::mount('consultations.report', ['consultation' => $consultation]);
    $html = $response->html();
    $_instance->logRenderedChild('DSAVLGM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:consultations.report>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/consultations/_edit/_report-tab.blade.php ENDPATH**/ ?>