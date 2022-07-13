<?php
include("includes/header.php"); 
require_once ("../modelos/M_conexion.php");

if (isset($_POST)) {
    if (!empty($_POST)){ 
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $query = mysqli_query($conexion, "INSERT INTO admins(usuario, nombre, clave) VALUES ('$usuario', '$nombre', '$clave')");
    }
}
?>
<div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <H2>AGREGAR ADMIN</H2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Usuario</label>
                                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Clave</label>
                                <input id="clave" class="form-control" type="text" name="clave" placeholder="Clave" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Registrar</button>
<?php include("includes/footer.php"); ?>