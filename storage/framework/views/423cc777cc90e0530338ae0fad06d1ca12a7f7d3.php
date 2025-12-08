<?php $__env->startComponent('mail::message'); ?>
# <?php echo e(__('Здравствуйте!')); ?>


Ваша запись на консультацию, на: <?php echo e($consultation->formattedStartAt); ?> была удалена.

<?php echo app('translator')->get('С уважением'); ?>,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/mail/consultation/delete.blade.php ENDPATH**/ ?>