<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alcaldias;
use App\Giros;
use App\Tiposimulacros;
use App\Figuras;
use App\Entidades;
use App\Tiposdeestructura;
use App\Tiposdecimentacion;
use App\Tiposdeconstruccion;
use App\Zonasgeotecnica;
use App\Puntosdereunion;
use App\Tiposdeestablecimiento;
use App\Inmuebles;

class RegistroEstController extends Controller
{
    public function showRegistro($est=0,$inm=0){
      $alcaldias= Alcaldias::all();
      $giros= Giros::all();
      $tiposimulacros= Tiposimulacros::all();
      if ($inm!=0) {
           $myinmu = new Inmuebles();
           $figuras= $myinmu->getFigurasfaltantesbyIDUnicas($inm);
      } else {
           $fig= new Figuras();
           $figuras= $fig->getFiguras();
      }
      $entidades= Entidades::all();
      $tiposdeestructura= Tiposdeestructura::all();
      $tiposdecimentacion= Tiposdecimentacion::all();
      $tiposdeconstruccion= Tiposdeconstruccion::all();
      $zonasgeotecnica= Zonasgeotecnica::all();
      $puntosdereunion= Puntosdereunion::all();
      $tiposdeestablecimiento= Tiposdeestablecimiento::all();
      return view('registro-establecimiento', compact ('alcaldias', 'giros', 'tiposimulacros','figuras','entidades','tiposdeestructura','tiposdecimentacion','tiposdeconstruccion','zonasgeotecnica','puntosdereunion','tiposdeestablecimiento'));
    }
}
