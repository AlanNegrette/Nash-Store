<!DOCTYPE HTML>
<html>
<head>
<title>Nash Store</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="shop.html">COMPRAR</a></li>	    	
						    	<li><a href="publicar.php">PUBLICAR</a></li>
								<li><a href="contact.html">CONTACTAR</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>

<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtPrecio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include('Backend/conexion.php');

switch($accion){ 

    case  "Agregar":
      echo "presionado boton agregar";   
      $sentenciaSQL=$conn->prepare("INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES (:nombre,:descripcion,:precio,:imagen);");
      $sentenciaSQL-> bindParam(':nombre',$txtNombre);
      $sentenciaSQL-> bindParam(':descripcion',$txtDescripcion);
      $sentenciaSQL-> bindParam(':nombre',$txtPrecio);
      $sentenciaSQL-> bindParam(':nombre',$txtImagen);
      $sentenciaSQL->execute();
      break;

    case  "Modificar":
      echo "presionado boton modificar";
      break;

    case  "Cancelar":
      echo "presionado boton cancelar";
      break;
}

?>

<div class="col-md-5">

        <div class="card">
          <div class="card-header">
            Publicaciones
          </div>

          <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                <div class = "form-group">
                <label for="txtID">ID</label>
                <input type="text" class="form-control" id="txtID" name="txtID" placeholder="Introduzca ID">
                </div>

                <div class = "form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del producto">
                </div>

                <div class = "form-group">
                <label for="txtDescripcion">Descripcion</label>
                <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" placeholder="Descripcion del producto">
                </div>

                <div class = "form-group">
                <label for="txtPrecio">Precio</label>
                <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Precio del producto">
                </div>

                <div class = "form-group">
                <label for="txtImagen">Imagen</label>
                <input type="file" class="form-control" id="txtImagen" name="txtImagen" placeholder="Imagen del producto">
                </div>

                <div class="btn-group" role="group" aria-label="">
                  <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                  <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                  <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>
            
          </div>
        </div>

        
                        
</div>
<div class="col-md-7">
        Tus publicaciones

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2</td>
              <td>aa</td>
              <td>x</td>
              <td>Seleccionar Borrar</td>
            </tr>
          </tbody>
        </table>
</div>