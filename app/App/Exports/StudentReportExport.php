<?php

namespace App\Exports;

use Domain\Quiz\Models\IntelligenceLevel;
use Domain\Quiz\Models\Question;
use Domain\Quiz\Models\Situation;
use Domain\Quiz\Models\TypeOfThinking;
use Domain\UserProfile\Models\UserProfile;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\BeforeImport;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use \Maatwebsite\Excel\Sheet;
use \Maatwebsite\Excel\Concerns\ShouldAutoSize;
use \Maatwebsite\Excel\Concerns\WithColumnWidths;
use Domain\Quiz\Models\Inclination;



Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
    $sheet->getDelegate()
        ->getStyle($cellRange)
        ->applyFromArray($style);
});

class StudentReportExport implements WithColumnWidths, FromArray, WithEvents, WithHeadings
{
    private $data;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function __construct($data) {

        $this->data=$data;
    }



    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'F' => 15,
            'I' => 15
        ];
    }

    public function headings(): array
    {
        return [
            ['Очет по базе учеников'],
            [
                '№',
                'ФИО',
                'Город',
                'Школа',
                'Класс, буква',
                'Телефон',
                'E-mail',
                'ФИО родителя',
                'Телефон',
                'E-mail родителя',
                'Заполнена анкета родителя',
                'Анкета ребенка',
                'Соответствие базовому профилю',
                'Соответствие целевому профилю',
                'Любимые предметы ',
                'Средний балл',
                'Видение будущего ',
                'Вероятность остаться в родном городе',
                'Ограничивающие особенности здоровья ',
                'Какими качествами себя охарактеризуешь ',
                'Мотивы выбора',
                'Отношение к идее заключения договора целевого обучения',
                'Готовность к выбору профессии ',
                ' Базовый тест Пройден / Не пройден ',
                ' Проф интересы ',
                ' Портрет личности ',
                ' Рекомендуемые сферы и профессии (типаж)',
                ' Выбор по матрице профессий ',
                'Углубленный тест',
                'Склонности',
                'Общий уровень интеллекта',
                'Тип мышления',
                'Готовность отвечать за свои действия, добросовестно относиться к работе',
                'Готовность действовать в затруднительной ситуации',
                'Социальная активность. Часто характерны:',
                'Тенденция к заниженной или завышенной самооценке',
                'Конфликтность, умение решать сложные ситуации',
                'Ребенок получил консультацию',
                'Родитель получил консультацию',
                'Заключение профориентолога',
                'Согласие на целевое обучение ',
                'Количество посещенных мероприятий',
                'Направление',
                'Формат мероприятий',
                'Прохождение квиза',
                'Средняя оценка по итогам мероприятий',
                'Итоги отбора',
                'Заголовок заметки /Текст',
                'Участие в мероприятиях, олимпиады, конкурсы',
                'Единое окно обмена и хранения',
                'Отбор по глубинному тестированию',
                'Рекомендован',
                'Действие',
                'Приглашение на глубинное тестирование',

            ],

        ];
    }


    private function getTypes() {
        $types=[
            'green',
            'yellow',
            'red',
        ];

        return $types;
    }

    protected function unserialise($control_values) {
        if(empty($control_values)) {
            $control_values=array();
        } else {
            $control_values=unserialize($control_values);
        }

        return $control_values;
    }




    public function array(): array
    {

        ////погнали выводить данные
        $users=$this->data["users"];
        $data=$this->data;

        foreach($users as $index => $user) {
            $User = \Domain\User\Models\User::where('id', $user->user_id)->first();
            $str=array();
            $additional_rows=0;

        $color_td="";

        if(@$data['profiler'][$user->id]['color']=="green") {
            $color_td='lightgreen';
        }

        if(@$data['profiler'][$user->id]['color']=="red") {
            $color_td = 'red';
        }

        if(@$data['profiler'][$user->id]['color']=="yellow")  {

                $color_td = 'yellow';
            }

            $str[] = $users->firstItem() + $index;
            $str[] = $user->full_name;
            $str[] = $user->kladr_name;
            $str[] = $user->school;
            $str[] = $user->class;

            if ($user->phone)
                $str[] = $user->phone;
            else
                $str[] = "";

            ////////////////////////////////

            if ($user->email)
                $str[] = $user->email;
            else
                $str[] = "";

            /////////////////////////////

            if ($user->parent__full_name) {
                $str[] = $user->parent__full_name;
            } else {
                $str[] = "";
            }

            ///////////////////////////////////////////////////////

            if ($user->parent__phone)
                $str[] = $user->parent__phone;
            else
                $str[] = "";

            ////////////////////////////////////////////////////////////////////////
            if ($user->parent__email)
                $str[] = $user->parent__email;
            else
                $str[] = "";

            ////////////////////////////////////////////////////////////
            if ($user->parent_questionnaire_finished) {
                $str[] = "Заполнена анкета родителя";
            }
            else {
                $str[] = "Нет анкеты родителя";
            }

////////////////////////////////////////////////////////////////////
                if ($user->student_questionnaire_finished) {
                    $str[] = "Да";
                } else {
                    $str[] = "Нет";
                }

///////////////////////////////////////////////////////////////
                /// {{$color_td}};">

                if (@$data['profiler'][$user->id]['color'] == "green") {
                    $str[] = "[$color_td]Соответствует  профилю";
                } else

                if (@$data['profiler'][$user->id]['color'] == "yellow") {
                    $str[] = "[$color_td]Частично соответствует  профилю";
                } else

                if (@$data['profiler'][$user->id]['color'] == "red") {
                    $str[] = "[$color_td]Не соответствует  профилю";
                } else {
                    $str[] = " --- ";
                }

//////////////////////////////////////////////////////////////////////////////
                ////{{$color_td}};">

                if (@$data['profiler'][$user->id]['color'] == "green") {
                    $str[] = "[$color_td]Соответствует целевому профилю";
                } else

                if (@$data['profiler'][$user->id]['color'] == "yellow") {
                    $str[] = "[$color_td]Частично соответствует целевому профилю";
                } else

                if (@$data['profiler'][$user->id]['color'] == "red") {
                    $str[] = "[$color_td]Не соответствует целевому профилю";
                } else {
                    $str[] = " --- ";
                }

////////////////////////////////////////////
                @$items_profiles = @$data['profiler'][$user->id]['favorite_lessons'];
                $tems_to_str = "";
                 $favorite_lessons_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }elseif ($type === "green"){
//                                $type = "lightgreen";
//                            }

                            $favorite_lessons_arr[]="[$type]". $item;
                            $tems_to_str = $tems_to_str . $item . "\r\n";

                        }
                    }
                }

                //$str[] = $tems_to_str;

                $str[]= $favorite_lessons_arr[0] ?? '';
                if(count($favorite_lessons_arr)>$additional_rows) {
                    $additional_rows=count($favorite_lessons_arr);
                }

                /////////////////////////////////////////////////////////////////

                $tems_to_str = "";
                $medium_score_arr=array();
                @$items_profiles = $data['profiler'][$user->id]['medium_score'];

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }elseif ($type === "green"){
//                                $type = "lightgreen";
//                            }

                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $medium_score_arr[]="[$type]".$item;

                        }
                    }
                }
                ///$str[] = $tems_to_str;
                $str[]= $medium_score_arr[0] ?? '';
                if(count($medium_score_arr)>$additional_rows) {
                    $additional_rows=count($medium_score_arr);
                }

                ///////////////////////////////////////////
                $tems_to_str = "";
                $future_view_arr=array();
                @$items_profiles = $data['profiler'][$user->id]['future_view'];


                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }


                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $future_view_arr[]="[$type]".$item;
                        }
                    }
                }

                //$str[] = $tems_to_str;
                $str[]= $future_view_arr[0] ?? '';
                if(count($future_view_arr)>$additional_rows) {
                    $additional_rows=count($future_view_arr);
                }


                ///////////////////////////////////////////////////////////////
                $tems_to_str = "";
                $own_city_arr=array();

                @$items_profiles = $data['profiler'][$user->id]['own_city'];


                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }
