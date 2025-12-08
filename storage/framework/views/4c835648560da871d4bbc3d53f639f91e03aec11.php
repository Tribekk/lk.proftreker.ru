<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Создание нового профиля']); ?>
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

    <div class="row">
        <div class="col">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title font-weight-bold font-size-h3 font-hero-super">
                        Новый Профиль
                    </div>
                </div>
                <div class="card-body">


            <?php echo $__env->make('admin.user_profiles.include.result_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




                            <form action="<?php echo e(route('user_profiles.update',$userProfile->id)); ?>" method="POST" >
                                <?php echo method_field('PATCH'); ?>
                <?php echo csrf_field(); ?>
                <table>
                    <tr>
                        <td width="40"></td>
                        <td width="80%">

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Название профиля:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Название профиля" value="<?php echo e(old('name',$userProfile->name)); ?>">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <td width="200">
                                                    <a href="<?php echo e(route('user_profiles.ankets',$userProfile->id)); ?>"><button type="button" class="btn-outline-success" style="border-radius: 5px 5px 5px 5px; width:300px;height:40px;margin-top:5px"><?php echo e(__('Анкета')); ?></button></a><br>
                                                    <a href="<?php echo e(route('user_profiles.base_test_items',$userProfile->id)); ?>"><button type="button" class="btn-outline-success" style="border-radius: 5px 5px 5px 5px; width:300px;height:40px;margin-top:5px"><?php echo e(__('Базовый тест')); ?></button></a><br>
                                                    <a href="<?php echo e(route('user_profiles.deep_test_items',$userProfile->id)); ?>"><button type="button" class="btn-outline-success" style="border-radius: 5px 5px 5px 5px; width:300px;height:40px;margin-top:5px"><?php echo e(__('Углубленный тест')); ?></button></a><br>
                                                    <a href="<?php echo e(route('user_profiles.anket_results',$userProfile->id)); ?>"><button type="button" class="btn-outline-success" style="border-radius: 5px 5px 5px 5px; width:300px;height:40px;margin-top:5px"><?php echo e(__('Отбор по базовому тесту и анкете')); ?></button></a><br>
                                                    <a href="<?php echo e(route('user_profiles.deep_test_results',$userProfile->id)); ?>"><button type="button" class="btn-outline-success" style="border-radius: 5px 5px 5px 5px; width:300px;height:40px;margin-top:5px"><?php echo e(__('Отбор по углубленному тесту')); ?></button></a><br>
                                                    <a href="<?php echo e(route('user_profiles.consult_results',$userProfile->id)); ?>"><button type="button" class="btn-outline-success" style="border-radius: 5px 5px 5px 5px; width:300px;height:40px;margin-top:5px"><?php echo e(__('Отбор после карьерной консультации')); ?></button></a><br>


                                                </td><td width="20"></td><td>

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                </table>


                <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                    <table>
                        <tr><td width="130"></td>

                            <td>
                                 <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('user_profiles.index')).'','title' => ''.e(__(' Назад')).'']); ?>
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

                            </td>
                            <td width="5"></td>


                            <td>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                            </form>
                    </td><td width="5"></td>


                    <td>
                    <form method="POST" action="<?php echo e(route('user_profiles.destroy', $userProfile->id)); ?>">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>

                        <button type="submit" class="btn btn-bg-danger">Удалить Профиль</button>
                        <button type="button" onClick="alert('Недостаточно свободного места на сервере!')" class="btn btn-bg-white">Экспорт в Excel</button>

                    </form>

                    </td>
                    </tr>
                    </table>

                </div>



        </div>
    </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/admin/user_profiles/edit.blade.php ENDPATH**/ ?>