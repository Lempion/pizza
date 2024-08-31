<?php

namespace App\Enums;

use App\Trait\Enum\GetValues;

enum CategoryEnum: string
{

    use GetValues;

    case Breakfast = 'breakfast';

    case Pizza = 'pizza';

    case Combo = 'combo';

    case Snacks = 'snacks';

    case Cocktails = 'cocktails';

    case Coffee = 'coffee';

    case Drinks = 'drinks';

    case Desserts = 'desserts';
}
