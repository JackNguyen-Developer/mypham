<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;
use App\Permission;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('roles')->insert([
//            'name' => 'admin',
//            'display_name' => 'User Administrator',
//            'description' => 'User is allowed to  manage and edit other users'
//        ]);
        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'User Administrator';
        $admin->description = 'User is allowed to  manage and edit other users';
        $admin->save();
//        $rep = new Role();
//        $rep->name = 'representative';
//        $rep->display_name = "School's representative";
//        $rep->description = 'User is representative of school';
//        $rep->save();
        
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('123123');
        //$user->remember_token = str_random(60);
        $user->save();

        $user->attachRole($admin);

        //create permission
        $createCou = new Permission();
        $createCou->name         = 'create';
        $createCou->display_name = 'Create'; //optional
        $createCou->description  = 'create'; //optional
        $createCou->save();

        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users'; //optional
        $editUser->description  = 'edit existing users'; //optional
        $editUser->save();

        $admin->attachPermissions([$editUser, $createCou]);
        //$rep->attachPermission($createCou);

    }
}
