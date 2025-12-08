<div class="table-responsive" id="responsive-table">
    <table class="table lk-table clear-sticky-cols">
        <?php echo $__env->make('parent._children._table-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('parent._children._table-body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </table>
</div>
<?php /**PATH /var/www/proftracker/resources/views/parent/_children/_table.blade.php ENDPATH**/ ?>