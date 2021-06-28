<?php

namespace App\Http\Middleware;

use App\Permission;
use App\Role;
use App\User;
use Closure;

class CheckMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        $listRoleOfUser = User::join('role_users', 'users.id', '=', 'role_users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('users.id', auth()->id())
            ->select('roles.*')
            ->get()->pluck('id')->toArray();

        $listPermissionOfUser = Role::join('permission_roles', 'roles.id', '=', 'permission_roles.role_id')
            ->join('permissions', 'permission_roles.permission_id', '=', 'permissions.id')
            ->whereIn('roles.id', $listRoleOfUser)
            ->select('permissions.*')
            ->get()->pluck('id')->unique();

        $checkPermission = Permission::where('name', $permission)->value('id');
        if ($listPermissionOfUser->contains($checkPermission)) {
            return $next($request);
        }
        return abort(401);
    }
}
