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
             <?php $__env->slot('title'); ?> <?php echo e(__('Проекты')); ?> <?php $__env->endSlot(); ?>
             <?php $__env->slot('toolbar'); ?> 
                 <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('product.storeLoc')).'','title' => ''.e(__('Новые Проекты')).'','icon' => 'la-plus']); ?>
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

            <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">№</th>

            <th scope="col">Название проекта (организация)</th>
            <th scope="col">Локации</th>
            <th scope="col">Искомые профили (потребности)</th> 
            <th scope="col">Учебный год (сроки реализации)</th>
            <!---
            <th scope="col">Количество школ</th>
            <th scope="col">Количество классов</th>

            <th scope="col">Результаты отбора (воронка и дашборд по ключевым показателям)</th>
             --->
            <th scope="col">Управление</th>

        </tr>
        </thead>
        <tbody> 
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
            <td>
            <a href="<?php echo e(route('products.edit', $item->id)); ?>" class="font-weight-bolder link"><?php echo e($item->id); ?>

            </a>
            </td>


            <td><?php if(($item->org) == 0): ?>   
                <a href=" " class="font-weight-bolder link"> Без названия </a>
                
               
                <?php else: ?> 
                <a href="<?php echo e(route('admin.orgunits.edit', $item->org)); ?>" class="font-weight-bolder link"> 
                    <?php echo e($ExternalOrgunit->find($item->org)->where('id', $item->org)->value('short_title')); ?>

                </a>
                <?php endif; ?>
            </td>
            <td>
                <?php if(strpos($item->loc, ',')): ?> 
                    <?php $__currentLoopData = json_decode($item->loc); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <strong><?php echo e($title->where('code', $sc)->value('name')); ?> <?php echo e($title->where('code', $sc)->value('socr')); ?> </strong><br> 
                        <?php if(strpos($item->sity, ',')): ?> 
                            <?php $__currentLoopData = json_decode($item->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <?php if( substr($sc, 0, 2)   ==   substr($Sch, 0, 2)  ): ?>
                <?php echo e($title->where('code', $Sch)->value('name')); ?> <?php echo e($title->where('code', $Sch)->value('socr')); ?><br> 
                <?php endif; ?>            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        <?php else: ?>
                        <?php if( $item->sity == null): ?> <br> 
                        
                       
                        
                        Вы выбрали все города в этой локации <br> <?php endif; ?> 
                <?php echo e($title->where('code', str_replace(['"', '[', ']'], "", $item->sity))->value('name')); ?> 
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    <?php else: ?> 
                    <b><?php echo e($title->where('code', json_decode($item->loc))->value('name')); ?> <?php echo e($title->first()->where('code', json_decode($item->loc))->value('socr')); ?>  </b><br>
                <?php endif; ?>
                 
                <?php if( $item->sity == null): ?> <br> Вы выбрали все города в этой локации <?php endif; ?> 
                <?php echo e($title->where('code', json_decode($item->sity))->value('name')); ?>  
                 
            </td>
            <td>
                <a href=" " class="font-weight-bolder link">
                    <?php echo e($item->napr); ?> 
                </a>
                <?php if($item->potr == null): ?> <?php else: ?>  - <?php echo e($item->potr); ?> чел. <?php endif; ?>
            </td>
        
            <td>
                <?php echo e($item->god); ?>

            </td>

        <!---
            <td <?php echo e($dol=collect()); ?>>
                <?php if(  $item->scul == null ): ?> <b>Вы выбрали все школы в этой локации </b><br>общее число школ: 
<?php if(json_decode($item->sity)): ?>
<?php $__currentLoopData = json_decode($item->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $School->first()->where('local', $Sch2)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <a <?php echo e($dol->push($Sch->id)); ?>></a>   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
<?php echo e(count($dol->toArray())); ?> 
<?php endif; ?>
<?php if($item->sity == null): ?>
<?php if(strpos($item->loc, ',')): ?>
                <?php $__currentLoopData = json_decode($item->loc); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
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
                 <?php if( substr($cit->local, 0, 2) ==  substr(str_replace(['"', '[', ']'], "", $item->loc), 0, 2)): ?> 
                 <a  <?php echo e($dol->push($cit->id)); ?> > </a> 
                    
                 <?php endif; ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e(count($dol->toArray())); ?> 
<?php endif; ?> 

<?php endif; ?>
                
                
                <?php else: ?> <?php echo e(count(json_decode($item->scul))); ?>

        
                 
                <?php endif; ?>
            </td>
            <td <?php echo e($dil = collect()); ?>>  
                <?php if($item->name == null ): ?>
                <b>Вы выбрали все классы: </b><br>
                <?php if(  $item->scul): ?> 
                 
                <?php $__currentLoopData = json_decode($item->scul); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <?php $__currentLoopData = $classes->first()->where('school_id', $sc)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a  <?php echo e($dil->push($sc2->number)); ?> > </a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
              <a href="">  7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                 
                
                <?php else: ?>  
                <?php if( $item->sity): ?>
                <?php $__currentLoopData = json_decode($item->sity); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($cit->local == $sc3): ?> 
                <?php $__currentLoopData = $classes->first()->where('school_id', $cit->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a  <?php echo e($dil->push($sc2->number)); ?> > </a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                <?php endif; ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <a href="">7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br></a><?php endif; ?>

                <?php endif; ?> 
                <?php endif; ?> 
                <?php endif; ?> 

                <?php if($item->scul == null and $item->sity == null ): ?>
                <?php if(strpos($item->loc, ',')): ?>
                <?php $__currentLoopData = json_decode($item->loc); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
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
                <a href="">7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                
                <?php else: ?>   
                
                <?php $__currentLoopData = $School; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if( substr($cit->local, 0, 2) ==  substr(str_replace(['"', '[', ']'], "", $item->loc), 0, 2)): ?> 
                 <?php $__currentLoopData = $classes->first()->where('school_id', $cit->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc0): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a  <?php echo e($dil->push($sc0->number)); ?> > </a> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                 <?php endif; ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="">7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['7']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['8']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['9']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['10']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->filter()->toArray())['11']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                 
                  


                <?php endif; ?>     
                <?php endif; ?>



                <?php if(strpos($item->name, ',')): ?> 
                <?php $__currentLoopData = json_decode($item->name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(count(json_decode($item->name)) === count($dil->push($classes->first()->where('id', $sc)->value('number'))->collect())): ?>
                  
                <a href="">7 классов:
                <?php if($dil->contains(7)): ?> <?php echo e(array_count_values($dil->toArray())['7']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">8 классов: 
                <?php if($dil->contains(8)): ?> <?php echo e(array_count_values($dil->toArray())['8']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">9 классов:
                <?php if($dil->contains(9)): ?> <?php echo e(array_count_values($dil->toArray())['9']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">10 классов:
                <?php if($dil->contains(10)): ?> <?php echo e(array_count_values($dil->toArray())['10']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <a href="">11 классов:
                <?php if($dil->contains(11)): ?> <?php echo e(array_count_values($dil->toArray())['11']); ?><br><?php else: ?> 0<br></a><?php endif; ?>
                <?php endif; ?>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                <?php else: ?>  
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $item->name))->value('number') == 7): ?> <a href="">7 классов: 1 </a><?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $item->name))->value('number') == 8): ?> <a href="">8 классов: 1 </a><?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $item->name))->value('number') == 9): ?> <a href="">9 классов: 1 </a><?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $item->name))->value('number') == 10): ?> <a href="">10 классов: 1 <?php endif; ?> 
                <?php if($classes->first()->where('id', str_replace(['"', '[', ']'], "", $item->name))->value('number') == 11): ?> <a href="">11 классов: 1 </a><?php endif; ?> 
                  
                <?php endif; ?>
                 
                 
            </td>
            <td>
                <a href=" " class="font-weight-bolder link">
                     
                </a>
            </td>
            --->
            <td>
                <a href="<?php echo e(route('products.edit',$item->id)); ?>"><button type="button" class="btn-outline-success" style="border-radius: 5px 5px 5px 5px; width:300px;height:40px;margin-top:5px"><?php echo e(__('Редактирование')); ?></button></a><br>

            </td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
     <?php if (isset($component)) { $__componentOriginalfcca607ad7936d2347c3be99680813ee86b63c10 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\Pagination::class, ['items' => $products]); ?>
<?php $component->withName('tables.pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalfcca607ad7936d2347c3be99680813ee86b63c10)): ?>
<?php $component = $__componentOriginalfcca607ad7936d2347c3be99680813ee86b63c10; ?>
<?php unset($__componentOriginalfcca607ad7936d2347c3be99680813ee86b63c10); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>     <?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>            
    
    <div class="card card-custom gutter-b">
 
        
    </div>


        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/admin/products/index.blade.php ENDPATH**/ ?>