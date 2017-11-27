<?php
$articles = App\Article::all();
$i = 0;
     for ($i;$i < 10; $i++ ){
       $articleNum = rand(0,19);
       $article = $articles[6];

       $name = $article->user()->first()->getName();
       echo("Article : " . $article->getTitle() . " User name : " . $name);
       echo("</br>");
       echo("Article id : " . $article->getId());
     }
?>
