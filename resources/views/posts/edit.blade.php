@extends('layouts.default')

@section('content')

@include('partials.errors')

  <h1>Crear Posts: </h1>

  <form action="{{  route('post_put_path', $post->id) }}" method="POST">


    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <br>

    <label for="title">Título</label>

    <input class="form-control" type="text" class="" name="title" value="{{ $post->title }}">

    <label for="body">Contenido</label>

    <textarea id="body"  class="form-control" name="body" rows="10" cols="30" >{{ $post->body }}</textarea>

    <br>

    <input class="btn btn-success" type="submit" name="name" value="crear">

  </form>

  @stop
