<tbody class="datatable-body">
<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="font-size-lg">
        <td class="fit">
            <?php echo e($results->firstItem() + $index); ?>

        </td>

        <td class="fit">
            <?php echo e((new \Illuminate\Support\Carbon($result->date))->format('d.m.Y')); ?>

        </td>

        <td class="fit">
            <?php echo e($result->count); ?>

        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/admin/reports/_attached_parents/_table-body.blade.php ENDPATH**/ ?>