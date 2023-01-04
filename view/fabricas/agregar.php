<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/header.php";
?>


<div class="container" id="contenedor">
    <span class="text-center primario text-light py-2 mb-3">
        AGREGAR FABRICA
    </span>
    <form class="row g-3">
        <div class="col-md-9">
            <label for="inputtext4" class="form-label visually-hidden">text</label>
            <input type="text" class="form-control" id="inputtext4" placeholder="Fabrica">
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
        </div>
    </form>
</div>


<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/footer.php";
?>