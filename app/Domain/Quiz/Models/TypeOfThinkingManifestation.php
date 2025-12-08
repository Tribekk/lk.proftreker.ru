<?php

namespace Domain\Quiz\Models;

use Support\Model;

class TypeOfThinkingManifestation extends Model
{
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(TypeOfThinking::class, 'type_id');
    }

    /**
     * Возвращает строчное значение промежутка в которое входит значение (кол-во баллов)
     *
     * @param int $value
     * @return string
     */
    public static function takeStringRange(int $value): string
    {
        if($value == 5) return "5-5";
        if($value < 5 && $value > 2) return "3-4";

        return "0-2";
    }
}
