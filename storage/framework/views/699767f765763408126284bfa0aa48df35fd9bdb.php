

<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Редактирование критериев']); ?>
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
                        Редактирование критериев отбора (результаты анкеты и  базового теста) профиля "<?php echo e($userProfile->name); ?>"
                    </div>
                </div>
                <div class="card-body">


                    <?php echo $__env->make('admin.user_profiles.include.result_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form action="<?php echo e(route('user_profiles.anket_results_update',$anketResults->first()->id)); ?>" method="POST" >

                        <?php echo csrf_field(); ?>
                        <table>
                            <tr>
                                <td width="40"></td>
                                <td width="90%">

                                    <div class="row">


                                        <div class="col-xs-50 col-sm-50 col-md-50">
                                            <div class="form-group">


                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">№</th>

                                                        <th scope="col"></th>
                                                        <th scope="col">Зеленая зона</th>
                                                        <th scope="col">Желтая зона</th>
                                                        <th scope="col" >Красная зона</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                            <tr>
                                                                <td>
                                                                   1
                                                                </td>
                                                                <td>
                                                                    Вероятность остаться в родном городе , от-до
                                                                </td>
                                                                <td style="background-color:greenyellow">

                                                                    <input type="text" name="anketResults[own_city][green]" value="<?php echo e(@$control_values['own_city']['green']); ?>">

                                                                </td>
                                                                <td  style="background-color:yellow">

                                                                    <input type="text" name="anketResults[own_city][yellow]" value="<?php echo e(@$control_values['own_city']['yellow']); ?>">


                                                                </td>

                                                                <td  style="background-color:indianred">


                                                                    <input type="text" name="anketResults[own_city][red]" value="<?php echo e(@$control_values['own_city']['red']); ?>">

                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>
                                                                    2
                                                                </td>
                                                                <td>
                                                                    Типаж:
                                                                </td>
                                                                <td style="background-color:greenyellow">

                                                                  <?php
                                                                    $type='green';
                                                                  ?>

                                                                    <?php echo $__env->make('admin.user_profiles.include.anket_results_tipag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </td>
                                                                <td  style="background-color:yellow">



                                                                    <?php
                                                                        $type='yellow';
                                                                    ?>

                                                                    <?php echo $__env->make('admin.user_profiles.include.anket_results_tipag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                                </td>

                                                                <td  style="background-color:indianred">

                                                                    <?php
                                                                        $type='red';
                                                                    ?>

                                                                    <?php echo $__env->make('admin.user_profiles.include.anket_results_tipag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </td>
                                                            </tr>



                                                            <tr>
                                                                <td>
                                                                    3
                                                                </td>
                                                                <td>
                                                                    Альтернативный компонент:
                                                                </td>
                                                                <td style="background-color:greenyellow">

                                                                    <?php
                                                                        $type='green';
                                                                    ?>

                                                                    <?php echo $__env->make('admin.user_profiles.include.anket_results_alt_component', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </td>
                                                                <td  style="background-color:yellow">



                                                                    <?php
                                                                        $type='yellow';
                                                                    ?>

                                                                    <?php echo $__env->make('admin.user_profiles.include.anket_results_alt_component', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                                </td>

                                                                <td  style="background-color:indianred">

                                                                    <?php
                                                                        $type='red';
                                                                    ?>

                                                                    <?php echo $__env->make('admin.user_profiles.include.anket_results_alt_component', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </td>
                                                            </tr>




                                                    </tbody>


                                            </div>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        </table>


                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                            <button type="submit" class="btn btn-primary">Сохранить</button>
                             <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('user_profiles.edit',$userProfile->id)).'','title' => ''.e(__(' Назад')).'']); ?>
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

                    </form>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/admin/user_profiles/anket_results.blade.php ENDPATH**/ ?>