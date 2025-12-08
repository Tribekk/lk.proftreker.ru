<tbody class="datatable-body">
<?php $__currentLoopData = $activityKinds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $activityKind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="font-size-lg">
        <td class="fit">
            <?php echo e($activityKinds->firstItem() + $index); ?>

        </td>

        <td>
            <div class="d-flex align-items-center">
                <div class="ml-4">
                    <a href="<?php echo e(route('admin.orgunits.activity_kinds.edit', $activityKind)); ?>" class="font-weight-bolder link">
                        <?php echo e($activityKind->title); ?>

                    </a>
                </div>
            </div>
        </td>

        <td class="" style="vertical-align: middle;">
            <?php if($activityKind->disabled_at): ?>
                <div class="text-primary mb-0">Нет, с:<br><?php echo e((new \Carbon\Carbon($activityKind->disabled_at))->format('d.m.Y')); ?></div>
            <?php else: ?>
                <div class="text-success mb-0">Да</div>
            <?php endif; ?>
        </td>

        <td class="fit" style="vertical-align: middle;">
            <div class=" text-primary mb-0"><?php echo e($activityKind->created_at->format('d.m.Y')); ?></div>
        </td>

        <td class="fit" style="vertical-align: middle;">
            <div class=" text-primary mb-0"><?php echo e($activityKind->updated_at->format('d.m.Y')); ?></div>
        </td>

    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<?php /**PATH /var/www/proftracker/resources/views/admin/orgunits/activity_kinds/_index/_table-body.blade.php ENDPATH**/ ?>