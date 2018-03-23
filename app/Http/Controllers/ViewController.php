<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\VisitorController as Visitor;
use App\Http\Controllers\CacheController as Cache;

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

    public static function create($idVideo)
    {
        $visitor = Visitor::getByUnique("email",Cache::get("email") );
        $view = new View;
        $view->idVisitor = $visitor['id'];
        $view->idVideo = $idVideo;
        $view->save();
    }


}