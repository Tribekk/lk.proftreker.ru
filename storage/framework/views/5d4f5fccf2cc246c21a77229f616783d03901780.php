<tbody class="datatable-body">
<?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="fit">
            <?php echo e($appointments->firstItem() + $index); ?>

        </td>

        <td>
            <?php echo e($appointment->dateFormatted); ?>

        </td>

        <td>
            <?php echo e($appointment->interval->title); ?>

        </td>

        <td>
            <div class="actions d-flex text-center">

                <a href="<?php echo e(route('consultant.meeting_schedule.update_view', $appointment)); ?>" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2">
                    <span class="svg-icon svg-icon-md"><i class="la la-pencil"></i></span>
                </a>

                <form action="<?php echo e(route('consultant.meeting_schedule.destroy', $appointment)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button onclick="return confirm('Вы действительно хотите удалить запись?')" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon" title="<?php echo e(__('Удалить')); ?>">
                        <span class="svg-icon svg-icon-md"><i class="la la-remove"></i></span>
                    </button>
                </form>

            </div>
        </td>

    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/consultant/meeting-schedule/_index/_table-body.blade.php ENDPATH**/ ?>