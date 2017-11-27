<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     function getRandomString(){
       echo('test');
       $titles = [
         'Emploi fictif: David Guetta dans le viseur de la justice',
         'Les pyramides seraient en réalité des oeuvres créées par les egyptiens',
         'Ivre, il assiste à un cours de WebGL',
         'Le verbe « distiller » et l’expression « un set dont il a le secret » interdits des bios de DJs',
       ];
       return $titles[rand(0,3)];
     }

    public function run()
    {
      $users = DB::table('users')->get();
      for ($i = 0; $i < 20; $i++){
        DB::table('articles')->insert([
              'title' => str_random(10),
              'content' => str_random(2000),
              'user_id' => rand(1,8)
          ]);
      }
    }
}
