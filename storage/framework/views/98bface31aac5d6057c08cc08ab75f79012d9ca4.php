<form class="form" method="POST" action="<?php echo e(route('attach.parent')); ?>">
    <?php echo csrf_field(); ?>

    <?php if(session()->has('errors')): ?>
         <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','text' => ''.e(session('errors')->first()).'']); ?>
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

    <div class="form-group">
        <label for="school" class="text-dark font-size-h4 required">Школа, в которой обучается Ваш ребенок:</label>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.select2', ['name' => 'school_id','id' => 'school','url' => ''.e(route('admin.schools.view')).'','event' => 'setSchool','placeholder' => ''.e(__('Школа')).'','selected' => ''.e(old('school_id')).'','selectedItemUrl' => '/admin/schools'])->html();
} elseif ($_instance->childHasBeenRendered('iQvyncw')) {
    $componentId = $_instance->getRenderedChildComponentId('iQvyncw');
    $componentTag = $_instance->getRenderedChildComponentTagName('iQvyncw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iQvyncw');
} else {
    $response = \Livewire\Livewire::mount('components.select2', ['name' => 'school_id','id' => 'school','url' => ''.e(route('admin.schools.view')).'','event' => 'setSchool','placeholder' => ''.e(__('Школа')).'','selected' => ''.e(old('school_id')).'','selectedItemUrl' => '/admin/schools']);
    $html = $response->html();
    $_instance->logRenderedChild('iQvyncw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__errorArgs = ['school_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert" style="display: block;">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.attach.select-parent-sex', ['sex' => ''.e(old('sex', 1)).''])->html();
} elseif ($_instance->childHasBeenRendered('UeJ0km8')) {
    $componentId = $_instance->getRenderedChildComponentId('UeJ0km8');
    $componentTag = $_instance->getRenderedChildComponentTagName('UeJ0km8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UeJ0km8');
} else {
    $response = \Livewire\Livewire::mount('user.attach.select-parent-sex', ['sex' => ''.e(old('sex', 1)).'']);
    $html = $response->html();
    $_instance->logRenderedChild('UeJ0km8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:user.attach.select-parent-sex>

    <div class="pb-lg-0 pb-5">
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-outline-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
            <?php echo e(__('Назад')); ?>

        </a>
        <button type="submit" class="btn btn-primary hover-outline font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
            <?php echo e(__('Далее')); ?>

        </button>
    </div>

</form>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/user/type/_parent-form.blade.php ENDPATH**/ ?>