<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\VideoController as Video;
use App\Http\Controllers\ExcelController as Excel;

use App\UserModel as User;
use App\UsersModel as Users;


class UserController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */

    public static function showall()
    {
        $users = self::get();
        //Excel::download($users);
        return view('users', ['users' => $users]);
    }

    public static function get()
    {
        return Users::all();
    }

    public static function create(Request $request)
    {
	    $videos = Video::get();

		try {

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

	        $body='Bienvenido '.$request->name.' ya estás en nuestra base de datos <small>(tienes 30 minutos)</small>';

		}
		catch (Illuminate\Database\QueryException $e){
		    $errorCode = $e->errorInfo[1];
		    if($errorCode == 1062){
	        	$body=$request->name.'el correo electrónico ya existe, prueba con otro.';
		    }
		}

        return view('index', ['videos' => $videos,'alert' => array('show' => 'yes', 'title' => 'Usuario','body'=> $body )]);

    }

    public static function getByUnique($field,$unique){
        $user=User::where($field,$unique)->first();
        $user=empty($user) ? $user : $user->toArray();
        return $user;   
    }

    public static function fieldExists($field,$value){
        return (empty(User::where($field, $value)->pluck($field)->toArray())) ? false:true;
    }
}