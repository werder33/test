<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(PostsSeeder::class);

        Model::reguard();
    }
}

class PostsSeeder extends Seeder{
    public function run()
    {
        DB::table ('posts') -> delete();
        Post::create([
                'title' => 'contactre',
                'url' => 'contact',
                'content' => 'jjjk',
            ]
        );
        Post::create([
                'title' => 'users',
                'url' => 'user',
                'content' => 'fdfs sss ggfsgvs',
            ]
        );
        Post::create([
                'title' => 'helper',
                'url' => 'help',
                'content' => 'dfvfdbfd',
            ]
        );
    }
}