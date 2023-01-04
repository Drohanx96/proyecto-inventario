<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/header.php";
?>


<div class="container" id="contenedor">
    <span class="text-center primario text-light py-2 mb-3">
        AGREGAR PRODUCTO
    </span>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputtext4" class="form-label visually-hidden">text</label>
            <input type="text" class="form-control" id="inputtext4" placeholder="Descripcion">
        </div>
        <div class="col-md-3">
            <label for="inputState" class="form-label visually-hidden">State</label>
            <select id="inputState" class="form-select">
                <option selected>Categoria.</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="inputState" class="form-label visually-hidden">State</label>
            <select id="inputState" class="form-select">
                <option selected>Fabrica</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="inputnumber4" class="form-label visually-hidden">number</label>
            <input type="number" class="form-control" id="inputnumber4" placeholder="Cantidad">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    ¿Vence?
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
        </div>
    </form>
</div>


<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/footer.php";
?>