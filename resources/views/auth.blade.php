@extends('layouts.default')

@section('content')

<h1>Iniciar Sesión</h1>

@if($errors->has())

    <div class="alert alert-danger">

      <ul class="list-unstyled">


      @foreach($errors->all() as $error)

          <li>{{ $error }}</li>

        @endforeach

        </ul>
    </div>

@endif

<!-- <form class="" action="{{ url('auth/login') }}" method="post">-->
<form class="" action="" method="post">

    <!-- Esto nos permite que otros usuarios no puedan
        lanzar formularios que no estén alojados en nuestro servidor
        Podemos hacerlo de dos formas:

        (1:)<input type="hidden" name="name" value="_tokem" value="{{ csrf_token() }}">

        2) Con el siguiente helper:


        <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

        {{ csrf_field() }}


        <label for="email">Email:</label>

        <input class="form-control" type="text" name="email" value="">

        <label for="password">Contraseña:</label>

        <input  class="form-control" type="password" name="password" value="">

        <br>

        <input class="btn btn-primary" type="submit" name="iniciar" value="Iniciar">

</form>

@stop
