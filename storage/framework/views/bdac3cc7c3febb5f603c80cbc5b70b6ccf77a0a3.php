<h3 class="font-pixel font-orange font-size-h1 mb-10">
    Результаты: склонности
</h3>

<div>
    <a class="link font-size-h3" href="<?php echo e(request('backTo', false) ? request('backTo') : route('quiz.result', $availableQuiz)); ?>">К результатам</a>
</div>

<div class="row mt-10">
    <div class="col-md-4">
        <div id="chart">
        </div>

        <div class="font-size-h4 text-center font-hero">Набрано: <span style="color: <?php echo e($inclinationResult->hexColor()); ?>;"><?php echo e($inclinationResult->value); ?> баллов</span></div>
    </div>
    <div class="col-md-8">
        <div>
            <h3 class="text-center font-hero font-size-h2" style="color: <?php echo e($inclinationResult->hexColor()); ?>;"><?php echo e($inclination->title); ?></h3>
            <div class="font-size-lg mt-8 font-weight-bold font-size-h4">
                <?php echo $inclination->description; ?>

            </div>

            <div class="font-size-lg text-dark mt-5">
                <?php echo $inclination->professions_info; ?>

            </div>
        </div>

        <div class="mt-12">
            <h3 class="font-size-h4 text-dark font-weight-bold">
                <?php echo $inclinationResult->type->title; ?>

            </h3>

            <div class="font-size-lg text-dark mt-5">
                <?php echo $inclinationResult->type->description; ?>

            </div>
        </div>
    </div>
</div>

<p class="text-dark-50 text-md-right mt-10">
    10-12 баллов – ярко выраженная профессиональная склонность;<br>
    7-9 баллов – средне выраженная профессиональная склонность;<br>
    4-6 баллов – слабо выраженная профессиональная склонность;<br>
    0-3 баллов – профессиональная склонность не выражена.
</p>

<?php $__env->startPush('scripts'); ?>
    <script>
        var options = {
            series: [<?php echo e($inclinationResult->percentage); ?>],
            chart: {
                height: 350,
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
                return "<?php echo e($inclinationResult->hexColor()); ?>"
            }],
            labels: ["<?php echo $inclination->title; ?>"],
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_details-inclinations.blade.php ENDPATH**/ ?>