//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }


                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $own_city_arr[]="[$type]".$items;


                    }
                }

                //$str[] = $tems_to_str;
                $str[]= $own_city_arr[0] ?? '';
                if(count($own_city_arr)>$additional_rows) {
                    $additional_rows=count($own_city_arr);
                }

                /////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['limit_health'];
                $limit_health_arr=array();


                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }


                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $limit_health_arr[]="[$type]".$item;

                        }
                    }
                }

                //$str[] = $tems_to_str;
                $str[]= $limit_health_arr[0] ?? '';
                if(count($limit_health_arr)>$additional_rows) {
                    $additional_rows=count($limit_health_arr);
                }

                //////////////////////////////////////////////////////

                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['personal_character'];
                $personal_character_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }

                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $personal_character_arr[]="[$type]".$item;

                        }
                    }
                }

                //$str[] = $tems_to_str;
                $str[]= $personal_character_arr[0] ?? '';
                if(count($personal_character_arr)>$additional_rows) {
                    $additional_rows=count($personal_character_arr);
                }
                ///////////////////////////////////////////////////////


                $tems_to_str = "";
                $motivations_arr=array();

                @$items_profiles = $data['profiler'][$user->id]['motivations'];

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }


                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $motivations_arr[]="[$type]".$item;

                        }
                    }
                }

                $str[]= $motivations_arr[0] ?? '';
                if(count($motivations_arr)>$additional_rows) {
                    $additional_rows=count($motivations_arr);
                }
                ///////////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['targetOrder'];
                $targetOrder_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }


                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $targetOrder_arr[]="[$type]".$item;

                        }
                    }
                }

                //$str[] = $tems_to_str;
                $str[]= $targetOrder_arr[0] ?? '';
                if(count($targetOrder_arr)>$additional_rows) {
                    $additional_rows=count($targetOrder_arr);
                }
                ////////////////////////////////////////////////////////////////

                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['ready_profession'];
                $ready_profession_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }
