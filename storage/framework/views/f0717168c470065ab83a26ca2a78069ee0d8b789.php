<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][phys][<?php echo e($type); ?>]" value="1" id="phys_prof_interest_green"

       <?php if(@$control_values['prof_interest']['phys'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
        </td><td>

<label for="phys_prof_interest_green">Физика, математика, инноватика</label>
        </td></tr></table>

            <br>

&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input type="number" min="0" max="100"
       name="baseTestItems[prof_interest][phys][start][<?php echo e($type); ?>]"
       value="<?php echo e(@$control_values['prof_interest']['phys'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][phys][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['phys'][end][$type]); ?>" size="5">

<br>
<br>


<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][himbio][<?php echo e($type); ?>]" value="1" id="himbio_green"

       <?php if(@$control_values['prof_interest']['himbio'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>
        </td><td>
<label for="himbio_green"> Химия и биология</label>
        </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][himbio][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['himbio'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][himbio][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['himbio'][end][$type]); ?>" size="5">

<br>
<br>


<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][digital][<?php echo e($type); ?>]" value="1" id="digital_green"

       <?php if(@$control_values['prof_interest']['digital'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="digital_green">   Цифровые и информационные технологии</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][digital][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['digital'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][digital][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['digital'][end][$type]); ?>" size="5">

<br>
<br>




            <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][tehno][<?php echo e($type); ?>]" value="1" id="tehno_green"

       <?php if(@$control_values['prof_interest']['tehno'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="tehno_green"> Техника, механизмы и конструирование</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][tehno][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['tehno'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][tehno][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['tehno'][end][$type]); ?>" size="5">

<br>
<br>




                        <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][geograph][<?php echo e($type); ?>]" value="1" id="geograph_green"

       <?php if(@$control_values['prof_interest']['geograph'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="geograph_green"> Геология и география</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][geograph][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['geograph'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][geograph][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['geograph'][end][$type]); ?>" size="5">

<br>
<br>




                                    <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][filolog][<?php echo e($type); ?>]" value="1" id="filolog_green"

       <?php if(@$control_values['prof_interest']['filolog'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="filolog_green"> Языки и медиа</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][filolog][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['filolog'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][filolog][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['filolog'][end][$type]); ?>" size="5">

<br>
<br>




                                                <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][socpol][<?php echo e($type); ?>]" value="1" id="socpol_green"

       <?php if(@$control_values['prof_interest']['socpol'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="socpol_green"> История и политика</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][socpol][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['socpol'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][socpol][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['socpol'][end][$type]); ?>" size="5">

<br>
<br>




<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][gumanit][<?php echo e($type); ?>]" value="1" id="gumanit_green"

       <?php if(@$control_values['prof_interest']['gumanit'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="gumanit_green">Гуманитарные науки и медицина </label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][gumanit][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['gumanit'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][gumanit][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['gumanit'][end][$type]); ?>" size="5">

<br>
<br>





 <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][soceconom][<?php echo e($type); ?>]" value="1" id="soceconom_green"

       <?php if(@$control_values['prof_interest']['soceconom'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="soceconom_green"> Предпринимательство и управление</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][soceconom][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['soceconom'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][soceconom][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['soceconom'][end][$type]); ?>" size="5">

<br>
<br>




<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][hudestet][<?php echo e($type); ?>]" value="1" id="hudestet_green"

       <?php if(@$control_values['prof_interest']['hudestet'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="hudestet_green"> Творчество и искусство </label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][hudestet][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['hudestet'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][hudestet][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['hudestet'][end][$type]); ?>" size="5">

<br>
<br>






 <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][army_sport][<?php echo e($type); ?>]" value="1" id="army_sport_green"

       <?php if(@$control_values['prof_interest']['army_sport'][$type]==1): ?>
       checked selected
        <?php endif; ?>

>  </td><td>
<label for="army_sport_green">  Спорт и военное дело</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][army_sport][start][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['army_sport'][start][$type]); ?>" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][army_sport][end][<?php echo e($type); ?>]"
        value="<?php echo e(@$control_values['prof_interest']['army_sport'][end][$type]); ?>" size="5">

<br>
<br>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/admin/user_profiles/include/base_test_profession_interests.blade.php ENDPATH**/ ?>