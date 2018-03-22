<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserModel as User;
use App\VideoModel as Video;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */
    public function check()
    {
        $users = User::all();
        if (Cache::get('email')!="") {
	        $videos = Video::all();
	        return view('index', ['videos' => $videos,'alert' => array('show' => 'no')]);
        }else{
             return view('login-register', ['alert' => array('show' => 'yes', 'title' => 'Autenticación','body'=> 'Ingresa o registrate para ver los videos' )]);   	
        }

    }

    public function create(Request $request)
    {
		$expiresAt = now()->addMinutes(30);
		Cache::put('email', $request->email, $expiresAt);

    }
}