<div class="form-group my-2">
    <div class="row no-gutters align-items-center">
        <label class="col-9 col-form-label cursor-pointer font-size-h6 text-dark <?php if($required): ?> required <?php endif; ?>" for="<?php echo e($id); ?>"><?php echo e($title); ?></label>
        <div class="col-3 d-flex justify-content-end">
            <span class="switch switch-sm switch-success">
                <label>
                    <input type="checkbox" <?php if($value): ?> checked <?php endif; ?> id="<?php echo e($id); ?>" name="<?php echo e($name); ?>">
                    <span></span>
                </label>
            </span>
        </div>
    </div>

    <?php $__errorArgs = [strArrToPath($name)];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong><?php echo e($message); ?></strong>
        </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/components/inputs/switch-input.blade.php ENDPATH**/ ?>