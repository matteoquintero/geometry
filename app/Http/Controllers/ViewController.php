<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ViewModel as View;


class ViewController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */

    public static function get()
    {
        return View::all();
    }

    public static function create($idUser,$idVideo)
    {
        $view = new View;
        $view->idUser = $idUser;
        $view->idVideo = $idVideo;
        $view->save();

    }


}