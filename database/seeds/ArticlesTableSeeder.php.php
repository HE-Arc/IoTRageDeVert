<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = DB::table('users')->get();
            for ($i = 0; $i < 20; $i++){
              DB::table('articles')->insert([
                    'title' => str_random(10),
                    'content' => str_random(2000),
                    'user_id' => rand(0,9),
                ]);
            }
    }
}
