<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;

class UserAccess
{
    public function handle($request, Closure $next, $userType)
    {
        $roles = Role::where('name',$userType)->first();
        if(auth()->user()->role_id == $roles->id && auth()->user()->active == 1){
            return $next($request);
        }

        return response()->json(['You do not have permission to access for this page.'],401);
    }
}
