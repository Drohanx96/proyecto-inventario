<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AWGI Sistema</title>
    <link rel="stylesheet" href="/proyecto-inventario/css/bootstrap.min.css">
    <link rel="stylesheet" href="/proyecto-inventario/style.css">
</head>

<body>

    <nav class="nav primario fixed-top py-3 d-flex justify-content-between">
        <div class="d-flex">
            <a href="/proyecto-inventario/view/reportes/mostrar.php" class="navbar-brand texto">
                <div class="fs-2 font-weight-bold ms-4 me-5 py-1">AWGI SISTEMA</div>
            </a>
            <?php
            date_default_timezone_set("America/Caracas");
            ?>
            <p class="texto"><?php echo date("Y-m-d") ."</br>". date("h:i a") ?> </p>
        </div>
        <div class="d-flex pe-4">
            <a class="nav-link logout" href="/proyecto-inventario/view/login/login.php" class="navbar-brand"><i class="fa-solid fa-right-from-bracket text-danger"></i></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand d-flex flex-column align-item-start pt-4" id="sidebar">
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100 primario pt-3">
                <a href="/proyecto-inventario/view/reportes/mostrar.php" class="nav-link texto ps-4">Reportes</a>
            </li>
            <li class="nav-item dropdown w-100 primario">
                <a class="nav-link dropdown-toggle texto ps-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
                <ul class="dropdown-menu primario">
                    <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/articulos/mostrar.php">Buscar</a></li>
                    <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/articulos/agregar.php">Agregar</a></li>
                    <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/categorias/agregar.php">Categorias</a></li>
                    <li><a class="dropdown-item nav-link texto ps-4" href="/proyecto-inventario/view/fabricas/agregar.php">Fabricas</a></li>
                </ul>
            </li>
            <li class="nav-item w-100 primario">
                <a href="/proyecto-inventario/view/usuarios/agregar.php" class="nav-link texto ps-4">Usuarios</a>
            </li>
        </ul>
    </nav>