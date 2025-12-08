<div class="table-responsive" id="responsive-table">
    <table class="table lk-table">
        <?php echo $__env->make('school.classes._show_table._table-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('school.classes._show_table._table-body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </table>
</div>
<?php /**PATH /var/www/proftracker/resources/views/school/classes/_show_table/_table.blade.php ENDPATH**/ ?>