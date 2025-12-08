<div class="d-flex py-3">
    <img src="<?php echo e(asset('img/bot.png')); ?>" alt="" class="max-h-125px img-fluid mr-8 d-sm-block d-none">
    <div class="mt-5">
        <h1 class="font-size-h1 font-pixel font-orange">Отлично, все тесты пройдены</h1>
        <h5 class="font-size-h4 font-weight-bold">Ты молодец!</h5>

        <p class="mt-8 mb-0 font-weight-bold font-size-h5">Теперь с родителями выберите удобное время консультации</p>
        <p class="mt-0 mb-0 font-weight-bold font-size-h5">Проверь, возможно, дата уже запланирована, если нет, напомни родителям о необходимости:</p>
        <ul class="mt-0 mb-4 font-size-h5 p-5">
            <li>зарегистрироваться</li>
            <li>заполнить анкету</li>
            <li>назначить дату онлайн-встречи с профориентологом</li>
        </ul>

        <?php if(!Auth::user()->observers()->count()): ?>
             <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'light-info','text' => 'Для корректной работы платформы требуется привязка родителя к Вашему аккаунту','close' => false]); ?>
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
            <a href="<?php echo e(route('consultations.list')); ?>" class="btn  <?php if(Auth::user()->consultations()->count()): ?> btn-warning <?php else: ?> btn-secondary disabled <?php endif; ?> rounded-pill px-12 py-5 min-h-80px min-w-md-275px my-2 mx-2 d-inline-flex align-items-center flex-column justify-content-center w-100 w-sm-auto">
                <span class="d-block font-weight-bold m-0">Проверить время</span>
                <span class="d-block font-weight-bold m-0">консультации</span>
            </a>

            <a href="<?php echo e(route('quiz.results', ['backTo' => route('dashboard')])); ?>" class="btn btn-warning rounded-pill px-12 py-5 min-h-80px min-w-md-275px my-2 mx-2 d-inline-flex align-items-center flex-column justify-content-center w-100 w-sm-auto">
                <span class="d-block font-weight-bold m-0">Посмотреть результаты</span>
                <span class="d-block font-weight-bold m-0">полного тестирования</span>
            </a>


            <?php if($personal_quiz_available>0): ?>
            <br><br><br>
            <h3>Вы приглашены на КВИЗ!</h3>
            <a href="<?php echo e(route('orgunits.personal_quiz', $personal_quiz_available)); ?>" class="col-12 btn btn-warning px-8 py-5 font-weight-bold my-2 rounded-pill">Пройти КВИЗ</a>

            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/student/_dashboard/finish-tests-dashboard.blade.php ENDPATH**/ ?>