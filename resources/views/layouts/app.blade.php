<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
        <title>Geometry - @yield('title')</title>
    </head>
    <body>
        @section('header')
            <header class="container-fluid">
                <div class="row align-items-end">
                    <div class="col-sm-12 col-md-6">
                        <h1>Laboris nisi</h1>
                        <h2> Excepteur sint <strong>Officia</strong> anim id est</h2>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h3>@yield('section')</h3>
                    </div>
                </div>
            </header>
        @show
        <section class="container-fluid">
             @yield('content')
        </section>
        @section('footer')
            <footer class="container-fluid">
                <div class="row align-items-center">
                    <div class="col">
                        <p>#LoremImpsum</p>
                    </div>
                </div>
            </footer>
        @show
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @stack('scripts')
</html>
