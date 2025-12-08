

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('employer.reports._students._pdf.stages-screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($proposedAdmission) || isset($appliedAdmission) || isset($enrolledProfileUZ) || isset($concludedTargetAgreement)): ?>
        <?php echo $__env->make('employer.reports._students._pdf.selection-results-screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <style>
        .progress-silver {
            background: #BFBFBF;
        }

        .progress-orange {
            background: #FAB500;
        }

        .progress-light-green {
            background: #92D051;
        }

        .progress-green {
            background: #00B050;
        }

        .progress-blue {
            background: #385E9D;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/employer/reports/_students/_pdf/index.blade.php ENDPATH**/ ?>