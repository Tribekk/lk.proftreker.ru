

<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Анкета родителей    ']); ?>
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
    <div class="container h-50">
        <div class="row h-100">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b h-100">

                    <div class="card-body">
                        <h3 class="font-pixel font-weight-black text-primary font-size-h1  mb-10">
                            <?php echo e($questionnaire->quiz->title); ?>

                        </h3>
                        <div class="row">
                            <div class="col-12 col-md-4">

                                <form method="post" class="align-self-end" action="<?php echo e(route('quiz.start', $questionnaire)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-lg btn-primary font-hero-super px-10 py-6 rounded-pill">Заполнить анкету</button>
                                </form>
                            </div>
                            <div class="col-12 col-md-8 font-size-h5 mt-4 mt-md-0" style="line-height: 3rem;">
                                <h3 class="font-size-h3 font-weight-bold text-dark mb-4">Добрый день, спасибо за доверие и регистрацию на платформе!</h3>
                                <p class="text-dark mt-4">Этот сервис поможет в самоопределении ребенка, а в личном кабинете можно изучать
                                    его профиль и получать подходящие предложения по обучению и будущей карьере</p>
                                <h3 class="font-size-h3 font-weight-bold text-dark mb-4">Чтобы дать Вашему ребенку подходящие рекомендации, важно учесть Ваше мнение</h3>
                                <p class="text-dark mt-4">Заполните короткую форму с базовыми характеристиками и мы будем отправлять актуальные предложения по обучению и стажировкам для Вашего ребенка</p>

                                <div class="mt-8 button-group font-hero">
                                    <a href="<?php echo e(route('parent.children')); ?>" class="btn <?php if(!Auth::user()->observedUsers()->count()): ?> btn-light disabled <?php else: ?> btn-warning <?php endif; ?> px-12 py-5 min-h-80px min-w-md-275px max-w-md-275px font-weight-bold my-2 mx-2 rounded-pill d-inline-flex align-items-cente flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                        <span class="d-block font-weight-bold m-0">Перейти в кабинет</span>
                                        <span class="d-block font-weight-bold m-0">ребенка</span>
                                    </a>

                                    <a href="<?php echo e(route('observe.user')); ?>" class="btn btn-warning px-12 py-5 font-weight-bold my-2 mx-2 rounded-pill min-h-80px min-w-md-275px max-w-md-275px d-inline-flex align-items-center flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                        <span class="d-block font-weight-bold m-0">Привязать аккаунт ребенка</span>
                                    </a>

                                    <a href="<?php echo e(route('feedback.form')); ?>" class="btn btn-warning px-12 py-5 font-weight-bold my-2 mx-2 rounded-pill min-h-80px min-w-md-275px max-w-md-275px d-inline-flex align-items-center flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                        <span class="d-block font-weight-bold m-0">Дать обратную связь</span>
                                    </a>

                                    <a href="<?php echo e(route('consultations.record.form')); ?>" class="btn btn-info px-12 py-5 font-weight-bold my-2 mx-2 rounded-pill min-h-80px min-w-md-275px max-w-md-275px d-inline-flex align-items-center flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                        <span class="d-block font-weight-bold m-0">Записаться на консультацию</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/quiz/_instruction/parent-questionnaire-instruction.blade.php ENDPATH**/ ?>