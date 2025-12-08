<h3 class="font-pixel font-orange font-size-h1 mb-10">
    Результаты: <?php echo e($availableQuiz->quiz->title); ?>

</h3>

<?php if(!isset($disablePreviousLink)): ?>
    <div>
        <a role="button" class="link font-size-h3" href="<?php echo e(route('quiz.view')); ?>">К списку анкет и тестов</a>
    </div>
<?php endif; ?>

<div class="row align-items-center mt-12">
    <div class="col-md-3">
        <div id="chart">
        </div>
    </div>
    <div class="col-md-9">
        <h4 class="font-size-h4 font-hero">Твой уровень интеллекта - <?php echo e($result->level->title); ?></h4>
        <p class="font-size-h5">определяет общую способность к решению
            практических и интеллектуальных задач</p>
    </div>
</div>

<div class="separator separator-solid my-7 d-block d-md-none"></div>

<?php $__currentLoopData = $resultValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->startPush('scripts'); ?>
    <script>
        var options = {
            series: [<?php echo e($result->percentage); ?>],
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
                return "<?php echo e($result->hexColor()); ?>"
            }],
            labels: ["<?php echo $result->level->title; ?>"],
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
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_result-intelligence-level.blade.php ENDPATH**/ ?>