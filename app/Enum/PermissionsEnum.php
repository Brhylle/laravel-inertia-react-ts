<?php

namespace App\Enum;

enum PermissionsEnum : string
{
    case ManageFeatures = 'manage-features';
    case ManageUsers = 'manage-users';

    case ManageComments = 'manage-comments';
    case UpvoteDownvote = 'upvote-downvote';

    public function description(): string
    {
        return match ($this) {
            self::ManageFeatures => 'Allows managing feature settings',
            self::ManageUsers => 'Allows adding, editing, or removing users',
            self::ManageComments => 'Allows moderating comments',
            self::UpvoteDownvote => 'Allows voting on posts and comments',
        };
    }
}
