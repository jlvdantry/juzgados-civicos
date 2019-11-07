<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;

class Files extends Model
{
    use Notifiable;
    protected $fillable = [
 'id', 'created_at', 'updated_at','id_tipoArchivo','id_filesystem','nombre','id_inmueble'
    ];


    public function upload($archivo,$id,$tipofile) {
      Log::debug('Files.php upload originalName='.$archivo->getClientOriginalName());
      $dato = new Files(
         [
        'nombre' => $archivo->getClientOriginalName(),
        'id_inmueble' => $id,
        'id_tipoArchivo' => $tipofile,
      ]);
      $dato->save();
      $new_name = $dato->id.'_'.rand() . '.' . $archivo->getClientOriginalExtension();
      $archivo->move('storage', $new_name);
      $data = array();
      $data['id_filesystem']=$new_name;
      $dato->update($data);
      return [ 'id' => $dato->id, 'filesystem' => $new_name ];
/*
      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
       'class_name'  => 'alert-success'
      ]);
      Log::debug('Files.php upload dato='.print_r($dato,true));
*/

    }

}
