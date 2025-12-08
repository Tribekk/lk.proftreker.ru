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
                        <div class="btn btn-success px-4 py-2 my-1" data-target="#classModal" data-toggle="modal">
                            <i class="la la-plus"></i> Удалить проект
                        </div>
                
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
     
    <form action="<?php echo e(route('product.update', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
     

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Название проекта (организация):
                        <?php if(($product->org) == 0): ?>
                            Без названия
                        <?php else: ?>
                            <?php echo e($ExternalOrgunit->find($product->org)->where('id', $product->org)->value('short_title')); ?>

                        <?php endif; ?> 
                    </strong> 
                      
                    <?php if(($product->org) == 0): ?>  
                     <?php if (isset($component)) { $__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\FilterInputs\Select2::class, ['name' => 'org','id' => 'org','multiple' => true,'label' => ' ','placeholder' => ''.e(__('Без названия')).'','event' => 'filterByParent','indexUrl' => ''.e(route('admin.orgunits.view')).'','showUrl' => '/admin/orgunits','value' => ''.e(request()->parent_id).'']); ?>
<?php $component->withName('tables.filter-inputs.select2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['required' => true]); ?>
                     <?php if (isset($__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774)): ?>
<?php $component = $__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774; ?>
<?php unset($__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>  
                                            
                    <?php else: ?>
                     <?php if (isset($component)) { $__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\FilterInputs\Select2::class, ['name' => 'org','id' => 'org','multiple' => true,'label' => ' ','placeholder' => ''.e($ExternalOrgunit->find($product->org)->where('id', $product->org)->value('short_title')).'','event' => 'filterByParent','indexUrl' => ''.e(route('admin.orgunits.view')).'','showUrl' => '/admin/orgunits','value' => ''.e(request()->parent_id).'']); ?>
<?php $component->withName('tables.filter-inputs.select2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['required' => true]); ?>
                     <?php if (isset($__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774)): ?>
<?php $component = $__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774; ?>
<?php unset($__componentOriginal3358ea642e1c3f0b1e96ca690b2e1c3c59b4d774); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>  
                     
                    <?php endif; ?> 
                            
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Профиль: <?php echo e($product->napr); ?></strong>
                     <?php if (isset($component)) { $__componentOriginal962f3db9c8a1ce5212f91dd0c65c51e1ccccc36d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\Select2::class, ['id' => 'activity_kind_id','name' => 'activity_kind_id[]','required' => true,'title' => 'Профиль','placeholder' => 'Выбор профиля','event' => 'setActivityKindId','multiple' => true,'value' => '','url' => ''.e(route('admin.orgunits.activity_kinds.view')).'','selectedUrl' => '/admin/orgunits/activity_kinds']); ?>
<?php $component->withName('inputs.select2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal962f3db9c8a1ce5212f91dd0c65c51e1ccccc36d)): ?>
<?php $component = $__componentOriginal962f3db9c8a1ce5212f91dd0c65c51e1ccccc36d; ?>
<?php unset($__componentOriginal962f3db9c8a1ce5212f91dd0c65c51e1ccccc36d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Потребность
                        (заказ, целевиков):</strong>
                    <input type="text" name="potr" class="form-control" placeholder="<?php echo e($product->potr); ?>"
                           value="<?php echo e($product->potr); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Учебный год
                        (сроки реализации):</strong>
                    <input type="text" name="title" class="form-control" placeholder="<?php echo e($product->god); ?>"
                           value="<?php echo e($product->god); ?>">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Локация <a href="<?php echo e(route('Product.edit_loc', $product->id)); ?>">(изменить)</a>:</strong> 
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
            <div <?php echo e($dol=collect()); ?>>
                <?php if(  $product->scul == null ): ?> <b>Вы выбрали все школы в этой локации <a href="<?php echo e(route('Product.edit_schul2', $product->id)); ?>">(изменить)</a></b><br>общее число школ: 
<?php if(json_decode($product->sity)): ?>
<?php $__currentLoopData = json_decode($product->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $School->first()->where('local', $Sch2)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <a <?php echo e($dol->push($Sch->id)); ?>></a>   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
<?php echo e(count($dol->toArray())); ?> 
<?php endif; ?>
<?php if($product->sity == null): ?>
<?php if(strpos($product->loc, ',')): ?>
                <?php $__currentLoopData = json_decode($product->loc); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                 <?php $__currentLoopData = $title->first()->where('socr',  'г')->orWhere('socr',  'п')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if( substr($cit2->code, 0, 2)   ==   substr($sc4, 0, 2)  ): ?>
                 <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if($cit->local == $cit2->code): ?> 
                  <a  <?php echo e($dol->push($cit->id)); ?> > </a> 
                  
                 <?php endif; ?> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                 <?php endif; ?> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php echo e(count($dol->toArray())); ?> 
                <?php else: ?>   
                
                <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if( substr($cit->local, 0, 2) ==  substr(str_replace(['"', '[', ']'], "", $product->loc), 0, 2)): ?> 
                 <a  <?php echo e($dol->push($cit->id)); ?> > </a> 
                    
                 <?php endif; ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e(count($dol->toArray())); ?> 
<?php endif; ?> 

<?php endif; ?> 
                
                <?php else: ?> <strong>Число школ <a href="<?php echo e(route('Product.edit_schul2', $product->id)); ?>">(изменить)</a>:</strong> <?php echo e(count(json_decode($product->scul))); ?><br>
                <?php $__currentLoopData = json_decode($product->scul); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($sc); ?><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                 
                <?php endif; ?>
            </div> 
        </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
            <div <?php echo e($dil = collect()); ?>>  
                <?php if($product->name == null ): ?>
                <b>Вы выбрали все классы <a href="<?php echo e(route('Product.edit_class2', $product->id)); ?>">(изменить): </a></b><br>
                <?php if(  $product->scul): ?> 
                 
                <?php $__currentLoopData = json_decode($product->scul); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <?php $__currentLoopData = $classes->first()->where('school_id', $sc)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a  <?php echo e($dil->push($sc2->number)); ?> > </a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
            <a href="<?php echo e(route('Product.edit_class2', $product->id)); ?>">(изменить):  7 классов:
                7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br> <?php endif; ?>
                8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br> <?php endif; ?>
                9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br> <?php endif; ?>
                10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br> <?php endif; ?>
                11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br> <?php endif; ?>
            </a>  
                
                <?php else: ?>  
                <?php if( $product->sity): ?>
                <?php $__currentLoopData = json_decode($product->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($cit->local == $sc3): ?> 
                <?php $__currentLoopData = $classes->first()->where('school_id', $cit->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a  <?php echo e($dil->push($sc2->number)); ?> > </a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                <?php endif; ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <a href="<?php echo e(route('Product.edit_class', $product->id)); ?>">(изменить):  7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br><?php endif; ?>
                8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br><?php endif; ?>
                9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br><?php endif; ?>
                10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br><?php endif; ?>
                11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br><?php endif; ?>
            </a>
                <?php endif; ?> 
                <?php endif; ?> 
                <?php endif; ?> 

                <?php if($product->scul == null and $product->sity == null ): ?>
                <?php if(strpos($product->loc, ',')): ?>
                <?php $__currentLoopData = json_decode($product->loc); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                 <?php $__currentLoopData = $title->first()->where('socr',  'г')->orWhere('socr',  'п')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if( substr($cit2->code, 0, 2)   ==   substr($sc4, 0, 2)  ): ?>
                 <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if($cit->local == $cit2->code): ?> 
                 <?php $__currentLoopData = $classes->first()->where('school_id', $cit->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a  <?php echo e($dil->push($sc2->number)); ?> > </a> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                 <?php endif; ?> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                 <?php endif; ?> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('Product.edit_class2', $product->id)); ?>">(изменить):  7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br><?php endif; ?>
                8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br><?php endif; ?>
                9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br><?php endif; ?>
                10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br><?php endif; ?>
                11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br><?php endif; ?>
            </a>
                
                <?php else: ?>   
                
                <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if( substr($cit->local, 0, 2) ==  substr(str_replace(['"', '[', ']'], "", $product->loc), 0, 2)): ?> 
                 <?php $__currentLoopData = $classes->first()->where('school_id', $cit->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc0): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a  <?php echo e($dil->push($sc0->number)); ?> > </a> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                 <?php endif; ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('Product.edit_class2', $product->id)); ?>">(изменить):  
                7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br><?php endif; ?>
                8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br><?php endif; ?>
                9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br><?php endif; ?>
                10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br><?php endif; ?>
                11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br><?php endif; ?>
            </a> 
                  


                <?php endif; ?>     
                <?php endif; ?>



                <?php if(is_array($product->name)): ?> 
                <?php $__currentLoopData = ($product->name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(count( ($product->name)) === count($dil->push($classes->first()->where('id', $sc)->value('number'))->collect())): ?>
                  
            <a href="<?php echo e(route('Product.edit_class2', $product->id)); ?>">(изменить):
                7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->toArray())['7']); ?><br><?php else: ?> 0<br><?php endif; ?>
                8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->toArray())['8']); ?><br><?php else: ?> 0<br><?php endif; ?>
                9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->toArray())['9']); ?><br><?php else: ?> 0<br><?php endif; ?>
                10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->toArray())['10']); ?><br><?php else: ?> 0<br><?php endif; ?>
                11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->toArray())['11']); ?><br><?php else: ?> 0<br><?php endif; ?>
            </a>
                <?php endif; ?>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                <?php else: ?> 
            <strong>Классы</strong> <a href="<?php echo e(route('Product.edit_class2', $product->id)); ?>">(изменить):<br> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $product->name))->value('number') == 7): ?> 7 классов: 1 <?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $product->name))->value('number') == 8): ?> 8 классов: 1 <?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $product->name))->value('number') == 9): ?> 9 классов: 1 <?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $product->name))->value('number') == 10): ?> 10 классов: 1 <?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $product->name))->value('number') == 11): ?> 11 классов: 1 <?php endif; ?> 
            </a>      
                <?php endif; ?>
                 
                 
            </div></div>
        </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success px-4 py-2 my-1">Сохранить изменения</button> <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('products.index')).'','title' => ''.e(__('Вернуться к списку проектов')).'']); ?>
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

<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/admin/products/edit.blade.php ENDPATH**/ ?>