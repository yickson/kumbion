<?php

/**
 * Modelo de mensajes
 */
class Mensajes extends LiteRecord
{

  public function ingresar_mensajes()
  {
    $nombre = Input::post('nombre');
    $mensaje = Input::post('mensaje');

    $datos = (New Mensajes);
    $datos->nombre = $nombre;
    $datos->mensaje = $mensaje;
    if($datos->save()){
      $respuesta = Mensajes::get($datos->id);
      $respuesta->resp = true;
      return $respuesta;
    }else{
      return 'No se pudo guardar los datos del mensaje';
    }
  }
}


?>
