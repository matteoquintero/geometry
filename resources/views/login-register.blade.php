@extends('layouts.app')

@section('title', 'Reprehenderit')
@section('section', 'Reprehenderit in voluptate')

@section('header')
    @parent
@endsection

@if ($alert['show'] == 'yes')
    @component('alert')
    @slot('title')
        {{$alert['title']}}
    @endslot
    {{$alert['body']}}
    @endcomponent  
@endif

@section('content')
<div id="login-register">
  <div class="row align-items-center">
      <div class="col-sm-12 col-md-10 offset-md-2 col-lg-8 offset-lg-4">
          <form action="{{action('UserController@create')}}" method="post" id="create-user">
            {{ csrf_field() }}
            <input type="hidden" name="idRol" id="idRol" value="2">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" onkeypress="return letters(event)" >
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido" onkeypress="return letters(event)" >
                  </div>  
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="company" id="company" placeholder="Emepresa" onkeypress="return letters(event)" >
                  </div>  
              </div>
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="e-mail">
                  </div>  
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="position" id="position" placeholder="Cargo" onkeypress="return letters(event)" >
                  </div>  
              </div>
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="adress" id="adress" placeholder="Dirección" onkeypress="return numbersletterscharacters(event)">
                  </div>  
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Ciudad" onkeypress="return letters(event)" >
                  </div>  
              </div>
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefono" onkeypress="return numbers(event)" >
                  </div>  
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModalCenter">Ingresa</button>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <button id="create-user-button" type="button" class="btn btn-danger btn-block">Registrate</button>
                </div>
              </div>
            </div>

          </form>
      </div>
  </div>
</div>
@component('back') @endcomponent

@component('modal') @endcomponent

@endsection
@push('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/jquery-validate.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/onkeypress.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/user.js') }}"></script>
@endpush
