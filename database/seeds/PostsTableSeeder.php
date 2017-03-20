<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::all();
        foreach ($users as $user){
            factory(Post::class, 5)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
