<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class HomeController extends Controller
{
    public function index() {

      /*
      $post = Post::find(1);

      $posts = [
        $post
      ];*/

      /* Prueba
      $post = Post::find(1);

      dd($post);
      */

      /*
      $posts = Post::with('user')->get();

      return $posts;*/
      $posts = Post::all();

      return view('home', ['posts' => $posts]);
    }
}
