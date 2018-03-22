@extends('layouts.app')

@section('title', 'Duis aute')
@section('section', 'Duis aute irure dolor')

@section('header')
    @parent
@endsection

@section('content')
<div id="video">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-6 col-lg-8">
            <h5>{{ $video->name }}</h5>
            <iframe width="100%" height="400px" src="http://www.youtube.com/embed/{{ $video->idYoutube }}?autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>​
        </div>
    </div>
</div>
@component('back') @endcomponent

@endsection