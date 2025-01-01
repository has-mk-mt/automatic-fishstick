<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Log;


class AdminPolicy
{
    public function manage(User $user): bool
    {
        // return $user->roles->contains('name', 'admin');
        return $user->roles->pluck('name')->contains('admin');

    }

}
