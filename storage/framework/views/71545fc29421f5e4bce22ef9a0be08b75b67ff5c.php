<div class="form-group">
    <?php if($title): ?>
        <label for="<?php echo e($id); ?>" class="font-size-h6 font-weight-bolder text-dark <?php if($required): ?> required <?php endif; ?>"><?php echo e($title); ?></label>
    <?php endif; ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kladr.select-address', ['name' => ''.e($name).'','region' => ''.e($region).'','street' => ''.e($street).'','city' => ''.e($city).'','house' => ''.e($house).''])->html();
} elseif ($_instance->childHasBeenRendered('g440nys')) {
    $componentId = $_instance->getRenderedChildComponentId('g440nys');
    $componentTag = $_instance->getRenderedChildComponentTagName('g440nys');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('g440nys');
} else {
    $response = \Livewire\Livewire::mount('kladr.select-address', ['name' => ''.e($name).'','region' => ''.e($region).'','street' => ''.e($street).'','city' => ''.e($city).'','house' => ''.e($house).'']);
    $html = $response->html();
    $_instance->logRenderedChild('g440nys', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php /**PATH /var/www/proftracker/resources/views/components/inputs/address.blade.php ENDPATH**/ ?>