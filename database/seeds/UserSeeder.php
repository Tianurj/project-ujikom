<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $superadminRole = new Role();
        $superadminRole->name = "superadmin";
        $superadminRole->display_name="Super Admin";
        $superadminRole->save();

        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name="Admin";
        $adminRole->save();

        $superadmin = new User();
        $superadmin->name = 'Super Admin Rangkas';
        $superadmin->email ='superadmin@gmail.com';
        $superadmin->password = bcrypt('rahasia');
        $superadmin->is_verified=1;
        $superadmin->save();
        $superadmin->attachRole($superadminRole);

        $admin = new User();
        $admin->name = "Admin Rangkas";
        $admin->email ='admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->is_verified=1;
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
