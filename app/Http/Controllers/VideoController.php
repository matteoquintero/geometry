<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VideoModel as Video;
use Illuminate\Support\Facades\Cache;


class VideoController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('index', ['videos' => $videos,'alert' => array('show' => 'no')]);
    }

    public function getbyid(Request $request, $id)
    {

       if (Cache::get('email')!="") {
			$video = Video::find($id);
			return view('video', ['video' => $video]);
       }else{
            return view('login-register', ['alert' => array('show' => 'yes', 'title' => 'Autenticación','body'=> 'Ingresa o registrate para ver los videos' )]);   
       }

    }
}