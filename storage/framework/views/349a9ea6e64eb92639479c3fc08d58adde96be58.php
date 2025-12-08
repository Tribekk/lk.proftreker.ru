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
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">

                    <div class="card-body">
                        <h3 class="font-pixel font-orange font-size-h1 mb-10">
                            Выбери тест
                        </h3>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="font-size-h3 font-hero mb-5 bg-orange p-5 text-center border-radius rounded-pill text-white">Тест &laquo;Образ Я&raquo;</h4>
                                    </div>
                                </div>

                                <div class="d-flex flex-column justify-content-between">
                                    <?php $__currentLoopData = $availableBaseQuizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availableQuiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('quiz.quiz-card', ['availableQuizId' => ''.e($availableQuiz->id).''])->html();
} elseif ($_instance->childHasBeenRendered('2oOb7qN')) {
    $componentId = $_instance->getRenderedChildComponentId('2oOb7qN');
    $componentTag = $_instance->getRenderedChildComponentTagName('2oOb7qN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2oOb7qN');
} else {
    $response = \Livewire\Livewire::mount('quiz.quiz-card', ['availableQuizId' => ''.e($availableQuiz->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('2oOb7qN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <?php if($availableQuestionnaires): ?>
                                <div class="col-md-6">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <?php if($availableQuestionnaires[0]->state->fillable()): ?>
                                                <a href="<?php echo e(route('quiz.description', $availableQuestionnaires[0])); ?>" class="btn btn-info px-md-10 text-white py-4 px-5 font-size-h3 font-weight-bolder my-2 rounded-pill col-12">АНКЕТА</a>
                                            <?php else: ?>
                                                <form action="<?php echo e(route('quiz.supplement', $availableQuestionnaires[0])); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <button class="btn btn-info px-md-10 text-white py-4 px-5 font-size-h3 font-weight-bolder my-2 rounded-pill col-12">Изменить анкету</button>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-5">
                                            <?php if(Auth::user()->studentQuestionnaireResult): ?>
                                                <div class="text-center text-md-left font-size-md-lg  text-dark-50">
                                                    <span class="font-weight-bold">Заполнена</span><br>
                                                    <?php echo e(Auth::user()->studentQuestionnaireResult->created_at ? Auth::user()->studentQuestionnaireResult->created_at->format('d.m.Y') : ''); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <?php echo $__env->make('quiz._index.student-questionnaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if($availableDepthQuizzes->count()): ?>
                            <div class="mt-12" id="depth-tests">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h4 class="font-size-h4 font-hero mb-5 mt-10 mt-md-0 bg-alla p-5 text-center border-radius rounded-pill text-white">Углубленное тестирование</h4>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column justify-content-between">
                                            <?php $__currentLoopData = $availableDepthQuizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availableQuiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('quiz.quiz-card', ['availableQuizId' => ''.e($availableQuiz->id).''])->html();
} elseif ($_instance->childHasBeenRendered('muZfqEN')) {
    $componentId = $_instance->getRenderedChildComponentId('muZfqEN');
    $componentTag = $_instance->getRenderedChildComponentTagName('muZfqEN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('muZfqEN');
} else {
    $response = \Livewire\Livewire::mount('quiz.quiz-card', ['availableQuizId' => ''.e($availableQuiz->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('muZfqEN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/index.blade.php ENDPATH**/ ?>