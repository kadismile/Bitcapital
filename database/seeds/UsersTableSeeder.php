<?php

use Illuminate\Database\Seeder;
use App\Balance;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        $role = [
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'admin' => true,
            ]
        ];
        $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();
        $subscribersRole = [
            'name' => 'Subscribers',
            'slug' => 'subscribers',
        ];
        Sentinel::getRoleRepository()->createModel()->fill($subscribersRole)->save();

         $admin = [
             'username' => 'admin',
             'email'    => 'admin@admin.com',
             'first_name' => 'admin',
             'last_name' => 'admin',
             'phone' => '07067875047',
             'password' => 'admin111222',
             'usercategory_id' => 2,
             'country' => 'Nigeria',
             'sex' => 'Male'

         ];

        $users = [
            [
                'username' => 'levi',
                'email'    => 'levi@gmail.com',
                'password' => '111222',
                'first_name' => 'Blessing',
                'last_name' => 'Wilson',
                'phone' => '07067875047',
                'usercategory_id' => 2,
                'country' => 'Nigeria',
                'sex' => 'Male',
            ],

        ];
        $adminUser = Sentinel::registerAndActivate($admin);
        $adminUser->roles()->attach($adminRole);
        foreach ($users as $user)
        {
            Sentinel::registerAndActivate($user);

            //DB::table('balances')->save();
            /*$balance = new Balance;
            $balance->user_id = $user->id;
            $balance->save();*/
        }
    }
}
