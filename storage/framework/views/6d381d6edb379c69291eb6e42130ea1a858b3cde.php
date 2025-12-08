<div class="form-group">
    <?php if($title): ?>
        <label for="<?php echo e($id); ?>" class="font-size-h6 font-weight-bolder text-dark <?php if($required): ?> required <?php endif; ?>"><?php echo e($title); ?></label>
    <?php endif; ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kladr.select-address', ['name' => ''.e($name).'','region' => ''.e($region).'','street' => ''.e($street).'','city' => ''.e($city).'','house' => ''.e($house).'','style' => 'display:block'])->html();
} elseif ($_instance->childHasBeenRendered('2JCVCtZ')) {
    $componentId = $_instance->getRenderedChildComponentId('2JCVCtZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('2JCVCtZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2JCVCtZ');
} else {
    $response = \Livewire\Livewire::mount('kladr.select-address', ['name' => ''.e($name).'','region' => ''.e($region).'','street' => ''.e($street).'','city' => ''.e($city).'','house' => ''.e($house).'','style' => 'display:block']);
    $html = $response->html();
    $_instance->logRenderedChild('2JCVCtZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/components/inputs/address.blade.php ENDPATH**/ ?>