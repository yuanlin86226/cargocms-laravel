<?php

use Illuminate\Database\Seeder;

use App\User as UserEloquent;

class UsersTableSeeder extends Seeder
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

        $user = factory(App\User::class, 20)->create();
    }
}
