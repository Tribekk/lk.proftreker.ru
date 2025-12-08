<b>Объект деятельности</b>
<br>

<input type="checkbox" name="anketResults[object_action][human][<?php echo e($type); ?>]" value="1" id="human_green"

       <?php if(@$control_values['object_action']['human'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="human_green">Человек</label><br>


<input type="checkbox" name="anketResults[object_action][nature][<?php echo e($type); ?>]" value="1" id="nature_green"

       <?php if(@$control_values['object_action']['nature'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="nature_green">Природные ресурсы</label><br>


<input type="checkbox" name="anketResults[object_action][things][<?php echo e($type); ?>]" value="1" id="things_green"

       <?php if(@$control_values['object_action']['things'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="things_green">Изделия</label><br>



<input type="checkbox" name="anketResults[plants][phys][<?php echo e($type); ?>]" value="1" id="plants_green"

       <?php if(@$control_values['object_action']['plants'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="plants_green">Растения</label><br>





<input type="checkbox" name="anketResults[object_action][animals][<?php echo e($type); ?>]" value="1" id="animals_green"

       <?php if(@$control_values['object_action']['animals'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="animals_green">Животные</label><br>



<input type="checkbox" name="anketResults[object_action][foods][<?php echo e($type); ?>]" value="1" id="foods_green"

       <?php if(@$control_values['object_action']['foods'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="foods_green">Еда и лекарства</label><br>



<input type="checkbox" name="anketResults[object_action][isscuss][<?php echo e($type); ?>]" value="1" id="isscuss_green"

       <?php if(@$control_values['object_action']['isscuss'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="isscuss_green">Искусство</label><br>



<input type="checkbox" name="anketResults[object_action][tech][<?php echo e($type); ?>]" value="1" id="tech_green"

       <?php if(@$control_values['object_action']['tech'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="tech_green">Техника</label><br>



<input type="checkbox" name="anketResults[object_action][financial][<?php echo e($type); ?>]" value="1" id="financial_green"

       <?php if(@$control_values['object_action']['financial'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="financial_green">Финансы</label><br>




<input type="checkbox" name="anketResults[object_action][info][<?php echo e($type); ?>]" value="1" id="info_green"

       <?php if(@$control_values['object_action']['info'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="phys_tipag_green">Информация</label><br>
<Br>




<b>Вид деятельности</b><br>
<input type="checkbox" name="anketResults[type_action][uprav][<?php echo e($type); ?>]" value="1" id="uprav_green"

       <?php if(@$control_values['type_action']['uprav'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="uprav_green">Управление</label><br>



<input type="checkbox" name="anketResults[type_action][service][<?php echo e($type); ?>]" value="1" id="service_green"

           <?php if(@$control_values['type_action']['service'][$type]==1): ?>
           checked selected
        <?php endif; ?>

>
<label for="uprav_green">Обслуживание</label><br>




<input type="checkbox" name="anketResults[type_action][education][<?php echo e($type); ?>]" value="1" id="education_green"

       <?php if(@$control_values['type_action']['education'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="education_green">Образование</label><br>



<input type="checkbox" name="anketResults[type_action][health][<?php echo e($type); ?>]" value="1" id="health_green"

       <?php if(@$control_values['type_action']['health'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="health_green">Оздаровление</label><br>



<input type="checkbox" name="anketResults[type_action][creating][<?php echo e($type); ?>]" value="1" id="creating_green"

       <?php if(@$control_values['type_action']['creating'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="creating_green">Творчество</label><br>



<input type="checkbox" name="anketResults[type_action][zavod][<?php echo e($type); ?>]" value="1" id="zavod_green"

       <?php if(@$control_values['type_action']['zavod'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="zavod_green">Производство</label><br>



<input type="checkbox" name="anketResults[type_action][construction][<?php echo e($type); ?>]" value="1" id="construction_green"

       <?php if(@$control_values['type_action']['construction'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="construction_green">Конструирование</label><br>



<input type="checkbox" name="anketResults[type_action][research][<?php echo e($type); ?>]" value="1" id="research_green"

       <?php if(@$control_values['type_action']['research'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="construction_green">Исследование</label><br>



<input type="checkbox" name="anketResults[type_action][security][<?php echo e($type); ?>]" value="1" id="security_green"

       <?php if(@$control_values['type_action']['security'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="security_green">Защита</label><br>


<input type="checkbox" name="anketResults[type_action][control][<?php echo e($type); ?>]" value="1" id="control_green"

       <?php if(@$control_values['type_action']['control'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="control_green">Контроль</label><br>
<Br><?php /**PATH /var/www/proftracker/resources/views/admin/user_profiles/include/anket_results_alt_component.blade.php ENDPATH**/ ?>