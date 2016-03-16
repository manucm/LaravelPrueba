@extends('layouts.default')

@section('content')

@include('partials.errors')

  <h1>Crear Posts: </h1>

  <form action="{{  route('post_store_path') }}" method="post">


    {{ csrf_field() }}

    <br>

    <label for="title">Título</label>

    <input class="form-control" type="text" class="" name="title" value="{{ old('title') }}">

    <label for="body">Contenido</label>

    <textarea id="body"  class="form-control" name="body" rows="10" cols="30" >{{ old('body') }}</textarea>

    <br>

    <input class="btn btn-success" type="submit" name="name" value="crear">

  </form>

  @stop
