<div style="margin-bottom: 25px;">
    <h4 class="font-size-h5" style="width: 100%; display: inline-block;">
        <span class="text-dark-50 font-weight-normal">
            <?php echo e($title); ?> (<?php echo e($value); ?> / <?php echo e($percentage); ?>%)
        </span>
    </h4>

    <div class="progress" style="border-radius: 8px; margin-top: 8px;">
        <div class="progress-bar <?php echo e($color ?? 'progress-blue'); ?>" role="progressbar" style="border-radius: 0; width: <?php echo e($percentage); ?>%"></div>
    </div>
</div>
<?php /**PATH /var/www/proftracker/resources/views/employer/reports/_students/_pdf/_progressbar.blade.php ENDPATH**/ ?>