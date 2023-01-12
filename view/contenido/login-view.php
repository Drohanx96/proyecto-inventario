<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="/proyecto-inventario/view/css/bootstrap.min.css">
    <link rel="stylesheet" href="/proyecto-inventario/view/style.css">
    <script src="https://kit.fontawesome.com/0ed1404235.js" crossorigin="anonymous"></script>
</head>

<body class="fondo">
    <span class="text-center primario texto py-2 mb-3">
        <h1>AWGI SISTEMA</h1>
    </span>
    <div class="container secundario" style="width: 400px; padding-bottom: 50px; margin-top: 50px; border-radius: 30px;">
        <span class="text-center texto pt-2 fs-2">
            BIENVENIDO
        </span>
        <span class="text-center texto fs-3">
            Iniciar Sesion
        </span>
        <form class="row g-3 justify-content-center">
            <div class="col-10">
                <label for="inputtext4" class="form-label visually-hidden">text</label>
                <input type="text" class="form-control" id="inputtext4" placeholder="Usuario">
            </div>
            <div class="col-10">
                <label for="inputtext4" class="form-label visually-hidden">text</label>
                <input type="passwprd" class="form-control" id="inputtext4" placeholder="Contraseña">
            </div>
            <div class="col-10">
                <button type="submit" class="btn btn-primary"><a href="/proyecto-inventario/view/reportes/mostrar.php" class="text-light text-decoration-none">Iniciar Sesion</a></button>
                <button type="reset" class="btn btn-outline-light">Limpiar</button>
            </div>
        </form>
    </div>


</body>

</html>