//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }


                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $ready_profession_arr[]="[$type]".$items;

                    }
                }

                ///$str[] = $tems_to_str;
                $str[]= $ready_profession_arr[0] ?? '';
                if(count($ready_profession_arr)>$additional_rows) {
                    $additional_rows=count($ready_profession_arr);
                }

/////////////////////////////////////////////////////////////////////////////////////


                $answer = "";
                if ($user->base_tests_finished) {
                    $answer = "Да";

                } else {
                    if ($user->base_tests_precentage) {

                        $answer = $user->base_tests_precentage . "%";

                    } else {

                        $answer = "Нет";

                    }
                }

                $str[] = $answer;


                //////////////////////////////////////////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['tipag'];
                $tipag_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {
                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }
                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $tipag_arr[]="[$type]".$item;


                        }
                    }

                }

                //$str[] = $tems_to_str;
            //Проф интересы
                $str[]= $user->professional_types_str;
                //Проф интересы
                ////////////////////////////////////////////////////////////

            //Портрет личности
            $portrait = [];
            if (!empty($User->characterTraitResult->values) && count($User->characterTraitResult->values) > 0) {
                foreach ($User->characterTraitResult->values as $value) {
                    $type = $value->is_higher ? '[orange]' : '[red]';
                    $title = $value->title;
                    $percentage = $value->percentage;
                    $portrait[]= "$type$title - $percentage";
                }


                if(count($portrait)>$additional_rows) {
                    $additional_rows=count($ready_profession_arr);
                }
            }

            $str[] = $portrait[0] ?? '';
            //Портрет личности

                /////////////////////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['tipag'];
                $tipag_arr2=array();


                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {


                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }


                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $tipag_arr2[]="[$type]".$item;

                        }
                    }

                }


                $str[]= $tipag_arr2[0] ?? '';
                if(count($tipag_arr2)>$additional_rows) {
                    $additional_rows=count($tipag_arr2);
                }

                //////////////////////////////////////////////////////////////////////////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['alt_component'];
                $alt_component_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {
                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }

