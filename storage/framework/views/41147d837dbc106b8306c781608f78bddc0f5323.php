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
        <?php if(Auth::user()->school_id): ?>
            <?php if(Auth::user()->hasRole('curator')): ?>
                <div class="mb-8">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('school.class-container', ['school' => $school])->html();
} elseif ($_instance->childHasBeenRendered('W30O7YF')) {
    $componentId = $_instance->getRenderedChildComponentId('W30O7YF');
    $componentTag = $_instance->getRenderedChildComponentTagName('W30O7YF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('W30O7YF');
} else {
    $response = \Livewire\Livewire::mount('school.class-container', ['school' => $school]);
    $html = $response->html();
    $_instance->logRenderedChild('W30O7YF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:school.class-container>
                </div>
            <?php endif; ?>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('school.card', ['school' => $school])->html();
} elseif ($_instance->childHasBeenRendered('1PSzQgd')) {
    $componentId = $_instance->getRenderedChildComponentId('1PSzQgd');
    $componentTag = $_instance->getRenderedChildComponentTagName('1PSzQgd');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1PSzQgd');
} else {
    $response = \Livewire\Livewire::mount('school.card', ['school' => $school]);
    $html = $response->html();
    $_instance->logRenderedChild('1PSzQgd', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:school.card>
        <?php else: ?>
            <div class="card">
                <div class="card-header">
                    <h1 class="font-hero font-size-h4 text-primary">Карточка школы</h1>
                </div>
                <div class="card-body">
                     <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'info','text' => 'Для дальнейшего использования учётной записи требуется привязка школы','close' => false]); ?>
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
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/school/card.blade.php ENDPATH**/ ?>