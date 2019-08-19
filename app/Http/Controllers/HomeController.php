<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Spatie\Permission\Models\Role;
 use Spatie\Permission\Models\Permission;
 use \App\User;
 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name'=>'writer']);
        // $permission= Permission::create(['name'=>'edit Post']);
        //$role=Role::findById(1);
        //$permission=Permission::findById(1);

        //$role->givePermissionTo($permission);
        // $permission->removeRole($role);
        // $role->revokePermissionTo($permission);




            //auth()->user()->givePermissionTo('edit Post');
            //auth()->user()->assignRole('writer');
            //return auth()->user()->permissions;
           // return auth()->user()->getDirectpermissions();
            //return auth()->user()->getPermissionsViaRoles();
            //return auth()->user()->getAllPermissions();

           // $user = User::role('writer')->get();
           // return $user;

           return auth()->user()->revokePermissionTo('edit Post');
            
        

            // $permission=Permission::findById(1);
            // $role=Role::findById(1);
            // $role->givePermissionTo($permission);
        return view('home');
    }
}
