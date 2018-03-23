<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CacheController as Cache;
use App\Http\Controllers\VisitorController as Visitor;
use App\Http\Controllers\ViewController as View;

use App\VideoModel as Video;

class VideoController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */
    public static function showall()
    {
        $videos = self::get();
        return view('videos', ['videos' => $videos,'alert' => array('show' => 'no')]);
    }

    public static function showbyid(Request $request, $id)
    {

       if ( Cache::check("email") && Visitor::fieldExists("email",Cache::get('email')) ) {

			$video = self::getbyid($id);
			View::create($id);
			return view('video', ['video' => $video, 'alert' => array('show' => 'no')]);
            
       }else{

            Cache::put("video",$id);
            return view('create-visitor', ['alert' => array('show' => 'yes', 'title' => 'Autenticación','body'=> 'Ingresa o regístrate para ver los videos' )]);   
       }

    }

     public static function getbyid($id)
    {
		return Video::find($id);
    }

    public static function get(){
    	return Video::all();
    }
}