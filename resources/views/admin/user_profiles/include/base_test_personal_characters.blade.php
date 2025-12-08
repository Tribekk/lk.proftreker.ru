<table>
    <tr><td>Интроверсия</td><td width="5"></td><td>
            Экстраверсия
        </td></tr>

    <tr><td>

            <input type="number" min="0" max="100"
                   name="baseTestItems[personal_characters][introversion][{{$type}}][start]"
                   value="{{ @$control_values['personal_characters']['introversion'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[personal_characters][introversion][{{$type}}][end]"
                    value="{{ @$control_values['personal_characters']['introversion'][$type]["end"] }}" size="5">



        </td><td width="5"></td><td>


            <input type="number" min="0" max="100"
                   name="baseTestItems[personal_characters][extraversion][{{$type}}][start]"
                   value="{{ @$control_values['personal_characters']['extraversion'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[personal_characters][extraversion][{{$type}}][end]"
                    value="{{ @$control_values['personal_characters']['extraversion'][$type]["end"] }}" size="5">


        </td></tr>

</table>
<br>


<table>
<tr><td>Эмоциональная устойчивость</td><td width="5"></td><td>
        Тревожность
    </td></tr>

<tr><td>


        <input type="number" min="0" max="100"
               name="baseTestItems[emotional_stability][extraversion][{{$type}}][start]"
               value="{{ @$control_values['emotional_stability']['stable'][$type]["start"] }}" size="5">
        по

        <input  type="number" min="0" max="100"
                name="baseTestItems[emotional_stability][extraversion][{{$type}}][end]"
                value="{{ @$control_values['emotional_stability']['stable'][$type]["end"] }}" size="5">




    </td><td width="5"></td><td>

        <input type="number" min="0" max="100"
               name="baseTestItems[emotional_stability][warning][{{$type}}][start]"
               value="{{ @$control_values['emotional_stability']['warning'][$type]["start"] }}" size="5">
        по

        <input  type="number" min="0" max="100"
                name="baseTestItems[emotional_stability][warning][{{$type}}][end]"
                value="{{ @$control_values['emotional_stability']['warning'][$type]["end"] }}" size="5">



    </td></tr>

</table>
<br>


<table>
    <tr><td>Практичность</td><td width="5"></td><td>
            Открытость
        </td></tr>

    <tr><td>


            <input type="number" min="0" max="100"
                   name="baseTestItems[practional][pract][{{$type}}][start]"
                   value="{{ @$control_values['practional']['pract'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[practional][pract][{{$type}}][end]"
                    value="{{ @$control_values['practional']['pract'][$type]["end"] }}" size="5">



        </td><td width="5"></td><td>


            <input type="number" min="0" max="100"
                   name="baseTestItems[practional][open][{{$type}}][start]"
                   value="{{ @$control_values['practional']['open'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[practional][open][{{$type}}][end]"
                    value="{{ @$control_values['practional']['open'][$type]["end"] }}" size="5">


        </td></tr>

</table>
<br>


<table>
    <tr><td>Несобранность</td><td width="5"></td><td>
            Сознательность
        </td></tr>

    <tr><td>

            <input type="number" min="0" max="100"
                   name="baseTestItems[order_level][no_order][{{$type}}][start]"
                   value="{{ @$control_values['order_level']['no_order'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[order_level][no_order][{{$type}}][end]"
                    value="{{ @$control_values['order_level']['no_order'][$type]["end"] }}" size="5">


        </td><td width="5"></td><td>


            <input type="number" min="0" max="100"
                   name="baseTestItems[order_level][soznat][{{$type}}][start]"
                   value="{{ @$control_values['order_level']['soznat'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[order_level][soznat][{{$type}}][end]"
                    value="{{ @$control_values['order_level']['soznat'][$type]["end"] }}" size="5">



        </td></tr>

</table>
<br>



<table>
    <tr><td>Обособленность</td><td width="5"></td><td>
            Доброжелательность
        </td></tr>

    <tr><td>


            <input type="number" min="0" max="100"
                   name="baseTestItems[order_level][soznat][{{$type}}][start]"
                   value="{{ @$control_values['soc_position']['obosobl'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[order_level][soznat][{{$type}}][end]"
                    value="{{ @$control_values['soc_position']['obosobl'][$type]["end"] }}" size="5">



        </td><td width="5"></td><td>


            <input type="number" min="0" max="100"
                   name="baseTestItems[order_level][soznat][{{$type}}][start]"
                   value="{{ @$control_values['soc_position']['dobro'][$type]["start"] }}" size="5">
            по

            <input  type="number" min="0" max="100"
                    name="baseTestItems[order_level][soznat][{{$type}}][end]"
                    value="{{ @$control_values['soc_position']['dobro'][$type]["end"] }}" size="5">


        </td></tr>

</table>
<br>