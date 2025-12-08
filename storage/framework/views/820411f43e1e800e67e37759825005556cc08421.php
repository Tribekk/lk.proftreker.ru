

<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Прохождение КВИЗ организации']); ?>
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
                            <img alt="<?php echo e($orgunit->title); ?>" src="<?php echo e($orgunit->logoUrl); ?>">

                        </div>

                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h2 class="font-size-h1 font-hero"><?php echo e($orgunit->title); ?></h2>

                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">

                            <?php echo e(@$orgunit->personal_quiz["quiz_title"]); ?>



                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <?php echo @$orgunit->personal_quiz["quiz_description"]; ?>

                        </div>


                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h3>Поздравляем!</h3>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h3>Ваш результат <?php echo e($result); ?>%!</h3>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                           <Br>
                             <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('orgunits.personal_quiz', $orgunit)).'','title' => ''.e(__('Просмотр КВИЗ еще раз!')).'']); ?>
<?php $component->withName('inputs.button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f)): ?>
<?php $component = $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f; ?>
<?php unset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                        </div>


                    </div>


                    <div class="separator separator-solid my-7"></div>


                </div>


                <br><br><br>

                <div class="row">

                    <div class="col-md-3">
                        <div>
                            <a href="<?php echo e($orgunit->answer_bucklet); ?>" target="_blank">
                                <h3 class="font-size-h3 font-weight-bold font-hero mb-4">Правильные ответы</h3>
                            </a>
                            <br>

                        </div>
                        <div>
                            <h3 class="font-size-h3 font-weight-bold font-hero mb-4">О компании</h3>
                            <div><?php echo $orgunit->about_orgunit; ?></div>
                        </div>
                        <div class="separator separator-solid my-7"></div>
                        <div>
                            <h3 class="font-size-h3 font-weight-bold font-hero mb-4">Контакты</h3>
                            <?php echo $orgunit->contacts; ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/orgunits/personal_quiz_result.blade.php ENDPATH**/ ?>