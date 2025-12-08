<div class="table-responsive" id="responsive-table">
    <table class="table lk-table clear-sticky-cols">
        <?php echo $__env->make('consultations._report.questionnaire._table-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('consultations._report.questionnaire._table-body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </table>
</div>

<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_report/questionnaire/_table.blade.php ENDPATH**/ ?>