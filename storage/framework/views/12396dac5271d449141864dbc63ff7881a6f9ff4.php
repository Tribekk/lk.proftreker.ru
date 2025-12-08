<?php $__currentLoopData = $resultFactorMotiveOfChoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-sm-6 order-1 order-sm-0">
        <div class="progress mb-5 bg-transparent my-3" style="position: relative; width: 100%; height: 18px">
            <div class="progress-bar rounded-pill <?php echo e($factor->percentage >= 50 ? $progressColor ?? 'bg-primary' : 'bg-gray'); ?>" role="progressbar" style="width: <?php echo e($factor->percentage); ?>%; z-index: 2;"></div>
            <div class="progress-bar bg-dark progress__bg-line" role="progressbar" style="width: 100%"></div>
        </div>
    </div>
    <div class="col-sm-6 order-0 order-sm-1">
        <div x-data="{ seeFactor: false }" @click.away="seeFactor = false">
            <h4 class="font-size-h3 my-3 cursor-pointer" @click="seeFactor = !seeFactor">
            <span class="<?php echo e($factor->percentage >= 50 ? $textColor ?? 'text-primary text-hover-danger' : 'text-dark-50 text-hover-dark'); ?>">
                <?php echo e($factor->factor->title); ?>

            </span>
            </h4>

            <div class="my-3" x-show="seeFactor">
                <b><?php echo e($factor->factor->title); ?></b> - <?php echo e($factor->factor->description); ?>

            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .bg-gray {
            background: #dedede;
        }

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
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/quiz/_result-student-questionnaire/_result_factor_motive_of_choice.blade.php ENDPATH**/ ?>