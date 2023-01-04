<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/header.php";
?>


<div class="container" id="contenedor">
    <span class="text-center primario text-light py-2 mb-3">
        AGREGAR USUARIO
    </span>
    <form class="row g-3 justify-content-center">
        <div class="col-7">
            <label for="inputtext4" class="form-label visually-hidden">text</label>
            <input type="text" class="form-control" id="inputtext4" placeholder="Nombre">
        </div>
        <div class="col-7">
            <label for="inputtext4" class="form-label visually-hidden">text</label>
            <input type="text" class="form-control" id="inputtext4" placeholder="Usuario">
        </div>
        <div class="col-7">
            <label for="inputtext4" class="form-label visually-hidden">text</label>
            <input type="passwprd" class="form-control" id="inputtext4" placeholder="Contraseña">
        </div>
        <div class="col-7">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Eliminar articulos
                </label>
            </div>
        </div>
        <div class="col-7">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Crear usuarios
                </label>
            </div>
        </div>
        <div class="col-7">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Modificar usuarios
                </label>
            </div>
        </div>
        <div class="col-7">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
        </div>
    </form>
</div>


<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/footer.php";
?>