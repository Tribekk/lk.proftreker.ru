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
                        Редактирование критериев отбора (анкета) профиля "<?php echo e($userProfile->title); ?>">
                    </div>
                </div>
                <div class="card-body">

                    <div style="width:100%" align="right">
                    <table><tr><td>
                    <a href="<?php echo e(route('user_profiles.edit',$userProfile->id)); ?>">
                        <div style="border-radius:5px;padding:5px;background-color:#fcfef6;"><?php echo e(__(' На главную')); ?></div>
                    </a>

                            </td><td width="5"></td><td>


                                <a href="<?php echo e(route('user_profiles.base_test_items',$userProfile->id)); ?>">
                                    <div style="border-radius:5px;padding:5px;background-color:#fcfef6"><?php echo e(__(' Следующий блок >')); ?></div>
                                </a>

                            </td>
                        </tr></table>
                    </div>

                    <br>


                    <?php echo $__env->make('admin.user_profiles.include.result_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $("#text_<?php echo e($anketItems->first()->id); ?>_profession_ready_green").select2({
                                placeholder: "Готовность к выбору профессии",
                                allowClear: true
                            });
                            $("#text_<?php echo e($anketItems->first()->id); ?>_profession_ready_yellow").select2({
                                placeholder: "Готовность к выбору профессии",
                                allowClear: true
                            });
                            $("#text_<?php echo e($anketItems->first()->id); ?>_profession_ready_red").select2({
                                placeholder: "Готовность к выбору профессии",
                                allowClear: true
                            });
                        });
                    </script>
                    <form action="<?php echo e(route('user_profiles.ankets_update',$anketItems->first()->id)); ?>" method="POST" >

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

                                                        <th scope="col">Вопрос</th>
                                                        <th scope="col">Зеленая зона</th>
                                                        <th scope="col">Желтая зона</th>
                                                        <th scope="col" >Красная зона</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $pos=1
                                                    ?>
                                                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                                        <?php if($item->type()->first()->code!="text" and
                                                        $item->type()->first()->code!="select_city"
                                                           ): ?>


                                                            <?php if($item->id!=106 and $item->id!=107 and $item->id!=108 and
                                                            $item->id!=109 and $item->id!=110 and $item->id!=112 and $item->id!=113 and
                                                            $item->id!=114 and $item->id!=115): ?>

                                                        <tr>
                                                            <td>
                                                                <?php echo e($pos); ?>

                                                            </td>
                                                            <td>
                                                              <?php echo e($item->content); ?>

                                                            </td>
                                                            <td style="background-color:#38957B">
                                                                <?php
                                                                    $type="green"
                                                                ?>
                                                              <?php echo $__env->make('admin.user_profiles.include.anket_items_question_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                            </td>
                                                            <td  style="background-color:#FFC35F">

                                                                <?php
                                                                    $type="yellow"
                                                                ?>
                                                                <?php echo $__env->make('admin.user_profiles.include.anket_items_question_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                                            </td>

                                                            <td  style="background-color:#FF4F06">

                                                                <?php
                                                                    $type="red"
                                                                ?>
                                                                <?php echo $__env->make('admin.user_profiles.include.anket_items_question_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                                            </td>
                                                        </tr>


                                                        <?php $pos=$pos+1
                                                        ?>

                                                        <?php endif; ?>


                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td>
                                                            <?php echo e(($pos)); ?>

                                                        </td>
                                                        <td>
                                                            Готовность к выбору профессии
                                                        </td>
                                                        <td style="background-color:#38957B">
                                                            <?php
                                                                $type="green";
                                                                if(key_exists($type, $control_values) && !is_array($control_values[$type]['profession_ready'])){
                                                                    $control_values[$type]['profession_ready'] = [$control_values[$type]['profession_ready']];
                                                                }
                                                            ?>

                                                            <select name="anketItems[<?php echo e($type); ?>][profession_ready][]" class="green"  id="text_<?php echo e($anketItems->first()->id); ?>_profession_ready_green" multiple="multiple">
                                                                <option value="3" <?php if(key_exists($type , $control_values) && in_array(3, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>неготовность к выбору профессии</option>
                                                                <option value="5" <?php if(key_exists($type, $control_values) && in_array(5, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>низкая готовность к выбору профессии</option>
                                                                <option value="7" <?php if(key_exists($type, $control_values) && in_array(7, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>достаточная готовность к выбору профессии</option>
                                                                <option value="10" <?php if(key_exists($type, $control_values) && in_array(10, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>высокая готовность к выбору профессии</option>
                                                            </select>



                                                        </td>
                                                        <td  style="background-color:#FFC35F">

                                                            <?php
                                                                $type="yellow";
                                                            if(key_exists($type, $control_values) && !is_array($control_values[$type]['profession_ready'])){
                                                                    $control_values[$type]['profession_ready'] = [$control_values[$type]['profession_ready']];
                                                                }
                                                            ?>
                                                            <select name="anketItems[<?php echo e($type); ?>][profession_ready][]" class="yellow"  id="text_<?php echo e($anketItems->first()->id); ?>_profession_ready_yellow" multiple="multiple">
                                                                <option value="3" <?php if(key_exists($type, $control_values) && in_array(3, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>неготовность к выбору профессии</option>
                                                                <option value="5" <?php if(key_exists($type, $control_values) && in_array(5, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>низкая готовность к выбору профессии</option>
                                                                <option value="7" <?php if(key_exists($type, $control_values) && in_array(7, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>достаточная готовность к выбору профессии</option>
                                                                <option value="10" <?php if(key_exists($type, $control_values) && in_array(10, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>высокая готовность к выбору профессии</option>
                                                            </select>

                                                        </td>

                                                        <td  style="background-color:#FF4F06">

                                                            <?php
                                                                $type="red";
                                                                if(key_exists($type, $control_values) && !is_array($control_values[$type]['profession_ready'])){
                                                                    $control_values[$type]['profession_ready'] = [$control_values[$type]['profession_ready']];
                                                                }
                                                            ?>
                                                            <select name="anketItems[<?php echo e($type); ?>][profession_ready][]" class="red" id="text_<?php echo e($anketItems->first()->id); ?>_profession_ready_red" multiple="multiple">
                                                                <option value="3" <?php if(key_exists($type, $control_values) && in_array(3, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>неготовность к выбору профессии</option>
                                                                <option value="5" <?php if(key_exists($type, $control_values) && in_array(5, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>низкая готовность к выбору профессии</option>
                                                                <option value="7" <?php if(key_exists($type, $control_values) && in_array(7, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>достаточная готовность к выбору профессии</option>
                                                                <option value="10" <?php if(key_exists($type, $control_values) && in_array(10, @$control_values[$type]['profession_ready'])): ?> <?php echo "selected";?> <?php endif; ?>>высокая готовность к выбору профессии</option>
                                                            </select>

                                                        </td>
                                                    </tr>



                                                    </tbody>


                                            </div>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        </table>
                        <div style="width:100%" align="right">
                            <table><tr><td>
                                        <a href="<?php echo e(route('user_profiles.edit',$userProfile->id)); ?>">
                                            <div style="border-radius:5px;padding:5px;background-color:#fcfef6;"><?php echo e(__(' На главную')); ?></div>
                                        </a>

                                    </td><td width="5"></td><td>


                                        <a href="<?php echo e(route('user_profiles.base_test_items',$userProfile->id)); ?>">
                                            <div style="border-radius:5px;padding:5px;background-color:#fcfef6"><?php echo e(__(' Следующий блок >')); ?></div>
                                        </a>

                                    </td>
                                </tr></table>
                        </div>


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
                    <br>


            </div>
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/admin/user_profiles/anket_items.blade.php ENDPATH**/ ?>