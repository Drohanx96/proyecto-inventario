<?php
require_once "/xampp/htdocs/proyecto-inventario/config/app.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AWGI Sistema</title>
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="/proyecto-inventario/view/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/proyecto-inventario/view/style.css">
</head>

<body>
    <?php
    $peticionAjax = false;
    require_once "/xampp/htdocs/proyecto-inventario/controller/vistasControlador.php";
    $IV = new vistasControlador();

    $vistas = $IV->obtener_vista_controlador();

    if ($vistas == "login" || $vistas == "404") {
        require_once "/xampp/htdocs/proyecto-inventario/view/contenido/" . $vistas . "-view.php";
    } else {

    ?>

        <nav class="nav primario fixed-top py-2 d-flex justify-content-between">
            <div class="d-flex">
                <a href="/proyecto-inventario/view/reportes/mostrar.php" class="navbar-brand texto">
                    <div class="fs-2 font-weight-bold ms-4 me-5 py-1">AWGI SISTEMA</div>
                </a>

                <p class="texto">
                    <?php
                    echo date("d-m-Y") . "</br>" . date("h:i a")
                    ?>
                </p>
            </div>
            <div class="d-flex pe-4">
                <a class="nav-link logout" href="/proyecto-inventario/view/contenido/login-view.php" class="navbar-brand"><i class="fa-solid fa-right-from-bracket text-danger"></i></a>
            </div>
        </nav>

        <nav class="navbar cuarto navbar-expand d-flex flex-column align-item-start pt-4" id="sidebar">
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100 secundario pt-3">
                    <a href="/proyecto-inventario/view/reportes/mostrar.php" class="nav-link texto ps-4">Reportes</a>
                </li>
                <li class="nav-item dropdown w-100 secundario">
                    <a class="nav-link dropdown-toggle texto ps-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
                    <ul class="dropdown-menu primario">
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/articulos/mostrar.php">Buscar</a></li>
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/articulos/agregar.php">Agregar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown w-100 secundario">
                    <a class="nav-link dropdown-toggle texto ps-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
                    <ul class="dropdown-menu primario">
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/categorias/mostrar.php">Buscar</a></li>
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/categorias/agregar.php">Agregar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown w-100 secundario">
                    <a class="nav-link dropdown-toggle texto ps-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Fabricas</a>
                    <ul class="dropdown-menu primario">
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/fabricas/mostrar.php">Buscar</a></li>
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/fabricas/agregar.php">Agregar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown w-100 secundario">
                    <a class="nav-link dropdown-toggle texto ps-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Usuarios</a>
                    <ul class="dropdown-menu primario">
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/usuarios/mostrar.php">Buscar</a></li>
                        <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/usuarios/agregar.php">Agregar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    <?php
    }
    ?>