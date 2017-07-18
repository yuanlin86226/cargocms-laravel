<?php

use Illuminate\Database\Seeder;

use App\User as UserEloquent;
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

        $user = UserEloquent::create([
        	'name' => 'John Doe',
            'username' => 'admin',
        	'email' => 'admin@example.com',
        	'password' => bcrypt('admin'),
        	'remember_token' => str_random(10)
        ]);

        $role_admin = Role::where('name', 'admin')->first();
        $user->roles()->attach($role_admin);

        $user = factory(App\User::class, 20)->create();        
    }
}
