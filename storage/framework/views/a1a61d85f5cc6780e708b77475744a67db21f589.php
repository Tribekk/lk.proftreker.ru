<?php
    $availableQuiz = \Domain\Quiz\Models\AvailableQuiz::where('user_id', $consultation->child_id)
        ->whereHas('quiz', function($q) { $q->where('slug', 'type-of-thinking'); })->first();

    $typeThinkingResult = $consultation->child->typeOfThinkingResult;
    $typeThinkingValues = $typeThinkingResult->values;
    $thinkingTypes = $typeThinkingResult->values()->where('is_higher', 1)->get();
?>

<div class="row">
    <div class="col-md-7">
        <?php $__currentLoopData = $typeThinkingValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-md-7 order-1 order-md-0">
                    <div class="progress mb-5 bg-transparent my-3" style="position: relative; width: 100%; height: 18px">
                        <div class="progress-bar rounded-pill" role="progressbar" style="width: <?php echo e($value->percentage); ?>%; z-index: 2; background-color: <?php echo e($value->hexColor()); ?>"></div>
                        <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="<?php echo e(route('quiz.type-of-thinking-details', [$availableQuiz, $value->type_id, 'backTo' => route('consultations.edit', $consultation)."#report-tab",])); ?>" class="text-dark font-size-h4 <?php echo e($value->is_higher ? 'font-weight-bold' : ''); ?>"><?php echo e($value->type->title); ?></a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-md-5">
        <div class="mt-12">
            <div id="chart"></div>
        </div>
    </div>
</div>

<div class="row my-12">
    <?php $__empty_1 = true; $__currentLoopData = $thinkingTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thinkingType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-6">
            <div class="my-8">
                <h3 class="font-size-h3 font-weight-bold font-blue mb-0"><?php echo $thinkingType->type->title; ?></h3>
                <p class="font-size-h5"><?php echo $thinkingType->type->who_is_it; ?></p>

                <div class="font-size-h5"><?php echo $thinkingType->type->description; ?></div>

                <h4 class="font-size-h4 font-weight-bold text-dark-50 mb-0 mt-5"><?php echo $thinkingType->manifestation->title; ?></h4>
                <?php if($thinkingType->manifestation->description): ?>
                    <p class="font-size-h5"><?php echo $thinkingType->manifestation->description; ?></p>
                <?php endif; ?>
            </div>
            <hr>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3 class="font-size-h3 text-dark">Тип мышления не выражен</h3>
    <?php endif; ?>
</div>

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

<?php $__env->startPush('scripts'); ?>
    <script>
        <?php
            $totalValues = 0;
            foreach ($typeThinkingValues as $value) {
                $totalValues += $value->value;
            }
        ?>

        <?php if($totalValues > 0): ?>
        var options = {
            series: [<?php $__currentLoopData = $typeThinkingValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo round((100 / $totalValues) * $value->value); ?>,<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
            chart: {
                height: 250,
                type: 'donut',
            },
            dataLabels: {
                enabled: false,
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '60%',
                        labels: {
                            show: false,
                        },
                    }
                },

            },
            legend: false,
            colors: [<?php $__currentLoopData = $typeThinkingValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($value->value > 0): ?> "<?php echo $value->type->hex_color; ?>", <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
            labels: [<?php $__currentLoopData = $typeThinkingValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($value->value > 0): ?> "<?php echo $value->type->title; ?>", <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
        <?php endif; ?>
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_report/report_type_type-of-thinking.blade.php ENDPATH**/ ?>