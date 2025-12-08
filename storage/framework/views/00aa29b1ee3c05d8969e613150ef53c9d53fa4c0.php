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
                    <h1 class="font-pixel text-primary font-size-h1">Визитная карточка</h1>
                    <h4 class="font-size-h3">Изменение данных визитной карточки</h4>

                    <form action="<?php echo e(route('consultant.business_card.update')); ?>" method="post" class="mt-12">
                        <?php echo csrf_field(); ?>

                         <?php if (isset($component)) { $__componentOriginaldaf31c5f9a493efed77ed4cafa70096639381b07 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SummernoteEditor::class, ['id' => 'regalia_and_experience','name' => 'regalia_and_experience','required' => true,'title' => 'Ваши регалии и опыт в области профориентации, карьерного консультирования, психологии, HR и т.п.:','value' => ''.e(old('regalia_and_experience', $user->consultant->regalia_and_experience)).'']); ?>
<?php $component->withName('inputs.summernote-editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginaldaf31c5f9a493efed77ed4cafa70096639381b07)): ?>
<?php $component = $__componentOriginaldaf31c5f9a493efed77ed4cafa70096639381b07; ?>
<?php unset($__componentOriginaldaf31c5f9a493efed77ed4cafa70096639381b07); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\InputTextV::class, ['title' => 'Ваш суммарный опыт работы:','required' => true,'value' => ''.e(old('experience', $user->consultant->experience)).'','min' => '1','name' => 'experience','id' => 'experience']); ?>
<?php $component->withName('inputs.input-text-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f)): ?>
<?php $component = $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f; ?>
<?php unset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                        <div class="mt-10">
                            <a href="<?php echo e(route('consultant.business_card')); ?>" class="btn btn-outline-primary font-size-h6">
                                Назад
                            </a>
                            <button class="btn btn-primary font-size-h6">
                                Продолжить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/consultant/business-card/edit-business-card.blade.php ENDPATH**/ ?>