<table>
    <tr><td>Интроверсия</td><td width="5"></td><td>
            Экстраверсия
        </td></tr>

    <tr><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[personal_characters][introversion][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['personal_characters']['introversion'][$type]); ?>" size="5">
        </td><td width="5"></td><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[personal_characters][extraversion][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['personal_characters']['extraversion'][$type]); ?>" size="5">
        </td></tr>

</table>
<br>


<table>
<tr><td>Эмоциональная устойчивость</td><td width="5"></td><td>
        Тревожность
    </td></tr>

<tr><td>
        <input type="number" min="0" max="10"
               name="baseTestItems[emotional_stability][stable][<?php echo e($type); ?>]"
               value="<?php echo e(@$control_values['emotional_stability']['stable'][$type]); ?>" size="5">
    </td><td width="5"></td><td>
        <input type="number" min="0" max="10"
               name="baseTestItems[emotional_stability][warning][<?php echo e($type); ?>]"
               value="<?php echo e(@$control_values['emotional_stability']['warning'][$type]); ?>" size="5">
    </td></tr>

</table>
<br>


<table>
    <tr><td>Практичность</td><td width="5"></td><td>
            Открытость
        </td></tr>

    <tr><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[practional][pract][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['practional']['pract'][$type]); ?>" size="5">
        </td><td width="5"></td><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[practional][open][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['practional']['open'][$type]); ?>" size="5">
        </td></tr>

</table>
<br>


<table>
    <tr><td>Несобранность</td><td width="5"></td><td>
            Сознательность
        </td></tr>

    <tr><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[order_level][no_order][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['order_level']['no_order'][$type]); ?>" size="5">
        </td><td width="5"></td><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[order_level][soznat][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['order_level']['soznat'][$type]); ?>" size="5">
        </td></tr>

</table>
<br>



<table>
    <tr><td>Обособленность</td><td width="5"></td><td>
            Доброжелательность
        </td></tr>

    <tr><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[soc_position][obosobl][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['soc_position']['obosobl'][$type]); ?>" size="5">
        </td><td width="5"></td><td>
            <input type="number" min="0" max="10"
                   name="baseTestItems[soc_position][dobro][<?php echo e($type); ?>]"
                   value="<?php echo e(@$control_values['soc_position']['dobro'][$type]); ?>" size="5">
        </td></tr>

</table>
<br><?php /**PATH /var/www/proftracker/resources/views/admin/user_profiles/include/base_test_personal_characters.blade.php ENDPATH**/ ?>