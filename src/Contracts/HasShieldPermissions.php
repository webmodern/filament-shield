<?php

declare(strict_types=1);

namespace webmodern\FilamentShield\Contracts;

interface HasShieldPermissions
{
    public static function getPermissionPrefixes(): array;
}
