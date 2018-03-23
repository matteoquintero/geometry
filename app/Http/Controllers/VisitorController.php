<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\VideoController as Video;
use App\Http\Controllers\CacheController as Cache;
use App\Http\Controllers\ViewController as View;
use Exception;

use App\VisitorModel as Visitor;
use App\VisitorsModel as Visitors;


class VisitorController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */

    public static function showall()
    {
        $visitors = self::get();
        return view('visitors', ['visitors' => $visitors]);
    }

    public static function get()
    {
        return Visitors::all();
    }

    public static function create(Request $request)
    {
	    $videos = Video::get();

		try {

	        $visitor = new Visitor;
	        $visitor->name = $request->name;
	        $visitor->lastname = $request->lastname;
	        $visitor->company = $request->company;
	        $visitor->email = $request->email;
	        $visitor->position = $request->position;
	        $visitor->adress = $request->adress;
	        $visitor->city = $request->city;
	        $visitor->phone = $request->phone;
	        $visitor->save();

            Cache::put("email",$visitor->email);

            $idVideo=Cache::get("video");
            $video = Video::getbyid($idVideo);
            View::create($idVideo);
            return view('video', ['video' => $video, 'alert' => array('show' => 'yes', 'title' => 'Usuario','body'=> 'Bienvenido '.$request->name.' ya estás en nuestra base de datos (tines 30 minutos)') ]);

		}
		catch(Exception $exception){

            $body=$request->name.' intenta de nuevo.';
		    $errorCode = $exception->errorInfo[1];
		    if($errorCode == 1062){
	        	$body=$request->name.' el correo electrónico ya existe, prueba con otro.';
		    }
            return view('create-visitor', ['alert' => array('show' => 'yes', 'title' => 'Usuario','body'=> $body )]);
		}



    }

    public static function getByUnique($field,$unique){
        $visitor=Visitor::where($field,$unique)->first();
        $visitor=empty($visitor) ? $visitor : $visitor->toArray();
        return $visitor;   
    }

    public static function fieldExists($field,$value){
        return (empty(Visitor::where($field, $value)->pluck($field)->toArray())) ? false:true;
    }
}