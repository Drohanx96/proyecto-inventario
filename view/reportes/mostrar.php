<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/header.php";
?>

<div class="container" id="contenedor">
    <div class="row justify-content-md-center gy-5">
        <div class="col col-md-6">
            <span class="text-center primario texto pt-1">
                VENCE
            </span>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Desde</th>
                        <th scope="col">Hasta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Igor</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-md-6">
            <span class="text-center primario texto pt-1">
                STOCK
            </span>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div class="col-md-auto">
            <a class="btn btn-primary" href="./historial.php" role="button">Historial</a>
        </div>
    </div>
</div>



<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/footer.php";
?>