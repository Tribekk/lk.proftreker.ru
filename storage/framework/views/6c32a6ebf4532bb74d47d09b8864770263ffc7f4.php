<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Профтрекер']); ?>
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
                    <h2 class="font-weight-bold font-size-h1 text-primary mb-6">Благодарю!</h2>

                    <div class="row mb-8">
                        <div class="col-md-2 d-none d-md-block text-right">
                            <img class="img-fluid d-md-block mb-5" style="transform: scaleX(-1) translate(0, -20px);" src="<?php echo e(asset('img/green_bot.png')); ?>"/>
                        </div>
                        <div class="col-md-10">
                            <h3 class="text-dark font-size-h2 mb-7">Мы получили анкету, спасибо за Ваше время и ответы!</h3>

                            <p class="text-dark-50 font-size-h4">Далее, после регистрации детей в школе,<br>
                                Вы сможете привязать аккаунт своего ребенка и изучать его профиль и рекомендации,<br>
                                получать уведомления о мероприятиях, обучении и карьере</p>
                        </div>
                    </div>

                    <div class="row">
                        <a href="<?php echo e(route('parent.children')); ?>" class="btn btn-warning px-8 py-4 rounded-pill mx-3 my-3">Кабинет ребенка</a>
                        <a href="<?php echo e(route('observe.user')); ?>" class="btn btn-warning px-8 py-4 rounded-pill mx-3 my-3">Привязать аккаунт ребенка</a>

                        <form action="<?php echo e(route('quiz.supplement', $availableQuiz)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-warning px-8 py-4 rounded-pill mx-3 my-3">Изменить анкету</button>
                        </form>
                        <a href="<?php echo e(route('feedback.form')); ?>" class="btn btn-warning px-8 py-4 rounded-pill mx-3 my-3">Дать обратную связь</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_result-parent-questionnaire.blade.php ENDPATH**/ ?>