<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Результаты, твой профиль']); ?>
<?php $component->withName('subheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b)): ?>
<?php $component = $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b; ?>
<?php unset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-xl-12">
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="mb-10">
                        <a role="button" class="link font-size-h3" href="<?php echo e(route('quiz.view')); ?>">К списку анкет и тестов</a>
                    </div>

                    <h2 class="font-weight-bold font-size-h1 text-warning mb-6">Образ будущего и мотивы выбора</h2>

                    <div class="row">
                        <div class="col-md-6 my-4">
                            <h3 class="font-weight-bold font-blue font-size-h3 mb-5">Я ценю в себе и людях</h3>
                            <?php $__currentLoopData = $result->valuesMeAndPeople; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="font-size-h6 my-2 text-break">
                                    <b><?php echo e($value['title']); ?></b>
                                    <?php if($value['description']): ?> -  <?php echo e($value['description']); ?><?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-md-6 my-4">
                            <div class="mb-8">
                                <h3 class="font-weight-bold font-blue font-size-h3 mb-5">Мой жизненный девиз и его интерпретация</h3>
                                <?php $__currentLoopData = $result->lifeMottosAndInterpretations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="font-size-h6 my-2 text-break">
                                        <b><?php echo e($value['title']); ?></b>
                                        <?php if($value['description']): ?> -  <?php echo e($value['description']); ?><?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="">
                                <h3 class="font-weight-bold font-blue font-size-h3">На текущий момент проявлена</h3>
                                <p class="font-size-h6 text-dark text-break"><?php echo e($result->willingness_to_choose_profession_label); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 my-4">
                            <h3 class="font-weight-bold font-blue font-size-h3 mb-5">При выборе работы мне важно</h3>
                            <?php $__currentLoopData = $result->importantWhenChoosingJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="font-size-h6 my-2 text-break"><?php echo e($value); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-md-10 my-4">
                            <h3 class="font-weight-bold text-primary font-pixel font-size-h3 mb-7">Результаты: мотивы выбора</h3>
                            <?php echo $__env->make('quiz._result-student-questionnaire._result_factor_motive_of_choice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_result-student-questionnaire.blade.php ENDPATH**/ ?>