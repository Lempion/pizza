<?php

namespace App\Trait\Enum;

use Illuminate\Support\Arr;

trait EnumsGetValues
{
    public static function getValues(): array
    {
        return Arr::map(self::cases(), fn($case) => $case->value);
    }
}
