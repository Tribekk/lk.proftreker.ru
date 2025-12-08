<div style="margin-bottom: 25px; white-space: nowrap; page-break-inside:avoid;">
    <h4 class="font-size-h5" style="width: 100%; display: inline-block; margin-bottom: 0;">
        <span class="text-dark-50 font-weight-normal"><?php echo e($title); ?> (родители: <?php echo e($valueParent); ?> / <?php echo e($percentageParent); ?>%, дети: <?php echo e($valueChild); ?> / <?php echo e($percentageChild); ?>%)</span>
    </h4>

    <div class="progress" style="border-radius: 8px; margin-top: 0;">
        <div class="progress-bar progress-green" role="progressbar" style="border-radius: 0; width: <?php echo e($percentageParent); ?>%"></div>
        <div class="progress-bar progress-light-green" role="progressbar" style="border-radius: 0; left: <?php echo e($percentageParent); ?>%; width: <?php echo e($percentageChild); ?>%"></div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/employer/reports/_students/_pdf/_progressbar-consultation.blade.php ENDPATH**/ ?>