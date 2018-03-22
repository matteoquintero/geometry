@extends('layouts.app')

@section('title', 'Ut enim')
@section('section', 'Ut enim ad minim veniam')

@section('header')
    @parent
@endsection

@section('content')
    <div id="users">
		<table class="table table-striped table-dark">
		  <thead>
		    <tr>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Emepresa</th>
		      <th scope="col">Correo</th>
		      <th scope="col">Cargo</th>
		      <th scope="col">Dirección</th>
		      <th scope="col">Ciudad</th>
		      <th scope="col">Telefono</th>
		      <th scope="col">Videos vistos</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($users as $user)
			    <tr>
			      <th scope="row">{{ $user->name }}</th>
			      <td>{{ $user->lastname }}</td>
			      <td>{{ $user->company }}</td>
			      <td>{{ $user->email }}</td>
			      <td>{{ $user->position }}</td>
			      <td>{{ $user->adress }}</td>
			      <td>{{ $user->city }}</td>
			      <td>{{ $user->phone }}</td>
			      <td>{{ $user->times }} <a href="/views/{{$user->idUser}}" title="Ver detalle"><small>Ver detalle</small></a></td>
			    </tr>
		    @endforeach
		  </tbody>
		</table>
    </div>

@if (session('status'))
    @component('alert')
    @slot('title')
        Sesión
    @endslot
    {{ session('status') }}
    @endcomponent  
@endif

@endsection
                    