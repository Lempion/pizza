<?php

namespace App\Enums;

use App\Trait\Enum\EnumsGetValues;

enum CategoryEnum: string
{

    use EnumsGetValues;

    case Breakfast = 'breakfast';

    case Pizza = 'pizza';

    case Combo = 'combo';

    case Snacks = 'snacks';

    case Cocktails = 'cocktails';

    case Coffee = 'coffee';

    case Drinks = 'drinks';

    case Desserts = 'desserts';
}
