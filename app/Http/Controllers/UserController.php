<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserModel as User;
use App\VideoModel as Video;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */
    public function users()
    {
        $users = User::all();
        return view('index', ['users' => $users]);
    }

    public function create(Request $request)
    {
        $videos = Video::all();
        $user = new User;
        $user->idRol = $request->idRol;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->company = $request->company;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->adress = $request->adress;
        $user->city = $request->city;
        $user->phone = $request->phone;
        $user->save();
        return view('index', ['videos' => $videos,'alert' => array('show' => 'yes', 'title' => 'Usuario','body'=> 'Bienvenido '.$request->name.' ya estás en nuestra base de datos' )]);

    }
}