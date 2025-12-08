<div class="my-3 <?php echo e($classes); ?>">
    <label for="<?php echo e($id); ?>" class="mb-3 <?php if($value): ?> text-success <?php endif; ?>"><?php echo e($label); ?></label>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.select2', ['id' => ''.e($id).'','name' => ''.e($name).'','url' => ''.e($indexUrl).'','event' => ''.e($event).'','placeholder' => ''.e($placeholder ?? 'Поиск').' ','selected' => ''.e($value).'','selectedItemUrl' => ''.e($showUrl).'','multiple' => ''.e($multiple).''])->html();
} elseif ($_instance->childHasBeenRendered('VNfuGE9')) {
    $componentId = $_instance->getRenderedChildComponentId('VNfuGE9');
    $componentTag = $_instance->getRenderedChildComponentTagName('VNfuGE9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VNfuGE9');
} else {
    $response = \Livewire\Livewire::mount('components.select2', ['id' => ''.e($id).'','name' => ''.e($name).'','url' => ''.e($indexUrl).'','event' => ''.e($event).'','placeholder' => ''.e($placeholder ?? 'Поиск').' ','selected' => ''.e($value).'','selectedItemUrl' => ''.e($showUrl).'','multiple' => ''.e($multiple).'']);
    $html = $response->html();
    $_instance->logRenderedChild('VNfuGE9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /var/www/proftracker/resources/views/components/tables/filter-inputs/select2.blade.php ENDPATH**/ ?>