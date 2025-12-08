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
             <?php $__env->slot('title'); ?> <?php if(($product->org) == 0): ?>
                Редактировать проект № <?php echo e($product->id); ?>

                <?php else: ?>
                Редактировать проект № <?php echo e($product->id); ?> для <?php echo e($ExternalOrgunit->find($product->org)->where('id', $product->org)->value('short_title')); ?>

                <?php endif; ?>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('toolbar'); ?> 
                <div x-data=" ">
                    <div class="card card-custom">
                        <!--<div class="btn btn-success px-4 py-2 my-1" data-target="#classModal" data-toggle="modal">
                            <i class="la la-plus"></i> Удалить проект
                        </div>-->
                
                        <div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-body">
                                            <h4 class="font-weight-bold font-size-h3 text-primary">Удалить проект?</h4>
                                             
                                            <div>
                                                 <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('product.del', $product->id)).'','title' => ''.e(__('Удалить проект')).'','icon' => 'la-plus']); ?>
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
                                                    
                                                <button type="button" class="btn btn-light-info font-weight-bold" data-dismiss="modal">Отмена</button>
                                            </div>  
                                        </div>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                
                         
                    </div>
                </div>


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
     
     
    <form action="<?php echo e(route('Product.edit_sity', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
     

        <div class="row">
            <!--<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id:</strong>
                     <?php if (isset($component)) { $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\InputTextV::class, ['name' => 'id','title' => ' ','placeholder' => ''.e($product->id).'']); ?>
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
                     
                </div>
            </div>-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Локация:</strong> 
<br>
                    <?php if(strpos($product->loc, ',')): ?> 
                    <?php $__currentLoopData = json_decode($product->loc); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <strong><?php echo e($title->where('code', $sc)->value('name')); ?> <?php echo e($title->where('code', $sc)->value('socr')); ?> </strong><br> 
                        <?php if(strpos($product->sity, ',')): ?> 
                            <?php $__currentLoopData = json_decode($product->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <?php if( substr($sc, 0, 2)   ==   substr($Sch, 0, 2)  ): ?>
                <?php echo e($title->where('code', $Sch)->value('name')); ?> <?php echo e($title->where('code', $Sch)->value('socr')); ?><br> 
                <?php endif; ?>            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        <?php else: ?>
                        <?php if( $product->sity == null): ?> <br> 
                        
                       
                        
                        Вы выбрали все города в этой локации <br> <?php endif; ?> 
                <?php echo e($title->where('code', str_replace(['"', '[', ']'], "", $product->sity))->value('name')); ?> 
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    <?php else: ?> 
                    <b><?php echo e($title->where('code', json_decode($product->loc))->value('name')); ?> <?php echo e($title->first()->where('code', json_decode($product->loc))->value('socr')); ?>  </b><br>
                <?php endif; ?>
                 
                <?php if( $product->sity == null): ?> <br> Вы выбрали все города в этой локации <?php endif; ?> 
                <?php echo e($title->where('code', json_decode($product->sity))->value('name')); ?> 
                </div>
            </div> 
            
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Выберите новый регион:</strong>
                     <?php if (isset($component)) { $__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\FilterInputs\Select2::class, ['name' => 'loc[]','id' => 'loc','multiple' => true,'placeholder' => ''.e(__('Выберите новый регион')).'','label' => '','event' => 'filterByParent','indexUrl' => ''.e(route('kladr.regions' )).'','showUrl' => '/kladr/regions','value' => ''.e(request()->region).'']); ?>
<?php $component->withName('tables.filter-inputs.select2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774)): ?>
<?php $component = $__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774; ?>
<?php unset($__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                
                                 
                     
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success px-4 py-2 my-1">Сохранить и перейти к городам</button>
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

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/admin/products/create/edit_loc.blade.php ENDPATH**/ ?>