<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function show($id) {

        $post =  Post::findOrFail($id);

        return view('post', ['post'=>$post]);
    }
}
