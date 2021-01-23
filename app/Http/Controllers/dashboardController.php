<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class dashboardController extends Controller
{
    use HasRoles;

    public function dashboard()
    {
        // ostap 
//        Role::create(['name'=>'superadmin']);
//        Role::create(['name'=>'moderator']);
//
//        Permission::create(['name'=>'root']);
//        Permission::create(['name'=>'write and edit post']);

//        $role = Role::findById(1);
//        $permission = Permission::findById(1);
//        $role->givePermissionTo($permission);

//        $user->roles->pluck('name');
//        echo  $user;
//        auth()->user()->assignRole('admin');
//        dd(auth()->user());

        return view('dashboard/maindash');
    }

    public function admin(){

        $users = User::all();
        return view('dashboard/superadmin',compact('users'));
    }


}








}
