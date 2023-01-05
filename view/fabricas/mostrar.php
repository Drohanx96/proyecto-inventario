<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/header.php";
?>


<div class="container" id="contenedor">
    <div class="row g-5 justify-content-md-center">


        <div class="col col-md-12">
            <span class="text-center primario text-light pt-1">
                FABRICAS
            </span>
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Agregado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><i class="fa-solid fa-trash pe-2 text-danger"></i><i class="fa-solid fa-pen-to-square ps-2 text-success"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><i class="fa-solid fa-trash pe-2 text-danger"></i><i class="fa-solid fa-pen-to-square ps-2 text-success"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Igor</td>
                        <td><i class="fa-solid fa-trash pe-2 text-danger"></i><i class="fa-solid fa-pen-to-square ps-2 text-success"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="col-md-auto">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>


<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/footer.php";
?>