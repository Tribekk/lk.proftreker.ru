<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Консультации']); ?>
<?php $component->withName('subheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b)): ?>
<?php $component = $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b; ?>
<?php unset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card card-custom">
            <?php if($consultation->state->code() != 'not-verified'): ?>
                <div class="card-header">
                    <div class="w-100 justify-content-end card-toolbar">
                        <form action="<?php echo e(route('consultations.destroy', $consultation)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button onclick="return confirm('Вы действительно хотите удалить запись?')" class="btn btn-danger font-weight-bolder font-size-h6 px-4 py-2 my-1 mr-1">
                                Удалить
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <?php echo $__env->make('consultations._edit._nav-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <div class="card-body px-2">
                <div class="tab-content">
                    <?php echo $__env->make('consultations._edit._consultation-tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php if($consultation->state->code() != 'not-verified'): ?>
                        <?php echo $__env->make('consultations._edit._report-tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>

                <?php if($consultation->state->code() == 'not-verified'): ?>
                    <div class="mt-12 button-group px-7">
                        <form action="<?php echo e(route('consultations.destroy', $consultation)); ?>" method="post" class="d-inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button onclick="return confirm('Вы действительно хотите отклонить запись?')" class="btn btn-primary font-weight-bolder font-size-h6 px-4 py-2 my-1 mr-1">
                                <i class="la la-remove"></i>Отклонить
                            </button>
                        </form>
                        <form action="<?php echo e(route('consultations.confirm', $consultation)); ?>" method="post" class="d-inline-block">
                            <?php echo csrf_field(); ?>
                            <button onclick="return confirm('Вы действительно хотите подтвердить запись?')" class="btn btn-success font-weight-bolder font-size-h6 px-4 py-2 my-1 mr-1">
                                <i class="la la-chevron-down"></i>Подтвердить
                            </button>
                        </form>
                        <a href="<?php echo e(route('consultations.list')); ?>" class="btn btn-outline-success font-weight-bolder font-size-h6 px-4 py-2 my-1 mr-1">К списку консультаций</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\openserver\OpenServer\domains\prof\www\resources\views/consultations/edit.blade.php ENDPATH**/ ?>