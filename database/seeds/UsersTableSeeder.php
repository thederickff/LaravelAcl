<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::truncate();
        factory(User::class)->create([
            'name' => 'Derick Felix',
            'email' => 'derickfelix4321@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10)
        ]);
        factory(User::class)->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);



        factory(User::class, 2)->create();

    }
}
