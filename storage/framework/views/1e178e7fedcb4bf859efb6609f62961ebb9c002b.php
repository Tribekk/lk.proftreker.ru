<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Создание новых проектов']); ?>
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
    <div class="d-flex flex-column-fluid">
        <div class="container">

  <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card::class, []); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title'); ?> <?php if(($products->org) == 0): ?>
                Редактировать проект № <?php echo e($products->id); ?>

                <?php else: ?>
                Редактировать проект № <?php echo e($products->id); ?> для <?php echo e($ExternalOrgunit->find($products->org)->where('id', $products->org)->value('short_title')); ?>

                <?php endif; ?>
             <?php $__env->endSlot(); ?>
             
             <?php if (isset($component)) { $__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\Status::class, []); ?>
<?php $component->withName('tables.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8)): ?>
<?php $component = $__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8; ?>
<?php unset($__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
         <?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>            <div class="card card-custom gutter-b">

        </div>


    </div>
</div>
<div class="d-flex flex-column-fluid">
<div class="container">
     
     
    <form action="<?php echo e(route('Product.edit_class', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
     
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Локация: </strong> <br>
                    <?php if(strpos($products->loc, ',')): ?>
                    <?php $__currentLoopData = json_decode($products->loc); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <b><?php echo e($city->first()->where('code', $Sch)->value('name')); ?> <?php echo e($city->first()->where('code', $Sch)->value('socr')); ?></b> 

                        <?php if($products->sity == null): ?> Вы выбрали все города из данной локации <?php endif; ?>
 
                        <?php if(is_array($products->sity)): ?>
                        <?php $__currentLoopData = ($products->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <?php if(substr($Sch2, 0, 2)   ==   substr($Sch, 0, 2) ): ?>
                    <?php echo e($city->first()->where('code', $Sch2)->value('socr')); ?>. <?php echo e($city->first()->where('code', $Sch2)->value('name')); ?>  <br>

                    <select type="text" name="scul[]" class="form-control" placeholder=" "  value=" " multiple size="5" > 
                        <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cit->local == $Sch2): ?> 
                                <option value="<?php echo e($cit->id); ?>">
                                    <?php echo e($cit->short_title); ?>  
                                </option> 
                        <?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select> 
                    <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>  
                    <?php $__currentLoopData = json_decode($products->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <?php if(substr($Sch2, 0, 2)   ==   substr($Sch, 0, 2) ): ?>
                    <?php echo e($city->first()->where('code', $Sch2)->value('socr')); ?>. <?php echo e($city->first()->where('code', $Sch2)->value('name')); ?>  <br>

                    <select type="text" name="scul[]" class="form-control" placeholder=" "  value=" " multiple size="5" > 
                        <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cit->local == $Sch2): ?> 
                                <option value="<?php echo e($cit->id); ?>">
                                    <?php echo e($cit->short_title); ?>  
                                </option> 
                        <?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
 
                     
                 
                        <?php else: ?>
                        <b><?php echo e($city->first()->where('code', str_replace(['"', '[', ']'], "",$products->loc))->value('name')); ?> <?php echo e($city->first()->where('code', str_replace(['"', '[', ']'], "",$products->loc))->value('socr')); ?></b> 

                        <?php if($products->sity == null): ?> Вы выбрали все города из данной локации <?php endif; ?>
 
                        <?php if(is_array($products->sity)): ?>
                        <?php $__currentLoopData = ($products->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <?php if(substr($Sch2, 0, 2)   ==   substr(str_replace(['"', '[', ']'], "", $products->loc), 0, 2) ): ?>
                    <?php echo e($city->first()->where('code', $Sch2)->value('socr')); ?>. <?php echo e($city->first()->where('code', $Sch2)->value('name')); ?>  <br>

                    <select type="text" name="scul[]" class="form-control" placeholder=" "  value=" " multiple size="5" > 
                        <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cit->local == $Sch2): ?> 
                                <option value="<?php echo e($cit->id); ?>">
                                    <?php echo e($cit->short_title); ?>  
                                </option> 
                        <?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select> 
                    <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>

                         
                        <?php $__currentLoopData = json_decode($products->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <?php if(substr($Sch2, 0, 2)   ==   substr(str_replace(['"', '[', ']'], "", $products->loc), 0, 2) ): ?>
                    <?php echo e($city->first()->where('code', $Sch2)->value('socr')); ?>. <?php echo e($city->first()->where('code', $Sch2)->value('name')); ?>  <br>

                    <select type="text" name="scul[]" class="form-control" placeholder=" "  value=" " multiple size="5" > 
                        <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cit->local == $Sch2): ?> 
                                <option value="<?php echo e($cit->id); ?>">
                                    <?php echo e($cit->short_title); ?>  
                                </option> 
                        <?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select> 
                    <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php endif; ?>    
                    </div>
                </div>      
                         

                 
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                
                <button type="submit" class="btn btn-success px-4 py-2 my-1">Сохранить и выбрать классы</button>
                 
                 <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('Product.edit_id', $product->id)).'','title' => ''.e(__('Вернуться к редактированию проекта')).'']); ?>
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

    </form>
</div> 
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/admin/products/create/edit_schul.blade.php ENDPATH**/ ?>