<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();



        $user = User::create([
        	'name' => '林俞安',
        	'email' => 'sonia86226@gmail.com',
        	'password' => bcrypt('sonia26'),
        	'remember_token' => str_random(10)
        ]);

        $user = User::create([
            'name' => 'user001',
            'email' => 'user001@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);

        $user = User::create([
            'name' => 'user002',
            'email' => 'user002@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);

        $user = User::create([
            'name' => 'user003',
            'email' => 'user003@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);

        $user = factory(App\User::class,20)->create();

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();

        $role_admin = Role::where('name', 'admin')->first();
        $admin->roles()->attach($role_admin);
        
    }
}
