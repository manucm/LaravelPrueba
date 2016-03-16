@extends('layouts.default')

@section('content')

<h1>Estos son nuestros posts:</h1>

<a class="btn btn-primary" href="{{ route('post_create_path') }}">Crear Post</a>

<hr>
    <ul class="list-unstyled">
    @foreach($posts as $post)

        <li>
            <p class="lead">

              <a href="{{  route('post_show_path', $post->id) }}">{{ $post->title }}</a>
              <br>
              author: {{ $post->user->name }}
              <br>
              creado: {{ $post->created_at }}

              <hr>
            </p>

        </li>

    @endforeach
  </ul>
@stop