//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }

                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $alt_component_arr[]="[$type]".$items;


                    }

                }

                ///$str[] = $tems_to_str;
                $str[]= $alt_component_arr[0] ?? '';
                if(count($alt_component_arr)>$additional_rows) {
                    $additional_rows=count($alt_component_arr);
                }


            ///////////////////////////////////////////////

                if ($user->depth_tests_finished) {

                    $str[] = "Да";
                } else {
                    if ($user->depth_tests_precentage) {
                        $str[] = $user->depth_tests_precentage . "%";
                    } else {
                        $str[] = "Нет";
                    }
                }


                ////////////////////////////////////////////////////////

                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['inclinations'];
                $inclinations_arr=array();


                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        foreach ($items as $item) {
                            switch ($type) {
                                case "green":
                                    $type = 'lightgreen';
                                    break;
                                case "red":
                                    $type = 'red';
                                    break;
                                case "yellow":
                                    $type = 'orange';
                                    break;
                            }
//                            if ($type == "yellow") {
//                                $type = "orange";
//                            }


                            $tems_to_str = $tems_to_str . $item . "\r\n";
                            $inclinations_arr[]="[$type]".$item;

                        }
                    }

                }

                //$str[] = $tems_to_str;

                $str[]= $inclinations_arr[0] ?? '';
                if(count($inclinations_arr)>$additional_rows) {
                    $additional_rows=count($inclinations_arr);
                }

                /////////////////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['intellegense_level'];
                $intellegense_level_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }
//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }

                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $intellegense_level_arr[]="[$type]".$items;


                    }

                }

                ///$str[] = $tems_to_str;
                $str[]= $intellegense_level_arr[0] ?? '';
                if(count($intellegense_level_arr)>$additional_rows) {
                    $additional_rows=count($intellegense_level_arr);
                }
                //////////////////////////////////////////////////////////////////////////////////////////////////////////


                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['type_of_thinking'];
                $type_of_thinking_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }
//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }


                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $type_of_thinking_arr[]="[$type]".$items;


                    }

                }

               // $str[] = $tems_to_str;
            $str[]= $type_of_thinking_arr[0] ?? '';
            if(count($type_of_thinking_arr)>$additional_rows) {
                $additional_rows=count($type_of_thinking_arr);
            }

                ////////////////////////////////////////////////////////////////////


                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['situation'][1];
                $situation1_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {
                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }

//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }

                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $situation1_arr[]="[$type]".$items;
                    }

                }


                ///$str[] = $tems_to_str;
                $str[]= $situation1_arr[0] ?? '';
                if(count($situation1_arr)>$additional_rows) {
                    $additional_rows=count($situation1_arr);
                }


                /////////////////////////////////////////////////////////////////////////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['situation'][2];
                $situation2_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {
                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }
//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }


                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $situation2_arr[]="[$type]".$items;


                    }
                }

                //$str[] = $tems_to_str;
            $str[]= $situation2_arr[0] ?? '';
            if(count($situation2_arr)>$additional_rows) {
                $additional_rows=count($situation2_arr);
            }

            ////////////////////////////////////////////////////////////////////////////////////////////


                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['situation'][4];
            $situation4_arr=array();


                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {
                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }

//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }

                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $situation4_arr[]="[$type]".$items;


                    }
                }

                //$str[] = $tems_to_str;
                $str[]= $situation4_arr[0] ?? '';
                if(count($situation4_arr)>$additional_rows) {
                    $additional_rows=count($situation4_arr);
                }


                /////////////// ///////////////////////////////////////////////////////
                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['situation'][3];
                $situation3_arr=array();

                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }
