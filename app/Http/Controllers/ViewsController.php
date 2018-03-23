<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ViewsModel as Views;


class ViewsController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */

    public static function showbyid(Request $request, $id)
    {	
        $views = self::getbyid($id);
		return view('views', ['views' => $views,'id' => $id]);
    }
     public static function getbyid($id)
    {
		return Views::where('idVisitor', $id)->get();
    }




}