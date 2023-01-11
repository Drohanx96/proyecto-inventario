<?php

class vistasModelo
{

    /* Modelo Obtener Vistas */
    protected static function obtener_vistas_modelo($vistas)
    {
        $listaBlanca = [];

        if (in_array($vistas, $listaBlanca)) {
            if (is_file("/proyecto-inventario/view" . $vistas . "-view.php")) {
                $contenido = "/proyecto-inventario/view" . $vistas . "-view.php";
            } else {
                $contenido = "404";
            }
        } elseif ($vistas == "login" || $vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }

        return $contenido;
    }
}
