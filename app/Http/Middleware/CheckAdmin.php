<?php

namespace App\Http\Middleware;

use App\Permission;
use Closure;
use Exception;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next, $permission)
    {



        //lay tat ca cac role khi user login vao he thong
        $listRoleOfUser1=User::join('role_user','users.id','=','role_user.user_id')->join('roles','role_user.role_id','=','roles.id')->where('users.id', Auth::id())->select('roles.*')->get()->pluck('id');

        //lay tat ca cac permission khi user login vao he thong
        // $listRoleOfUser=DB::table('roles')->join('role_permission','roles.id','=','role_permission.role_id')->join('permissions','role_permission.permission_id','=','permissions.id')->whereIn('roles.id', $listRoleOfUser1)->select('permissions.*')->get()->pluck('id');
        //lay cac man hinh tuong ung voi user
        
            $checkPermission = Role::where("nick_name", $permission)->value('id');
            
        	if ($listRoleOfUser1->contains($checkPermission)) {
                return $next($request);
            	}
            	abort(403, 'Oops ! Bạn không có quyền thực hiện thao tác này!');

    }
        //check user duoc phep vao man hinh nay
}
