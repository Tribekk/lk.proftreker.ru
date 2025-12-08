<?php

namespace Domain\Quiz\Models;

use Support\Model;

class TypeOfThinkingResultValue extends Model
{
    protected $guarded = [];

    public function result()
    {
        return $this->belongsTo(TypeOfThinkingResult::class, 'result_id');
    }

    public function type()
    {
        return $this->belongsTo(TypeOfThinking::class, "type_id");
    }

    public function manifestation()
    {
        return $this->belongsTo(TypeOfThinkingManifestation::class, "manifestation_id");
    }

    /**
     * Возвращает hex с цветом
     * @return string
     */
    public function hexColor(): string
    {
        if($this->value <= 2) return "#ccc";
        if($this->is_higher) return '#33aa33';
        return '#385E9D';
    }
}
