<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('static_contents')->insert([
           'title' => str_random(10),
            'body' => str_random(100),
            'url' => str_random(10),
        ]);
    }
}
