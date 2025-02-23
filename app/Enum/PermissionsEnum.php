<?php

namespace App\Enum;

enum PermissionsEnum : string
{
    case ManageFeatures = 'manage-features';
    case ManageUsers = 'manage-users';

    case ManageComments = 'manage-comments';
    case UpvoteDownvote = 'upvote-downvote';
}
