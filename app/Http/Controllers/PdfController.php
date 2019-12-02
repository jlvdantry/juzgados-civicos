<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boletas;
use Illuminate\Support\Facades\Log;

class PdfController extends Controller
{

public function hechos($id) 
    { 
        $filtro=array();
        array_push($filtro,[ "infra.id","=",$id ] );
        $infractor = Boletas::getConcatalogosConLimite(\Auth::user(),$filtro);
        Log::debug('PdfController.php hechos infractor='.print_r($infractor,true));
        $view =  \View::make('pdf.hechos', compact('infractor'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }
 
    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
