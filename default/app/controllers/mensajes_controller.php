<?php

/**
 * Controlador que esta encargado de los mensajes
 */
class MensajesController extends AppController
{

  public function index()
  {
    $this->mensajes = Mensajes::all();
  }

  //Metodos Ajax
  public function enviar_mensaje()
  {
    $resp = (New Mensajes)->ingresar_mensajes();
    $this->data = $resp;
    View::select(null, 'json');
  }
}


?>
