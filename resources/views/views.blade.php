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
              <th scope="col">Nombre Video</th>
		      <th scope="col">Link</th>
		      <th scope="col">Fecha Visto</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($views as $view)
			    <tr>
                  <th scope="row">{{ $view->name }}</th>
			      <th>https://www.youtube.com/watch?{{ $view->idYoutube }}</th>
			      <td>{{ $view->date }}</td>
			    </tr>
		    @endforeach
		  </tbody>
		</table>
    <div class="row">
        <div class="col-sm-12 col-md-3 offset-md-9 col-lg-4 offset-lg-8">
        <button type="button" class="btn btn-danger btn-block">
            <a href="/excel-view/{{$id}}">
                Descargar información vistas de video
            </a>
        </button>
        </div>
    </div>
        
    </div>

@endsection