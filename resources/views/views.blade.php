@extends('layouts.app')

@section('title', 'Ut enim')
@section('section', 'Ut enim ad minim veniam')

@section('header')
    @parent
@endsection

@section('content')
    <div id="views">
		<table class="table table-striped table-dark">
		  <thead>
		    <tr>
		      <th scope="col">Nombre Video</th>
		      <th scope="col">Fecha Visto</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($views as $view)
			    <tr>
			      <th scope="row">{{ $view->name }}</th>
			      <td>{{ $view->date }}</td>
			    </tr>
		    @endforeach
		  </tbody>
		</table>
    </div>
@component('back') @endcomponent
@endsection