//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }

                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $situation3_arr[]="[$type]".$items;


                    }

                }

                //$str[] = $tems_to_str;
                $str[]= $situation3_arr[0] ?? '';
                if(count($situation3_arr)>$additional_rows) {
                    $additional_rows=count($situation3_arr);
                }
                ///////////////////////////////////////////////////////

                $tems_to_str = "";
                @$items_profiles = $data['profiler'][$user->id]['situation'][5];
                $situation5_arr=array();


                if (!is_null($items_profiles)) {

                    foreach ($items_profiles as $type => $items) {

                        switch ($type) {
                            case "green":
                                $type = 'lightgreen';
                                break;
                            case "red":
                                $type = 'red';
                                break;
                            case "yellow":
                                $type = 'orange';
                                break;
                        }
//                        if ($type == "yellow") {
//                            $type = "orange";
//                        }


                        $tems_to_str = $tems_to_str . $items . "\r\n";
                        $situation5_arr[]="[$type]".$items;


                    }

                }

               // $str[] = $tems_to_str;
            $str[]= $situation5_arr[0] ?? '';
            if(count($situation5_arr)>$additional_rows) {
                $additional_rows=count($situation5_arr);
            }

                ///////////////////////////////////////////////////////////////////////////////


                if ($user->got_consultation_status == 'carried_out') {
                    $str[] = "Ребенок получил консультацию";
                } elseif ($user->got_consultation_status == 'invited') {
                    $str[] = "Приглашен";
                } else {
                    $str[] = "Не приглашен";
                }

                /////////////////////////////////////////////////


                if ($user->got_consultation_status_with_parent == 'carried_out') {
                    $str[] = "Родитель получил консультацию";
                } elseif ($user->got_consultation_status_with_parent == 'invited') {
                    $str[] = "Приглашен";
                } else {
                    $str[] = "Не приглашен";
                }

                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


                $str[] = "Заключение профориентолога";
                ///////////////////////////////////////////////////////////////////


                if ($user->agree == 'agree') {
                    $str[] = "Согласен";
                } elseif ($user->agree == 'not_agree') {
                    $str[] = "Не согласен";
                } elseif ($user->agree == 'think') {
                    $str[] = "Думает";
                } else {
                    $str[] = " Нет информации";
                }


                //////////////////////////////////
                $str[] = $user->count_visited_events . " " . $user->count_events;


                //////////////////////////////////////////////////////

//                $str[] = "Направление";
                $str[] = "";

                ////////////////////////////////////////////////////////////////////////


//                $str[] = " Формат мероприятий";
                $str[] = "";

                //////////////////////////////////////////////////////////////////


                if ($data["personal_quiz"][$user->id] == 0) {

                    $str[] = " Нет";
                } else {

                    $str[] = "Да, " . $data["personal_quiz"][$user->id] . " баллов";

                }

                /////////////////////////////////////////////////
//                $str[] = "Средняя оценка по итогам мероприятий";
                $str[] = "";

                ////////////////////////////////////////////////////////////////////////


                $str[] = "";

                /////////////////////////////////////////////////////////////////////
                $str[] = @$data["note"][$user->id];


                /////////////////////////////////////

//                $str[] = " Участие в мероприятиях, олимпиады, конкурсы ";
                $str[] = "";

                //////////////////////////////////////

//                $str[] = " Единое окно обмена и хранения ";
                $str[] = "";

////////////////////////////////////////////////////////////////////
                $str[] = $user->depthStepSelectionLabel;

                ///////////////////////////////////


    if ($user->recommend == 'recommend') {
        $str[] = "Рекомендован";
    } elseif ($user->recommend == 'not_recommend') {
        $str[] = "Не рекомендован ";
    } else {
        $str[] = "Нет информации";
    }

 //////////////////////////////

      $str[] = "";
