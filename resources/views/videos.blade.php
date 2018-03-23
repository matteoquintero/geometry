@extends('layouts.app')

@section('title', 'Ut enim')
@section('section', 'Ut enim ad minim veniam')

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
    <div id="index">
        <div class="row">
            <div class="col-sm-12">
                <p></p>Sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        
        <div class="row justify-content-center">
            @foreach ($videos as $video)
                    <div class="col-sm-12 col-md-6 col-lg-4 video animated slideInLeft">
                        <a href="/video/{{$video->id}}">
                            <strong>{{ $video->name }}</strong>
                            <img  src="http://via.placeholder.com/380x200">
                            <i class="icon-play"></i>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
@endsection