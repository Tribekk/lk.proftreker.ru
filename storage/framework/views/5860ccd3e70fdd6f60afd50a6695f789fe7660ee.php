<tbody class="datatable-body">
<?php $__currentLoopData = $consultations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $consultation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="font-size-lg">
        <td class="fit">
            <?php echo e($consultations->firstItem() + $index); ?>

        </td>

        <td>
            <span class="font-weight-bold">Ребенок:</span>
            <?php echo e($consultation->child->fullName); ?>

            <br>
            <span class="font-weight-bold">Родитель:</span>
            <?php echo e(optional($consultation->parent)->fullName ?? 'не указан'); ?>

        </td>

        <td>
            <?php echo e($consultation->consultant->fullName); ?>

        </td>

        <td>
            <?php echo e($consultation->communication_type_value ? 'Отправлена' : 'Не отправлена'); ?>


            <?php if($consultation->communication_type_value): ?>
                <br>
                <a href="<?php echo e($consultation->communication_type_value); ?>" class="link" target="_blank">Ссылка</a>
            <?php endif; ?>
        </td>

        <td>
            <?php echo e($consultation->appointment->dateFormatted); ?>

        </td>

        <td>
            <?php echo e($consultation->interval->title); ?>

        </td>

        <td>
            <span class="text-nowrap <?php echo e($consultation->state->color()); ?>">
                <?php echo e($consultation->state->title()); ?>

            </span>
        </td>

        <td>
            <div class="actions d-flex text-center">
                <?php if(Auth::user()->hasAnyRole(['parent', 'student']) && !$consultation->state->is(\Domain\Consultation\States\CarriedOutConsultationState::class)): ?>
                    <a href="<?php echo e(route('consultations.show', $consultation)); ?>" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="<?php echo e(__('Просмотр')); ?>">
                        <span class="svg-icon svg-icon-md"><i class="la la-eye"></i></span>
                    </a>
                <?php endif; ?>

                <?php if(Auth::user()->hasAnyRole(['parent', 'student']) && $consultation->state->is(\Domain\Consultation\States\CarriedOutConsultationState::class)): ?>
                    <a href="<?php echo e(route('consultations.show', $consultation)); ?>" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="<?php echo e(__('Обратная связь')); ?>">
                        <span class="svg-icon svg-icon-md"><i class="la la-comments"></i></span>
                    </a>
                <?php endif; ?>

                <?php if(Auth::user()->hasAnyRole(['consultant'])): ?>
                    <a href="<?php echo e(route('consultations.edit', $consultation)); ?>" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="<?php echo e(__('Просмотр')); ?>">
                        <span class="svg-icon svg-icon-md"><i class="la <?php echo e($consultation->state->code() == 'not-verified' ? 'la-eye' : 'la-pencil'); ?>"></i></span>
                    </a>
                <?php endif; ?>

                <?php if(Auth::user()->hasAnyRole(['parent', 'consultant']) || Auth::user()->isStudent && !$consultation->parent_id): ?>
                    <form action="<?php echo e(route('consultations.destroy', $consultation)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button onclick="return confirm('Вы действительно хотите удалить консультацию на <?php echo e($consultation->formattedStartAt); ?>?')" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon" title="<?php echo e(__('Удалить')); ?>">
                            <span class="svg-icon svg-icon-md"><i class="la la-remove"></i></span>
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </td>

    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/consultations/_index/_table-body.blade.php ENDPATH**/ ?>