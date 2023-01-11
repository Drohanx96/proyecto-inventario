<?php

require_once "/proyecto-inventario/model/vistaModelo.php";

class vistasControlador extends vistasModelo
{
    /* Controlador Obtener Vistas */
    public function obtener_vista_controlador()
    {
        if (isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $respuesta = vistasModelo::obtener_vistas_modelo($ruta[0]);
        } else {
            $respuesta = "login";
        }

        return $respuesta;
    }
}
