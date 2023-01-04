<?php
require_once "/xampp/htdocs/proyecto-inventario/view/head/header.php";
?>


<div class="container" id="contenedor">
    <div class="row g-5 justify-content-md-center">
        <form class="row row-cols-lg-auto g-3 align-items-center">
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormInputGroupUsername">Producto</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Producto">
                </div>
            </div>

            <div class="col-12">
                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                <select class="form-select" id="inlineFormSelectPref">
                    <option selected>Categoria</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                <select class="form-select" id="inlineFormSelectPref">
                    <option selected>Fabrica</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>


        <div class="col col-md-12">
            <span class="text-center primario text-light pt-1">
                REGISTRO
            </span>
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fabrica</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Agregado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><i class="fa-solid fa-trash pe-2 text-danger"></i><i class="fa-solid fa-pen-to-square ps-2 text-success"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><i class="fa-solid fa-trash pe-2 text-danger"></i><i class="fa-solid fa-pen-to-square ps-2 text-success"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Igor</td>
                        <td>Igor</td>
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