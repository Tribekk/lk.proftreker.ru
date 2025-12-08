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
                    <div class="container">
                        <div class="d-flex">
                            <img src="<?php echo e(asset('img/green_bot.png')); ?>" style="transform: scaleX(-1)" class="max-h-125px mr-5 d-md-block d-none" alt="">
                            <div>
                                <h1 class="font-alla font-pixel font-size-h1">Уважаемый родитель, поздравляем!</h1>
                                <p class="font-size-h4 font-weight-bold">Приглашаем Вашу семью перейти на следующий этап - получить бесплатную консультацию</p>

                               <ol class="font-size-h5 px-5">
                                   <li>для этого ребенок проходит углубленное тестирование, дополняющее базовый портрет</li>
                                   <li>и затем Вы вместе получите бесплатную 1,5 часовую онлайн-консультацию профориентолога</li>
                               </ol>

                                <p class="font-size-h4 font-weight-bold mt-5">
                                    Для этого запланируйте удобное время для 1,5-часовой онлайн-встречи<br>
                                    Можно выбирать будни и выходные, с 8 до 22 часов, с 20 ноября до 25 декабря
                                </p>

                                <?php if(!Auth::user()->school_id): ?>
                                     <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'light-info','text' => 'Пожалуйста, укажите школу, в которой обучается Ваш ребенок<br><a href="/user/edit#school_id">Перейти в настройки профиля</a>','close' => false]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                <?php endif; ?>

                                <?php if(!Auth::user()->observedUsers()->count()): ?>
                                     <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'light-info','text' => 'Для корректной работы платформы требуется привязка ребенка к Вашему аккаунту','close' => false]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                <?php endif; ?>

                                <div class="mt-8 button-group font-hero">

                                    <a href="<?php echo e(route('consultations.record.form')); ?>" class="btn <?php if(!Auth::user()->observedUsers()->count()): ?> disabled btn-light <?php else: ?> btn-warning <?php endif; ?> rounded-pill px-12 py-5 min-h-80px min-w-md-275px max-w-md-275px my-2 mx-2 d-inline-flex align-items-center flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                        <span class="d-block font-weight-bold m-0">Выбрать время</span>
                                        <span class="d-block font-weight-bold m-0">консультации с ребенком</span>
                                    </a>

                                    <?php if(Auth::user()->consultations()->count()): ?>
                                        <a href="<?php echo e(route('consultations.list')); ?>" class="btn btn-warning rounded-pill px-12 py-5 min-h-80px min-w-md-275px max-w-md-275px my-2 mx-2 d-inline-flex align-items-center flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                            <span class="d-block font-weight-bold m-0">Консультации</span>
                                        </a>
                                    <?php endif; ?>

                                    <form action="<?php echo e(route('quiz.supplement', $questionnaire)); ?>" method="post" class="d-inline-block min-w-md-275px max-w-md-275px w-100 w-md-auto w-sm-50 mx-2">
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-warning px-12 py-5 font-weight-bold my-2 mx-2 rounded-pill min-h-80px d-inline-flex align-items-center flex-column justify-content-center w-100">
                                            <span class="d-block font-weight-bold m-0">Изменить анкету</span>
                                        </button>
                                    </form>

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

                                    <a href="<?php echo e(route('quiz.restart', $questionnaire)); ?>" class="btn btn-primary px-12 py-5 min-h-80px min-w-md-300px max-w-md-300px font-weight-bold my-2 mx-2 rounded-pill d-inline-flex align-items-center flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                        <span class="d-block font-weight-bold m-0">Заполнить анкету заново</span>
                                        <span class="d-block m-0 opacity-75">Предыдущие результаты будут удалены</span>
                                    </a>

                                    <?php if($children->count()): ?>
                                        <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(route('parent.children.results', $child)); ?>?backTo=<?php echo e(route('dashboard')); ?>" class="btn btn-warning px-12 py-5 font-weight-bold my-2 mx-2 rounded-pill min-h-80px min-w-md-300px max-w-md-300px d-inline-flex align-items-center flex-column justify-content-center w-100 w-md-auto w-sm-50">
                                                <span class="d-block font-weight-bold m-0">Отчет по <?php echo e($child->finishedDepthTests ? 'глубинному тестированию' : 'базовому тесту'); ?></span>
                                                <span class="d-block m-0 opacity-75"><?php echo e($child->fullName); ?></span>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/parent/dashboard.blade.php ENDPATH**/ ?>