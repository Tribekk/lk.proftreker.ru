

<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Описание организации']); ?>
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
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center justify-content-center mt-2">
                           <h2 class="font-size-h1 font-hero"><?php echo e($orgunit->title); ?></h2>
                        </div>
                    </div>
                    <div class="flex-shrink-0 ml-7">
                        <div class="symbol symbol-50 symbol-lg-120 min-w-120px">
                            <img alt="<?php echo e($orgunit->title); ?>" src="<?php echo e($orgunit->logoUrl); ?>">
                        </div>
                    </div>
                </div>
                <div class="separator separator-solid my-7"></div>

                <div class="row">
                    <div class="col-md-3">
                        <h3 class="font-size-h3 font-weight-bold font-hero mb-4">Карьерные программы</h3>
                        <div><?php echo $orgunit->career_program; ?></div>
                    </div>
                    <div class="col-md-6 px-10">
                        <h3 class="font-size-h3 font-weight-bold font-hero mb-4">Мероприятия</h3>
                        <?php $__empty_1 = true; $__currentLoopData = $orgunit->events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="mr-5 mb-5 card p-8 w-100 md-w-50">
                                <div class="d-flex justify-content-between">
                                    <h4 class="font-size-h5 font-hero-super mb-5">
                                        <?php echo e($event->title); ?>

                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <h5 class="font-size-h5 font-weight-bold">Формат</h5>
                                        <h5 class="font-size-h6"><?php echo e($event->format->title); ?></h5>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <h5 class="font-size-h5 font-weight-bold">Начало в</h5>
                                        <h5 class="font-size-h6"><?php echo e($event->start_at->format('d.m.Y H:i')); ?></h5>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <h5 class="font-size-h5 font-weight-bold">Окончание в</h5>
                                        <h5 class="font-size-h6"><?php echo e($event->finish_at->format('d.m.Y H:i')); ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="mr-5 mb-5 order rounded shadow-sm p-10 w-100 md-w-50">
                                 <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'info','text' => 'Не найдено ни одного мероприятия','close' => false]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h3 class="font-size-h3 font-weight-bold font-hero mb-4">О компании</h3>
                            <div><?php echo $orgunit->about_orgunit; ?></div>
                        </div>
                        <div class="separator separator-solid my-7"></div>
                        <div>
                            <h3 class="font-size-h3 font-weight-bold font-hero mb-4">Контакты</h3>
                            <div><?php echo $orgunit->contacts; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/orgunits/description.blade.php ENDPATH**/ ?>