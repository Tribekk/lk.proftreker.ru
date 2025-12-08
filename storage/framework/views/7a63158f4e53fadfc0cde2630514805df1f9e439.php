<div class="form-group">
    <?php if($title): ?>
        <label for="<?php echo e($id); ?>" class="font-size-h6 font-weight-bolder text-dark <?php if($required): ?> required <?php endif; ?>"><?php echo e($title); ?></label>
    <?php endif; ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kladr.select-org-address', ['name' => ''.e($name).'','region' => ''.e($region).'','city' => ''.e($city).''])->html();
} elseif ($_instance->childHasBeenRendered('V6zHRRU')) {
    $componentId = $_instance->getRenderedChildComponentId('V6zHRRU');
    $componentTag = $_instance->getRenderedChildComponentTagName('V6zHRRU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('V6zHRRU');
} else {
    $response = \Livewire\Livewire::mount('kladr.select-org-address', ['name' => ''.e($name).'','region' => ''.e($region).'','city' => ''.e($city).'']);
    $html = $response->html();
    $_instance->logRenderedChild('V6zHRRU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php /**PATH /var/www/proftracker/resources/views/components/inputs/address-org-location.blade.php ENDPATH**/ ?>