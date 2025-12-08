<?php
    $traits = \Domain\Quiz\Models\CharacterTrait::all();

   /** @noinspection PhpUndefinedFieldInspection */
   $characterTraitResult = $consultation->child->characterTraitResult;

   $characterTraitResultValues = $characterTraitResult->values;
   $characterTraitWrapper = new \App\Quiz\Wrappers\CharacterTraitResultWrapper();
   $availableQuiz = \Domain\Quiz\Models\AvailableQuiz::where('user_id', $consultation->child_id)
       ->whereHas('quiz', function ($q) {
           $q->where('slug', 'traits');
       })->first();
?>

<?php echo $__env->make('quiz._percentage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $characterTraitResultValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row mt-12">
        <div class="col-lg-3 col-6 order-0">
            <h4 class="trait-font-size">
                <?php if (! ($value->is_higher)): ?>
                    <a href="<?php echo e(route('quiz.trait-details', [
                            'availableQuiz' => $availableQuiz,
                            'trait' => $value->trait,
                            'backTo' => route('consultations.edit', $consultation)."#report-tab",
                        ])); ?>">
                        <span class="font-hero-super font-alla">
                            <?php echo e($value->trait->lower_value); ?>

                        </span>
                    </a>
                <?php else: ?>
                    <span class="font-grey-light">
                        <?php echo e($value->trait->lower_value); ?>

                    </span>
                <?php endif; ?>
            </h4>
        </div>
        <div class="col-lg-6 align-self-center order-3 order-lg-2">
            <div class="progress">
                <?php if($value->is_higher): ?>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"></div>
                    <div class="progress-bar <?php echo e($characterTraitWrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="width: <?php echo e($value->chart_percentage); ?>%"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo e(50 - $value->chart_percentage); ?>%"></div>
                <?php else: ?>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo e(50 - $value->chart_percentage); ?>%"></div>
                    <div class="progress-bar <?php echo e($characterTraitWrapper->bootstrapClassName($value->is_higher)); ?>" role="progressbar" style="width: <?php echo e($value->chart_percentage); ?>%"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-3 col-6 order-1 order-lg-3 text-right">
            <h4 class="trait-font-size">
                <?php if($value->is_higher): ?>
                    <a href="<?php echo e(route('quiz.trait-details', [
                            'availableQuiz' => $availableQuiz,
                             'trait' => $value->trait,
                             'backTo' => route('consultations.edit', $consultation)."#report-tab",
                     ])); ?>">
                        <span class="font-hero-super font-orange">
                            <?php echo e($value->trait->higher_value); ?>

                        </span>
                    </a>
                <?php else: ?>
                    <span class="font-grey-light">
                        <?php echo e($value->trait->higher_value); ?>

                    </span>
                <?php endif; ?>
            </h4>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="row mt-15">
    <div class="col">
        <div>
            <span class="font-hero-super font-blue">Полученные результаты достоверны на</span> <span class="font-size-h2 font-hero-super font-alla"><?php echo e($characterTraitResult->reliabilityPercentage == 70 ? 'менее 70' : $characterTraitResult->reliabilityPercentage); ?>%</span>
        </div>
        <div class="font-size-lg mt-2">
            <?php echo e($characterTraitResult->reliabilityDescription); ?>

        </div>
    </div>
</div>


<?php $__env->startPush('css'); ?>
    <style>
        .trait-font-size {
            font-size: 1.25rem;
        }

        @media  only screen and (max-width: 800px) {
            .trait-font-size {
                font-size: 1rem;
            }
        }

        @media  only screen and (max-width: 699px) {
            .trait-font-size {
                font-size: .9rem;
            }
        }

        @media  only screen and (max-width: 470px) {
            .trait-font-size {
                font-size: 1rem;
            }
        }

        @media  only screen and (max-width: 360px) {
            .trait-font-size {
                font-size: .9rem;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/consultations/_report/report_type_big-five.blade.php ENDPATH**/ ?>