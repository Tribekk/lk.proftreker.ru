<div class="form-group">
    <label for="parent_sex" class="text-dark text-md-right font-size-h4 required">Выберите роль:</label>
    <div class="max-w-md-550px">
        <div class="row mt-3">
            <div class="col-sm-6 text-center position-relative cursor-pointer" wire:click="setSex(2)">
                <img src="<?php echo e(asset('img/mom.png')); ?>" class="img-fluid" alt="Мама">
                <span class="nav-text font-size-lg font-weight-bolder text-center">
                <span class="label label-lg label-pill label-inline d-flex flex-column py-2 h-auto font-hero font-size-h4 text-uppercase text-center <?php echo e($sex == 2 ? 'bg-orange' : 'bg-silver'); ?> text-white">
                    <?php echo e(__('Мама')); ?>

                </span>
            </span>
            </div>
            <div class="col-sm-6 text-center position-relative cursor-pointer" wire:click="setSex(1)">
                <img src="<?php echo e(asset('img/dad.png')); ?>" class="img-fluid" alt="Папа">
                <span class="nav-text font-size-lg font-weight-bolder text-center">
                <span class="label label-lg label-pill label-inline d-flex flex-column py-2 h-auto font-hero font-size-h4 text-uppercase text-center <?php echo e($sex == 1 ? 'bg-orange' : 'bg-silver'); ?> text-white">
                    <?php echo e(__('Папа')); ?>

                </span>
            </span>
            </div>
        </div>
    </div>
    <input type="text" name="sex" value="<?php echo e($sex); ?>" hidden>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/livewire/user/attach/select-parent-sex.blade.php ENDPATH**/ ?>