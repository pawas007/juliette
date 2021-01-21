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
//        Role::create(['name'=>'admin']);
//        Role::create(['name'=>'writer']);
//
//        Permission::create(['name'=>'moderator']);
//        Permission::create(['name'=>'write and edit post']);

//        $role = Role::findById(3);
//        $permission = Permission::findById(3);
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
