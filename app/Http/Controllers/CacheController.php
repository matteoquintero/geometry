<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */
    public static function check($value)
    {
        $response = (Cache::get($value)!="") ? true:false;
        return $response;

    }

    public static function get($value)
    {
        return Cache::get($value);

    }

    public static function create(Request $request)
    {
		$expiresAt = now()->addMinutes(30);
		Cache::put('email', $request->email, $expiresAt);
    }
}