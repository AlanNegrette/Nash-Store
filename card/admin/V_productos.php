<?php
require_once "../modelos/M_conexion.php";
include("includes/header.php"); 
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Productos publicados en la pagina:</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio Normal</th>
                        <th>Precio Rebajado</th>
                        <th>Cantidad</th>
                        <th>Categoria</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../controladores/C_tablaProductosAdmin.php");
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>