//////////////////////////////////////////////////////////////////


    if ($user->invited_depth_tests) {
        $str[] = "Приглашен";
    } else {
        $str[] = " Не приглашен на глубинное тестирование ";
    }


    $result[]=$str;

    ///дополняем массив строк
            for($i=1;$i<=$additional_rows-1;$i++) {
                $new_str=array();
                ///подготовка массива
                for($k=0;$k<=53;$k++) {
                    $new_str[$k]="";
                }

                ////заполнение дополнительными данными

                $new_str[14]=$favorite_lessons_arr[$i] ?? '';
                $new_str[15]=$medium_score_arr[$i] ?? '';
                $new_str[16]=$future_view_arr[$i] ?? '';
                $new_str[17]=$own_city_arr[$i] ?? '';
                $new_str[18]=$limit_health_arr[$i] ?? '';
                $new_str[19]=$personal_character_arr[$i] ?? '';
                $new_str[20]=$motivations_arr[$i] ?? '';
                $new_str[21]=$targetOrder_arr[$i] ?? '';
                $new_str[22]=$ready_profession_arr[$i] ?? '';

                $new_str[24]=$tipag_arr[$i] ?? '';
                $new_str[25]=$portrait[$i] ?? '';

                $new_str[26]=$tipag_arr2[$i] ?? '';
                $new_str[27]=$alt_component_arr[$i] ?? '';

                $new_str[29]=$inclinations_arr[$i] ?? '';
                $new_str[30]=$intellegense_level_arr[$i] ?? '';
                $new_str[31]=$type_of_thinking_arr[$i] ?? '';

                $new_str[32]=$situation1_arr[$i] ?? '';
                $new_str[33]=$situation2_arr[$i] ?? '';
                $new_str[34]=$situation4_arr[$i] ?? '';
                $new_str[35]=$situation3_arr[$i] ?? '';

                $result[]=$new_str;
            }
//    dd($result);
}

//      dd($result);

        return $result;
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class => [self::class, 'afterSheet'],
            BeforeSheet::class => [self::class, 'beforeSheet'],
        ];
    }


    public static function beforeSheet(BeforeSheet $event)
    {
        //
    }


    public static function afterSheet(AfterSheet $event){


        foreach($event->sheet->getCoordinates() as $coordinate) {
            $cell_value=$event->sheet->getCell($coordinate)->getValue();

            if(str_contains($cell_value,'[lightgreen]')) {
                $event->sheet->styleCells(
                    $coordinate,
                    [
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                            'wrapText' => true,
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => ['argb' => "00FF00"]
                        ]
                    ]
                );
            }


            if(str_contains($cell_value,'[red]')) {
                $event->sheet->styleCells(
                    $coordinate,
                    [
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => ['argb' => "ff8c8a"]
                        ]
                    ]
                );
            }


            if(str_contains($cell_value,'[yellow]')) {
                $event->sheet->styleCells(
                    $coordinate,
                    [
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => ['argb' => "FFA500"]
                        ]
                    ]
                );
            }


            if(str_contains($cell_value,'[orange]')) {
                $event->sheet->styleCells(
                    $coordinate,
                    [
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => ['argb' => "FFA500"]
                        ]
                    ]
                );
            }


                ////зачистка от меток цвета
            $event->sheet->getCell($coordinate)->setValue(str_replace("[orange]","",$event->sheet->getCell($coordinate)->getValue()));
            $event->sheet->getCell($coordinate)->setValue(str_replace("[black]","",$event->sheet->getCell($coordinate)->getValue()));
            $event->sheet->getCell($coordinate)->setValue(str_replace("[green]","",$event->sheet->getCell($coordinate)->getValue()));
            $event->sheet->getCell($coordinate)->setValue(str_replace("[lightgreen]","",$event->sheet->getCell($coordinate)->getValue()));
            $event->sheet->getCell($coordinate)->setValue(str_replace("[red]","",$event->sheet->getCell($coordinate)->getValue()));
            $event->sheet->getCell($coordinate)->setValue(str_replace("[yellow]","",$event->sheet->getCell($coordinate)->getValue()));
            $event->sheet->getCell($coordinate)->setValue(str_replace("[#ff8c8a]","",$event->sheet->getCell($coordinate)->getValue()));
            $event->sheet->getCell($coordinate)->setValue(strip_tags(html_entity_decode($event->sheet->getCell($coordinate)->getValue())));

        }


