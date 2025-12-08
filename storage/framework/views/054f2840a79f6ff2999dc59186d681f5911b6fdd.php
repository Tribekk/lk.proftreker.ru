<div class="card-body" id="intelligence-level">
    <div class="d-flex flex-sm-nowrap flex-wrap">
        <div class="mr-5 max-w-225px">
            <h3 class="w-225px bg-alla rounded-pill text-white py-4 px-8 font-weight-bold font-size-lg font-hero text-center">Углубленный тест</h3>
            <div class="mx-5 mt-7">
                <h4 class="text-uppercase font-alla font-size-h5 font-hero font-weight-bold">Общий уровень интеллекта</h4>
                <span class="text-dark-50 font-size-lg">Способности, восприятие информации, уровень абстрактно-логического мышления</span>
            </div>
        </div>
        <div class="separator separator-solid my-7 w-100 d-block d-sm-none"></div>
        <div class="ml-5 flex-grow-1">
            <div class="row align-items-center mt-6">
                <div class="col-md-3">
                    <div id="chart">
                    </div>
                </div>
                <div class="col-md-9">

                    <?php
                        if($intelligenceLevelResult->level->title === 'Средний -') {$level = 'с твоими способностями может быть выше';}else{
    $level = $intelligenceLevelResult->level->title;
}
                    ?>
                    <h4 class="font-size-h4 font-hero">Твой уровень интеллекта - <?php echo e($level); ?></h4>
                    <p class="font-size-h5">определяет общую способность к решению
                        практических и интеллектуальных задач</p>
                </div>
            </div>

            <div class="separator separator-solid my-7"></div>

            <?php $__currentLoopData = $intelligenceLevelValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-md-4 col-sm-5 my-2 order-1 order-md-0">
                        <div class="progress mb-5 bg-transparent my-3" style="position: relative; width: 100%; height: 18px">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: <?php echo e($value->percentage); ?>%; z-index: 2; background-color: <?php echo e($value->hexColor()); ?>"></div>
                            <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 my-2">
                        <p class="text-dark font-weight-bold font-size-lg"><?php echo e($value->type->title); ?></p>
                        <p class="text-dark font-size-lg"><?php echo e($value->type->description); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        var options = {
            series: [<?php echo e($intelligenceLevelResult->percentage); ?>],
            chart: {
                height: 250,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    }
                },
            },
            colors: [function({ value, seriesIndex, w }) {
                return "<?php echo e($intelligenceLevelResult->hexColor()); ?>"
            }],
            labels: ["<?php echo $intelligenceLevelResult->level->title; ?>"],
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .progress__bg-line {
            width: 100%;
            height: 2px;
            top: 50%;
            left: 0;
            transform: translate(0, -50%);
            position: absolute;
            border-radius: 0;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/test-screen-intelligence-level.blade.php ENDPATH**/ ?>