<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][phys][{{$type}}]" value="1" id="phys_prof_interest_green"

       @if(@$control_values['prof_interest']['phys'][$type]==1)
       checked selected
        @endif

>
        </td><td>

<label for="phys_prof_interest_green">Физика, математика, инноватика</label>
        </td></tr></table>

            <br>

&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input type="number" min="0" max="100"
       name="baseTestItems[prof_interest][phys][start][{{$type}}]"
       value="{{ @$control_values['prof_interest']['phys'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][phys][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['phys'][end][$type] }}" size="5">

<br>
<br>


<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][himbio][{{$type}}]" value="1" id="himbio_green"

       @if(@$control_values['prof_interest']['himbio'][$type]==1)
       checked selected
        @endif

>
        </td><td>
<label for="himbio_green"> Химия и биология</label>
        </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][himbio][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['himbio'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][himbio][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['himbio'][end][$type] }}" size="5">

<br>
<br>


<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][digital][{{$type}}]" value="1" id="digital_green"

       @if(@$control_values['prof_interest']['digital'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="digital_green">   Цифровые и информационные технологии</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][digital][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['digital'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][digital][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['digital'][end][$type] }}" size="5">

<br>
<br>




            <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][tehno][{{$type}}]" value="1" id="tehno_green"

       @if(@$control_values['prof_interest']['tehno'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="tehno_green"> Техника, механизмы и конструирование</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][tehno][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['tehno'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][tehno][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['tehno'][end][$type] }}" size="5">

<br>
<br>




                        <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][geograph][{{$type}}]" value="1" id="geograph_green"

       @if(@$control_values['prof_interest']['geograph'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="geograph_green"> Геология и география</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][geograph][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['geograph'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][geograph][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['geograph'][end][$type] }}" size="5">

<br>
<br>




                                    <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][filolog][{{$type}}]" value="1" id="filolog_green"

       @if(@$control_values['prof_interest']['filolog'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="filolog_green"> Языки и медиа</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][filolog][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['filolog'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][filolog][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['filolog'][end][$type] }}" size="5">

<br>
<br>




                                                <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][socpol][{{$type}}]" value="1" id="socpol_green"

       @if(@$control_values['prof_interest']['socpol'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="socpol_green"> История и политика</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][socpol][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['socpol'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][socpol][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['socpol'][end][$type] }}" size="5">

<br>
<br>




<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][gumanit][{{$type}}]" value="1" id="gumanit_green"

       @if(@$control_values['prof_interest']['gumanit'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="gumanit_green">Гуманитарные науки и медицина </label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][gumanit][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['gumanit'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][gumanit][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['gumanit'][end][$type] }}" size="5">

<br>
<br>





 <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][soceconom][{{$type}}]" value="1" id="soceconom_green"

       @if(@$control_values['prof_interest']['soceconom'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="soceconom_green"> Предпринимательство и управление</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][soceconom][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['soceconom'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][soceconom][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['soceconom'][end][$type] }}" size="5">

<br>
<br>




<table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][hudestet][{{$type}}]" value="1" id="hudestet_green"

       @if(@$control_values['prof_interest']['hudestet'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="hudestet_green"> Творчество и искусство </label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][hudestet][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['hudestet'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][hudestet][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['hudestet'][end][$type] }}" size="5">

<br>
<br>






 <table><tr><td>
<input type="checkbox" name="baseTestItems[prof_interest][army_sport][{{$type}}]" value="1" id="army_sport_green"

       @if(@$control_values['prof_interest']['army_sport'][$type]==1)
       checked selected
        @endif

>  </td><td>
<label for="army_sport_green">  Спорт и военное дело</label> </td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; c
<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][army_sport][start][{{$type}}]"
        value="{{ @$control_values['prof_interest']['army_sport'][start][$type] }}" size="5">
по

<input  type="number" min="0" max="100"
        name="baseTestItems[prof_interest][army_sport][end][{{$type}}]"
        value="{{ @$control_values['prof_interest']['army_sport'][end][$type] }}" size="5">

<br>
<br>
