<?php

namespace Domain\Quiz\Actions;

use Domain\Quiz\Models\TypeOfThinking;
use Domain\Quiz\Models\TypeOfThinkingManifestation;
use Domain\Quiz\Models\TypeOfThinkingResult;
use Domain\Quiz\Models\TypeOfThinkingResultValue;
use Domain\User\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreTypeOfThinkingResult
{
    protected CalculateTypeOfThinkingValues $calculateValues;

    public function __construct()
    {
        $this->calculateValues = app()->make(CalculateTypeOfThinkingValues::class);
    }

    public function run(User $user): ?TypeOfThinkingResult
    {
        DB::transaction(function () use ($user, &$result) {
            TypeOfThinkingResult::where('user_id', $user->id)->delete();

            $values = $this->calculateValues->run($user);

            $result = TypeOfThinkingResult::create([
                'uuid' => Str::uuid(),
                'user_id' => $user->id,
            ]);

            foreach ($values as $key => $value) {
                $type = TypeOfThinking::where('uuid', $key)->firstOrFail();

                $manifestation = TypeOfThinkingManifestation::where('value_range', TypeOfThinkingManifestation::takeStringRange($value['score']))
                    ->where('type_id', $type->id)->firstOrFail();

                TypeOfThinkingResultValue::create([
                    'uuid' => Str::uuid(),
                    'result_id' => $result->id,
                    'type_id' => $type->id,
                    'manifestation_id' => $manifestation->id,
                    'is_higher' => $value['is_higher'],
                    'value' => $value['score'],
                    'percentage' => $value['percentage'],
                ]);
            }
        });

        return $result;
    }
}
