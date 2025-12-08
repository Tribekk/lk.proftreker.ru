<ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
    <li class="nav-item mr-3">
        <a class="nav-link active" data-toggle="tab" href="#consultation-tab">
            <span class="nav-icon">
                <i class="la la-headphones"></i>
            </span>
            <span class="nav-text font-size-lg"><?php echo e(__('Консультация')); ?></span>
        </a>
    </li>
    <li class="nav-item mr-3">
        <a class="nav-link" data-toggle="tab" id="nav-report-tab" href="#report-tab">
            <span class="nav-icon">
                <i class="la la-chart-pie"></i>
            </span>
            <span class="nav-text font-size-lg"><?php echo e(__('Отчет')); ?></span>
        </a>
    </li>
</ul>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function () {
            if(window.location.hash == "#report-tab") {
                $('#nav-report-tab').click();
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_edit/_nav-items.blade.php ENDPATH**/ ?>