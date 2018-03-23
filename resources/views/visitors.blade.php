@extends('layouts.app')

@section('title', 'Ut enim')
@section('section', 'Ut enim ad minim veniam')

@section('header')
    @parent
@endsection

@section('content')
    <div id="visitors">
        
            @guest
            @else
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
             </ul>
            @endguest

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
		    @foreach ($visitors as $visitor)
			    <tr>
			      <th scope="row">{{ $visitor->name }}</th>
			      <td>{{ $visitor->lastname }}</td>
			      <td>{{ $visitor->company }}</td>
			      <td>{{ $visitor->email }}</td>
			      <td>{{ $visitor->position }}</td>
			      <td>{{ $visitor->adress }}</td>
			      <td>{{ $visitor->city }}</td>
			      <td>{{ $visitor->phone }}</td>
			      <td><a href="/views/{{$visitor->idVisitor}}" title="Ver detalle"> {{ $visitor->times }} videos <small>vistos</small></a></td>
			    </tr>
		    @endforeach
		  </tbody>
		</table>
        <div class="row">
            <div class="col-sm-12 col-md-3 offset-md-9 col-lg-4 offset-lg-8">
            <button type="button" class="btn btn-danger btn-block">
                <a href="/excel-visitors">
                    Descargar información visitantes
                </a>
            </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 offset-md-9 col-lg-4 offset-lg-8">
            <button type="button" class="btn btn-danger btn-block">
                <a href="/excel-views">
                    Descargar información vistas de video
                </a>
            </button>
            </div>
        </div>
    </div>
@endsection

                    