<div class="text-center">
    <button id="sync-data-btn" wire:target="syncData" class="btn btn-outline-success py-2 my-1 mr-1" wire:loading.attr="disabled" wire:loading.class.remove="px-4" wire:loading.class="pl-4 pr-14 disabled spinner spinner-track spinner-success spinner-right">
        <i class="la la-sync"></i>
        <?php echo e(__('Обновить данные')); ?>

    </button>

    <div class="text-muted" style="font-size: .9rem;"><?php echo e($label); ?></div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $("#sync-data-btn").click(function (e) {
                e.preventDefault();

                Swal.fire({
                    icon: 'warning',
                    title: 'Обновление данных',
                    text: 'Вы действительно хотите выполнить обновление данных? Это займет примерно 3 минуты. Данные автоматически обновляются каждый час.',
                    confirmButtonColor: 'var(--success)',
                    confirmButtonText: 'Выполнить',
                    showCancelButton: true,
                    cancelButtonColor: 'var(--primary)',
                    cancelButtonText: 'Отменить',

                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.find('<?php echo e($_instance->id); ?>').call('syncData');
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/proftracker/resources/views/livewire/employer/sync-reports-data.blade.php ENDPATH**/ ?>