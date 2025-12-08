<input type="checkbox" name="baseTestItems[tipag][phys][<?php echo e($type); ?>]" value="1" id="phys_tipag_green"

       <?php if(@$control_values['tipag']['phys'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="phys_tipag_green">Физико-математический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
        <input type="number" min="0" max="100"
               name="baseTestItems[tipag][phys][start][<?php echo e($type); ?>]"
                value="<?php echo e(@$control_values['tipag']['phys'][start][$type]); ?>" size="5">
       по

        <input  type="number" min="0" max="100"
                name="baseTestItems[tipag][phys][end][<?php echo e($type); ?>]"
                value="<?php echo e(@$control_values['tipag']['phys'][end][$type]); ?>" size="5">

<br>


<input type="checkbox" name="baseTestItems[tipag][himbio][<?php echo e($type); ?>]" value="1" id="himbio_green"

       <?php if(@$control_values['tipag']['himbio'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="himbio_green"> Химико-биологический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][himbio][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['himbio'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][himbio][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['himbio'][end][$type]); ?>" size="5">

<br>



<input type="checkbox" name="baseTestItems[tipag][digital][<?php echo e($type); ?>]" value="1" id="digital_green"

       <?php if(@$control_values['tipag']['digital'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="digital_green">  Цифровой</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][digital][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['digital'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][digital][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['digital'][end][$type]); ?>" size="5">

<br>





<input type="checkbox" name="baseTestItems[tipag][tehno][<?php echo e($type); ?>]" value="1" id="tehno_green"

       <?php if(@$control_values['tipag']['tehno'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="tehno_green"> Технический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][tehno][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['tehno'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][tehno][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['tehno'][end][$type]); ?>" size="5">

<br>





<input type="checkbox" name="baseTestItems[tipag][geograph][<?php echo e($type); ?>]" value="1" id="geograph_green"

       <?php if(@$control_values['tipag']['geograph'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="geograph_green"> Геолого-географический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][geograph][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['geograph'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][geograph][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['geograph'][end][$type]); ?>" size="5">

<br>





<input type="checkbox" name="baseTestItems[tipag][filolog][<?php echo e($type); ?>]" value="1" id="filolog_green"

       <?php if(@$control_values['tipag']['filolog'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="filolog_green"> Филологический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][filolog][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['filolog'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][filolog][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['filolog'][end][$type]); ?>" size="5">

<br>





<input type="checkbox" name="baseTestItems[tipag][socpol][<?php echo e($type); ?>]" value="1" id="socpol_green"

       <?php if(@$control_values['tipag']['socpol'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="socpol_green"> Социально-политический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][socpol][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['socpol'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][socpol][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['socpol'][end][$type]); ?>" size="5">

<br>





<input type="checkbox" name="baseTestItems[tipag][gumanit][<?php echo e($type); ?>]" value="1" id="gumanit_green"

       <?php if(@$control_values['tipag']['gumanit'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="gumanit_green">Гуманитарный</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][gumanit][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['gumanit'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][gumanit][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['gumanit'][end][$type]); ?>" size="5">

<br>






<input type="checkbox" name="baseTestItems[tipag][soceconom][<?php echo e($type); ?>]" value="1" id="soceconom_green"

       <?php if(@$control_values['tipag']['soceconom'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="soceconom_green"> Социально-экономический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][soceconom][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['soceconom'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][soceconom][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['soceconom'][end][$type]); ?>" size="5">

<br>






<input type="checkbox" name="baseTestItems[tipag][hudestet][<?php echo e($type); ?>]" value="1" id="hudestet_green"

       <?php if(@$control_values['tipag']['hudestet'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="hudestet_green"> Художественно-эстетический</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][hudestet][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['hudestet'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][hudestet][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['hudestet'][end][$type]); ?>" size="5">

<br>







<input type="checkbox" name="baseTestItems[tipag][army_sport][<?php echo e($type); ?>]" value="1" id="army_sport_green"

       <?php if(@$control_values['tipag']['army_sport'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
<label for="army_sport_green"> Оборонно-спортивный</label><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][army_sport][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['army_sport'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
       name="baseTestItems[tipag][army_sport][end][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['tipag']['army_sport'][end][$type]); ?>" size="5">

<br>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/admin/user_profiles/include/base_test_results_tipag_extended.blade.php ENDPATH**/ ?>