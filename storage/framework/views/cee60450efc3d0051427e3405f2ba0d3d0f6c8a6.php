<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Консультация']); ?>
<?php $component->withName('subheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b)): ?>
<?php $component = $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b; ?>
<?php unset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="mb-6">
                    <a href="<?php echo e(route('consultations.list')); ?>" class="text-primary link font-size-h4">К списку консультаций</a>
                </div>

                <div class="d-flex">
                   
                    <div class="ml-5 mt-md-8 mt-3">
                        <h2 class="font-size-h1 font-pixel font-alla">Консультация подтверждена</h2>
                        <p class="font-size-h3 mt-8 mb-2">
                            <?php if(Auth::user()->hasRole('parent')): ?>
                                Ждем Вас с ребенком
                            <?php else: ?>
                                Ждем Вас
                            <?php endif; ?>
                        </p>

                        <p class="font-size-h4 font-weight-bold mt-0"><?php echo e($consultation->formattedStartAt); ?></p>

                        <?php if($consultation->communication_type_value): ?>
                            <p class="font-size-h5 text-dark-50 my-6 text-break">
                                В указанное время подключайтесь на встречу <?php echo e($consultation->communicationTypeLabel); ?> по ссылке:<br><a class="link" href="<?php echo e($consultation->communication_type_value); ?>"><?php echo e($consultation->communication_type_value); ?></a>
                            </p>
                        <?php else: ?>
                            <p class="font-size-h5 text-dark-50 my-6">
                                Ссылку на встречу <?php echo e($consultation->communicationTypeLabel); ?> отправит консультант <span class="font-alla"><?php echo e($consultation->consultant->fullName); ?></span>
                            </p>
                        <?php endif; ?>
                        <p class="font-size-h5 text-dark-50">
                            Ваш консультант:
                        </p>

                       <div class="mt-8 mb-8">
                           <?php echo $__env->make('consultant.business-card._business-card.card', ['user' => $consultation->consultant], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       </div>

                        <?php if(Auth::user()->hasRole('parent')): ?>
                            <div class="mt-8 button-group font-hero">
                                <a href="<?php echo e(route('parent.children.results', $consultation->child)); ?>?backTo=<?php echo e(route('consultations.show', $consultation)); ?>" class="btn btn-primary rounded-pill px-12 py-5 min-w-md-275px my-2 mx-2 d-inline-flex align-items-center flex-column justify-content-center w-100 max-w-400px w-sm-auto">
                                    <span class="d-block font-weight-bold m-0">Проверить результаты глубинного тестирования ребенка</span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/record_confirmed.blade.php ENDPATH**/ ?>