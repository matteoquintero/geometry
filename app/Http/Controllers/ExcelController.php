<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\ViewController as View;
use App\Http\Controllers\ViewsController as Views;
use App\Http\Controllers\VisitorController as Visitor;


class ExcelController extends Controller
{
    /**
     * Show a list of all of the application's video.
     *
     * @return Response
     */

    public static function visitors()
    {
        $visitors = Visitor::get();
        $file = 'visitors-'.date("Y-M-D")."-".time().'.xls';
        ob_start();
        echo "Nombre,Apellido,Emepresa,Correo,Cargo,Dirección,Ciudad,Telefono,Videos Vistos\n";
        foreach ($visitors as $key => $value) {
            echo "$value->name,$value->lastname,$value->company,$value->email,$value->position,$value->adress,$value->city,$value->phone,$value->times\n";
        }
        $content = ob_get_contents();
        ob_end_clean();
        header("Expires: 0");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Content-Type: application/xls");  
        header("Pragma: no-cache");  header("Content-type: application/vnd.ms-excel;charset:UTF-8");
        header('Content-length: '.strlen($content));
        header('Content-disposition: attachment; filename='.basename($file));
        echo $content;
        exit();
    }
    
    public static function view(Request $request, $id)
    {
        $visitor = Visitor::getByUnique("id",$id);
        $views = Views::getbyid($id);

        $file = 'views-'.date("Y-M-D")."-".time().'.xls';
        ob_start();
        echo "Estos son los videos que ah visto el visitante ".$visitor['name']." ".$visitor['lastname']."\n";
        echo "Nombre,Link,Fecha\n";
        foreach ($views as $key => $value) {
            echo "$value->name,https://www.youtube.com/watch?$value->idYoutube,$value->date\n";
         
        }
        $content = ob_get_contents();
        ob_end_clean();
        header("Expires: 0");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");  header("Content-type: application/vnd.ms-excel;charset:UTF-8");
        header('Content-length: '.strlen($content));
        header('Content-disposition: attachment; filename='.basename($file));
        echo $content;
        exit();
    }
    public static function views()
    {
        $views = View::get();

        $file = 'views-'.date("Y-M-D")."-".time().'.xls';
        ob_start();
        echo "Nombre visitante,Nombre video,Link,Fecha visto\n";
        foreach ($views as $key => $value) {
            echo "$value->nameVisitor $value->lastnameVisitor,$value->name,https://www.youtube.com/watch?$value->idYoutube,$value->date\n";
         
        }
        $content = ob_get_contents();
        ob_end_clean();
        header("Expires: 0");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");  header("Content-type: application/vnd.ms-excel;charset:UTF-8");
        header('Content-length: '.strlen($content));
        header('Content-disposition: attachment; filename='.basename($file));
        echo $content;
        exit();
    }

}