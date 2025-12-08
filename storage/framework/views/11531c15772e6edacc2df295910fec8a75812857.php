<div class="form-group">
    <label for="role_type" class="text-dark text-md-right font-size-h4 required">Выберите роль:</label>
    <div class="max-w-md-550px">
        <div class="row mt-3">
            <div class="col-sm-6 text-center position-relative cursor-pointer" wire:click="setRole('curator')">
                <img src="<?php echo e(asset('img/curator.png')); ?>" class="img-fluid" alt="Учитель">
                <span class="nav-text font-size-lg font-weight-bolder text-center">
                <span class="label label-lg label-pill label-inline d-flex flex-column py-2 h-auto font-hero font-size-h4 text-uppercase text-center <?php echo e($role == "curator" ? 'bg-orange' : 'bg-silver'); ?> text-white">
                    <?php echo e(__('Я куратор')); ?>

                    <span class="font-size-base">от школы</span>
                </span>
            </span>
            </div>
            <div class="col-sm-6 text-center position-relative cursor-pointer" wire:click="setRole('teacher')">
                <img src="<?php echo e(asset('img/teacher.png')); ?>" class="img-fluid" alt="Учитель">
                <span class="nav-text font-size-lg font-weight-bolder text-center">
                <span class="label label-lg label-pill label-inline d-flex flex-column py-2 h-auto font-hero font-size-h4 text-uppercase text-center <?php echo e($role == "teacher" ? 'bg-orange' : 'bg-silver'); ?> text-white">
                    <?php echo e(__('Я учитель')); ?>

                    <span class="font-size-base">классный руководитель</span>
                </span>
            </span>
            </div>
        </div>
    </div>
    <input type="text" name="role" value="<?php echo e($role); ?>" hidden>
</div>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/livewire/user/attach/select-teacher-type.blade.php ENDPATH**/ ?>