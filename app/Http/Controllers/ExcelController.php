<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{

    public static function download($data)
    {
        \Excel::create('thecodingstuff', function($excel) {
            $excel->sheet('thecodingstuff', function($sheet) {
                $sheet->loadView('users');
            });
        })->download('xls');

    }
    
}