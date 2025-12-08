<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Консультации']); ?>
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
                    <img src="<?php echo e(asset('img/green_bot.png')); ?>" class="h-225px img-fluid d-md-block d-none" style="transform: scaleX(-1)" alt="">
                    <div class="ml-5 mt-md-8 mt-3">
                        <h2 class="font-size-h1 font-pixel font-alla">Выбранное время забронировано</h2>
                        <p class="font-size-h5 mt-8">
                            Подтверждение консультации, данные профориентолога и ссылку на онлайн-встречу <?php echo e($consultation->communicationTypeLabel); ?> мы отправим в Ваш личный кабинет в течение 5 дней
                        </p>
                        <?php if(Auth::user()->hasRole('parent')): ?>
                        <p class="font-weight-bold font-size-h5 mt-6">
                            До этого ознакомьтесь с результатами всех тестов,<br>
                            и если нужно, напомните ребенку о глубинном тестировании
                        </p>
                        <?php endif; ?>
                        <p class="font-size-h5 text-dark-50 mt-6">
                            Обращаем Ваше внимание, что эти этапы абсолютно бесплатны,
                            но при необходимости получения дополнительных консультаций по Вашему желанию,
                            новые встречи оплачиваются и оформляются как отдельная услуга
                        </p>

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

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/recorded.blade.php ENDPATH**/ ?>