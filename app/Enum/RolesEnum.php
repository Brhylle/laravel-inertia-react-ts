<?php

namespace App\Enum;

enum RolesEnum : string
{
    //

    case Admin = 'admin';
    case User = 'user';

    case Commenter = 'commenter';

    public static function labels()
    {
        return [
            // return an admin key
            self::Admin->value => 'Admin',
            self::User->value => 'User',
            self::Commenter->value => 'Commenter', 
        ];
    }

    // returns a single case of the enum
    public function label()
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::User => 'User',
            self::Commenter => 'Commenter',
        };   
    }
}
