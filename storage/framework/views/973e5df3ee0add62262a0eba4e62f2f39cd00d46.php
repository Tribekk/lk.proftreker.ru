<label class="radio">
    <input type="radio" <?php if($value): ?> value="<?php echo e($value); ?>" <?php endif; ?> <?php if($checked): ?> checked="checked" <?php endif; ?> name="<?php echo e($name); ?>">
    <span></span><?php echo e($title); ?></label>
<?php /**PATH /var/www/proftracker/resources/views/components/inputs/radio.blade.php ENDPATH**/ ?>