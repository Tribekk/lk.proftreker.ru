 <?php if (isset($component)) { $__componentOriginalf197bbd0186049fba79758ec2ea9b35409704436 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\FilterInputs\Input::class, ['id' => 'q','name' => 'q','type' => 'date','classes' => 'col-md-3','label' => ''.e(__('Поиск')).'','placeholder' => ''.e(__('Поиск по ФИО ученика')).'','value' => ''.e(request()->q).'']); ?>
<?php $component->withName('tables.filter-inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalf197bbd0186049fba79758ec2ea9b35409704436)): ?>
<?php $component = $__componentOriginalf197bbd0186049fba79758ec2ea9b35409704436; ?>
<?php unset($__componentOriginalf197bbd0186049fba79758ec2ea9b35409704436); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filters.school-and-class', ['classes' => 'row no-gutters col-md-6 col-lg-5 my-3','schoolClasses' => 'col-md-6 mt-6 mt-md-0 pr-md-4 pr-0','classClasses' => 'col-md-6 mt-6 mt-md-0 pl-md-4 pl-0'])->html();
} elseif ($_instance->childHasBeenRendered('OI1YKYI')) {
    $componentId = $_instance->getRenderedChildComponentId('OI1YKYI');
    $componentTag = $_instance->getRenderedChildComponentTagName('OI1YKYI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OI1YKYI');
} else {
    $response = \Livewire\Livewire::mount('filters.school-and-class', ['classes' => 'row no-gutters col-md-6 col-lg-5 my-3','schoolClasses' => 'col-md-6 mt-6 mt-md-0 pr-md-4 pr-0','classClasses' => 'col-md-6 mt-6 mt-md-0 pl-md-4 pl-0']);
    $html = $response->html();
    $_instance->logRenderedChild('OI1YKYI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/admin/reports/_students/_search.blade.php ENDPATH**/ ?>