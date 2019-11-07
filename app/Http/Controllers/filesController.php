<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Files;

class filesController extends Controller
{

    public function upload(Request $request)
    {
      //Log::debug('fileController='.print_r($request->all(),true));
      $image = $request->id_file_0001;
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      log::debug('fileController action public_path='.public_path('storage').' new_name ='.$new_name);
      $image->move('storage', $new_name);
      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
       'class_name'  => 'alert-success'
      ]);
      $dato = new Files([
          
      ]);

    }
    public function alta($archivo)
    {
      Log::debug('filesController.php='.print_r($archivo->originalName,true));
    }

     
}
