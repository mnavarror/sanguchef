<?php
require "loginheader.php";
require 'php/conectar.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
$consulta = "SELECT * FROM producto WHERE cod_producto= $id;";
$respuesta = mysqli_query($conectar, $consulta);
//guardo la unica tupla en el row por eso no va en un while, ya que la consulta solo devuelve una tupla
$row = $respuesta->fetch_array();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sanguchef</title><!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Deliccio Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- FlexSlider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //FlexSlider -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>


<!-- banner Admin--><?php if (isset($_SESSION['username'])&&$_SESSION['username']=="Admin" ) echo '
 <div class="banner1">
    <div class="container">
        <div class="header-nav">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="index.php">Sanguchef <span>Comida Saludable y Rica</span></a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Inicio</a></li>
                        <li ><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li ><a href="contacto.php">Contacto</a></li>
                        <li class="active"><a href="adminZone.php">Administrar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>';?>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>

<!-- services -->
<div class="services">
    <br class="container">
    <div class="welcome-info">
        <div class="col-md-9 col-xs-offset-3">
        <form name="formulario" method="post" action="modificarProd.php" >
            <table>
            <th colspan="2">MODIFICAR PRODUCTO</th>
            <tr>
                <td>ID: </td>
                <td><input type="text" name="id" value="<?php if(!empty($_GET['id'])){ echo $row['cod_producto']; }?> " readonly="readonly"></td>
            </tr>
            <tr>
                <td>NOMBRE: </td>
                <td><input type="text" name="nombre" value="<?php if(!empty($_GET['id'])){echo $row['nombre_producto'];} ?>"></td>
             </tr>
                <tr>
                <td>VALOR: </td>
                 <td><input type="number"  name="valor" value="<?php if(!empty($_GET['id'])){echo $row['valor_producto'];} ?>"></td>
                </tr>
            </table>
            <input value="Modificar" name="modificar" type="submit" class="col-xs-offset-2"/>
        </form>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<!-- //services -->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-row">
            <div class="col-md-3 footer-grids">
                <h3>Navegación</h3>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="conocenos.php">Sobre nosotros</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="typo.html">Typo</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grids">
                <h3>Soporte</h3>
                <ul>
                    <li><a href="productos.php">Services</a></li>
                    <li><a href="#">Help Center</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grids">
                <h5><a href="index.php">Sanguchef</a></h5>
                <p><a href="mailto:info@example.com">mail@example.com</a></p>
                <p>+2 000 222 1111</p>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<div class="footer-bottom">
    <div class="container">
        <p>Copyright © 2015 Deliccio. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>

</body>
</html>
<?php

if (isset($_REQUEST['modificar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $valor = $_POST['valor'];

    $consulta = "UPDATE producto SET nombre_producto ='$nombre', valor_producto ='$valor' WHERE cod_producto ='$id'";

    $ejecutar = mysqli_query($conectar, $consulta);

    if($ejecutar){

        print '<script language="JavaScript">';
        print 'alert("PRODUCTO MODIFICADO EXITOSAMENTE");';
        print 'window.location="modificarProd.php?id='.$id.'"';
        print '</script>';

    }
    else{
        print '<script language="JavaScript">';
        print 'alert("EL PRODUCTO NO PUDO SER MODIFICADO");';
        print 'window.location="modificarProd.php"';
        print '</script>';
    }
}

?>