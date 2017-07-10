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
        	'name' => '林俞安',
        	'email' => 'sonia86226@gmail.com',
        	'password' => bcrypt('sonia26'),
        	'remember_token' => str_random(10)
        ]);

        $user = UserEloquent::create([
            'name' => 'user001',
            'email' => 'user001@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);

        $user = UserEloquent::create([
            'name' => 'user002',
            'email' => 'user002@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);

        $user = UserEloquent::create([
            'name' => 'user003',
            'email' => 'user003@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);

        $user = factory(App\User::class,20)->create();
    }
}
