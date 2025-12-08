<form>
    <div class="mb-10">
        <div class="row align-items-center">
            <div class="col-12 ">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3 class="mt-5"><?php echo e(__('Фильтры')); ?></h3>
                    </div>
                    <div class="col-12 my-3">
                        <input type="text" name="q" class="form-control form-control-solid" placeholder="<?php echo e(__('Поиск по дате, временному интервалу')); ?>" value="<?php echo e(request()->q); ?>">
                    </div>
                    <div class="col-12 my-3">
                        <div class="form-group">
                            <label class="mb-3"><?php echo e(__('Дата:')); ?></label>
                            <input type="date" id="date_at" name="date_at" class="form-control form-control-solid" placeholder="<?php echo e(__('Дата')); ?>" value="<?php echo e(request()->date_at); ?>">
                        </div>
                    </div>

                    <div class="col-auto">
                         <?php if (isset($component)) { $__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\Submit::class, ['title' => ''.e(__('Искать')).'']); ?>
<?php $component->withName('inputs.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a)): ?>
<?php $component = $__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a; ?>
<?php unset($__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                         <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['link' => ''.e(route('consultant.meeting_schedule')).'','title' => ''.e(__('Сбросить фильтры')).'','type' => 'btn-outline-success']); ?>
<?php $component->withName('inputs.button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f)): ?>
<?php $component = $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f; ?>
<?php unset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            var arrows;
            if (KTUtil.isRTL()) {
                arrows = {
                    leftArrow: '<i class="la la-angle-right"></i>',
                    rightArrow: '<i class="la la-angle-left"></i>'
                }
            } else {
                arrows = {
                    leftArrow: '<i class="la la-angle-left"></i>',
                    rightArrow: '<i class="la la-angle-right"></i>'
                }
            }

            // minimum setup
            $('#date_at').datepicker({
                language: 'ru',
                rtl: false,
                todayHighlight: true,
                orientation: "bottom left",
                templates: arrows,
                clearBtn: true,
                format: 'yyyy-mm-dd',
            }).on('changeDate', function(e) {
                $('#date_at').datepicker('hide');
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/consultant/meeting-schedule/_index/_search.blade.php ENDPATH**/ ?>