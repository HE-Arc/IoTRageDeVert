<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $i = 0;
      $articles = App\Article::all();
           for ($i;$i < 100; $i++ ){
             $articleNum = rand(0,19);
             $article = $articles[$articleNum];
             $content = $article->first()->getContent();
             DB::table('reviews')->insert([
                   'article_id' => $article->getId(),
                   'user_id' => $article->user()->first()->getId(),
                   'content' => $article->getContent(),
                   'title' => str_random(10),
               ]);
           }
    }
}
