<?php

namespace App\Enums;

use App\Trait\Enum\EnumsGetValues;

enum PermissionEnum: string
{
    use EnumsGetValues;

    case Main = 'Main';

    case Products = 'Products';

    case Categories = 'Categories';

    case AdditionalProducts = 'Additional products';

    case RolesAndPermissions = 'Roles and permissions';

}