//        $event->sheet->getCell('B3')->setValue("[]".$event->sheet->getCell('B3')->getValue());


        ////////////////////шрифты
        $event->sheet->styleCells(
            'A2:BC2',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],

                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  14,
                    'bold'      =>  true,
                    'color' => ['argb' => '000000'],
                ],

            ]
        );

        /*
        $event->sheet->styleCells(
            'A1',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],

                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  20,
                    'bold'      =>  true,
                    'color' => ['argb' => '000000'],
                ],

            ]
        );


        //dd($event->sheet->getCell('B3')->getValue());
   /*
        $event->sheet->getStyle('A3:AA3')->getAlignment()->setWrapText(true);
        $event->sheet->getStyle('A4:AA4')->getAlignment()->setWrapText(true);
        $event->sheet->getStyle('A5:AA5')->getAlignment()->setWrapText(true);
        $event->sheet->getStyle('A6:AA6')->getAlignment()->setWrapText(true);
        $event->sheet->getStyle('A7:AA7')->getAlignment()->setWrapText(true);
        $event->sheet->mergeCells('A2:K2');
        $event->sheet->mergeCells('L2:P2');
        $event->sheet->mergeCells('Q2:X2');
        $event->sheet->mergeCells('Y2:AA2');
        $event->sheet->mergeCells('A1:AA1');

        ////////////////////шрифты
        $event->sheet->styleCells(
            'A1',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],

                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  20,
                    'bold'      =>  true,
                    'color' => ['argb' => '000000'],
                ],

            ]
        );


        $event->sheet->styleCells(
            'C5:AA5',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],

                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  12,
                    'color' => ['argb' => '00FF00'],
                ],

            ]
        );

        $event->sheet->styleCells(
            'C6:AA6',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],

                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  12,
                    'color' => ['argb' => 'ff8c00'],
                ],

            ]
        );

        $event->sheet->styleCells(
            'C7:AA7',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],

                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  12,
                    'color' => ['argb' => 'FF0000'],
                ],

            ]
        );

        ///////////////////фоны заливки

        $event->sheet->styleCells(
            'A2:AC2',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['argb' => "d9d9d9"]
                ]
            ]
        );


        $event->sheet->styleCells(
            'A3:AA3',
            [
                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  12,
                    'bold'      =>  true,
                    'color' => ['argb' => '000000'],
                ],
            ]
        );


        $event->sheet->styleCells(
            'A5:B5',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['argb' => "00FF00"]
                ]
            ]
        );

        $event->sheet->styleCells(
            'A6:B6',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['argb' => "FFFF00"]
                ]
            ]
        );


        $event->sheet->styleCells(
            'A7:B7',
            [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['argb' => "FF0000"]
                ]
            ]
        );

        $event->sheet->styleCells(
            'A5:AA25',
            [
                'alignment' => [
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP,
                ]
            ]
        );



        $event->sheet->getStyle('A2:AA25')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ]);
*/
        /*
        $event->sheet->styleCells(
            'A2',
            [
                'alignment' => [
                    'setWrapText' => true
                ],

            ]
        );
*/
        //Single Column

        /* $event->sheet->styleCells(
             'A1',
             [
                 'alignment' => [
                     'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                 ],
                 'fill' => [
                     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                     'color' => ['argb' => "FF0000"]
                 ]
             ]
         );

 //Range Columns
         $event->sheet->styleCells(
             'B2:E2',
             [
                 'alignment' => [
                     'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                 ],
                 'fill' => [
                     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                     'color' => ['argb' => "d9d9d9"]
                 ]
             ]
         );
        */
    }
}
