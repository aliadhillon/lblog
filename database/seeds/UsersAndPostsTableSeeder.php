<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class UsersAndPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)
            ->create()
            ->each(function($user){
                factory(Post::class, 5)->create([
                    'user_id' => $user->id
                ]);
            });
    }
}
