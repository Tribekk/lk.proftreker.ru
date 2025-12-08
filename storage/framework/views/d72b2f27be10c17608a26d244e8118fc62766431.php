<div class="my-3 <?php echo e($classes); ?>">
    <label for="<?php echo e($id); ?>" class="mb-3 <?php if($value): ?> text-success <?php endif; ?>"><?php echo e($label); ?></label>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.select2', ['id' => ''.e($id).'','name' => ''.e($name).'','url' => ''.e($indexUrl).'','event' => ''.e($event).'','placeholder' => ''.e($placeholder ?? 'Поиск').' ','selected' => ''.e($value).'','selectedItemUrl' => ''.e($showUrl).'','multiple' => ''.e($multiple).''])->html();
} elseif ($_instance->childHasBeenRendered('R1i2QqR')) {
    $componentId = $_instance->getRenderedChildComponentId('R1i2QqR');
    $componentTag = $_instance->getRenderedChildComponentTagName('R1i2QqR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('R1i2QqR');
} else {
    $response = \Livewire\Livewire::mount('components.select2', ['id' => ''.e($id).'','name' => ''.e($name).'','url' => ''.e($indexUrl).'','event' => ''.e($event).'','placeholder' => ''.e($placeholder ?? 'Поиск').' ','selected' => ''.e($value).'','selectedItemUrl' => ''.e($showUrl).'','multiple' => ''.e($multiple).'']);
    $html = $response->html();
    $_instance->logRenderedChild('R1i2QqR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/components/tables/filter-inputs/select2.blade.php ENDPATH**/ ?>