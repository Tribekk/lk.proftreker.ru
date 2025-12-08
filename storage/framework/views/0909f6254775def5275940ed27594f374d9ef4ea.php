<tbody class="datatable-body">
<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="font-size-lg">
        <td class="fit">
            <?php echo e($index+1); ?>

        </td>

        <td class="fit">
            <a href="<?php echo e(route('admin.reports.students', ['school_id' => $result->school_id])); ?>" class="link">
                <?php echo e($result->school); ?>

            </a>
        </td>

        <td class="fit">
            <a href="<?php echo e(route('admin.reports.students', ['school_id' => $result->school_id, 'class_id' => $result->class_id])); ?>" class="link">
                <?php echo e($result->class); ?>

            </a>
        </td>

        <td class="fit">
            <?php echo e($result->finished_quizzes); ?>

        </td>

        <td class="fit">
            <?php echo e($result->not_finished_quizzes); ?>

        </td>

        <td class="fit">
            <?php echo e(floor($result->finish_percentage)); ?>%
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/admin/reports/_students_tests/_table-body.blade.php ENDPATH**/ ?>