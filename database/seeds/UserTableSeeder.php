<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB:table('users')-> es
        // a mano, fachada nos permite acceder a la
        //bd sin usar elquent tiene los mismos metodos
        //que elequent pero no devuelve objetos stats_rand_gen_ibinomial_negative//
        // datos
        // podemos crear datos directamente
        /*
        DB::table('users')->insert([
          'name' => 'Joe',
        'email' => 'joe@ejemplo.com'
      ]);*/

      // Hacemos lo mismo pero usando factories
      //factory(App\User::class, 10)->create();

      // Para añadir posts a los users
      User::truncate();
      Post::truncate();
      factory(App\User::class, 10)->create()->each(function($user) {




          $post = factory(App\Post::class)->make();

          $user->posts()->save($post);
      });
    }
}
