<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostsController extends Controller
{
    public function show($id) {

        $post =  Post::findOrFail($id);

        return view('post', ['post'=>$post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function edit($id) {
        $post =  Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id) {
      echo "entra en update";

              $post =  Post::findOrFail($id);

              $post->title = $request->get('title');

              $post->body = $request->get('body');

              $post->author_id = Auth::id();

              $post->save();

              return redirect()->route('post_show_path', $post->id);
    }

    public function store(Request $request) {

      echo "hola";

        $validator = Validator::make($request->all(), [
          'title' => 'required',

          'body'  => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
            ->route('post_create_path')
            ->withInput()
            ->withErrors($validator);
        }

        $post = new Post;

        $post->title = $request->get('title');

        $post->body = $request->get('body');

        $post->author_id = Auth::id();

        $post->save();

        return redirect()->route('post_show_path', $post->id);
    }
}
