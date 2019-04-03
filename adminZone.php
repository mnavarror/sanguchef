<?php
require "loginheader.php";
require 'php/conectar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sanguchef</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Deliccio Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
                                       Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='https://fonts.googleapis.com/css?family=UnifrakturMaguntia' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,600italic,700,400' rel='stylesheet'
          type='text/css'>
    <!-- FlexSlider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //FlexSlider -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
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
      <h3> Productos </h3>
        <div class="welcome-info">
            <div class="col-sm-13 "  >
                <table border="1" class="col-md-9 col-md-offset-1">
                    <th>Codigo Producto</th>
                    <th>Nombre</th>
                    <th>valor</th>
                    <th>Disponible</th>
                    <?php while ($row = $detProductos->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $row['cod_producto']?></td>
                            <td><?php echo $row['nombre_producto']?></td>
                            <td><?php echo $row['valor_producto']?></td>
                            <td><?php if($row['disponible_producto']){
                                    echo "Si";
                                }
                                else
                                    echo "No";
                                    ?></td>
                            <td><a href="modificarProd.php?id=<?php echo $row['cod_producto']  ?>">Modificar</a></td>
                            <td><a href="adminZone.php?idProd=<?php echo $row['cod_producto']  ?>&val=<?php echo $row['disponible_producto']?>">Disponible? Si/No </a></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <div ><input style="margin-top: 1.5em" class="col-md-offset-1 col-md-2" type="button" value="Crear Nuevo" onClick="window.location.href='insertarProducto.php'"></div>
            </div>

    <div class="clearfix"> </div>
        </br>
            <h3> Ingredientes </h3>
            <div class="col-sm-13 "  >
                <table border="1" class="col-md-9 col-md-offset-1">
                    <th>Codigo Ingrediente</th>
                    <th>Nombre</th>
                    <th>valor</th>
                    <th>Tipo</th>
                    <th>Disponible</th>
                    <?php while ($row = $detIngredientes2->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $row['codigo_ingrediente']?></td>
                            <td><?php echo $row['nombre_ingrediente']?></td>
                            <td><?php echo $row['valor_ingrediente']?></td>
                            <td><?php switch ($row['codigo_tipo_ingrediente']) {
                                    case 1:
                                        echo "Proteina";
                                        break;
                                    case 2:
                                        echo "Lacteo";
                                        break;
                                    case 3:
                                        echo "Vegetal";
                                        break;
                                    case 4:
                                        echo "Aderezo";
                                        break;
                                    case 5:
                                        echo "Otro";
                                        break;
                                }
                                ?></td>
                            <td><?php if($row['disponible_ingrediente']){
                                    echo "Si";
                                }
                                else
                                    echo "No";
                                ?></td>
                            <td><a href="modificarIngrediente.php?id=<?php echo $row['codigo_ingrediente']  ?>">Modificar</a></td>
                            <td><a href="adminZone.php?idIng=<?php echo $row['codigo_ingrediente']?>&val=<?php echo $row['disponible_ingrediente']?>">Disponible? Si/No </a></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <div><input style="margin-top: 1.5em; margin-bottom: 1.5em"  class="col-md-offset-1 col-md-2" type="button" value="Crear Nuevo" onClick="window.location.href='insertarIngrediente.php'"></div>
            </div>
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


if(!empty($_GET['idProd'])) {
    $idProd = $_GET['idProd'];
    $val= $_GET['val'];
    if ($val == 0) {
        $consulta = "UPDATE producto SET disponible_producto=1 WHERE cod_producto ='$idProd'";
    } else {
        $consulta = "UPDATE producto SET disponible_producto=0 WHERE cod_producto ='$idProd'";
    }
    $ejecutar = mysqli_query($conectar, $consulta);

//verifico si fue exitoso
    if ($ejecutar) {
//esto es JavaScript y lanza una ventana emergente y luego redirecciona a la misma pagina para ver los cambios
        print '<script language="JavaScript">';
        print 'alert("INGREDIENTE MODIFICADO EXITOSAMENTE");';
        print 'window.location="adminZone.php"';
        print '</script>';
    } else {
        print '<script language="JavaScript">';
        print 'alert("INGREDIENTE NO MODIFICADO");';
        print 'window.location="adminZone.php"';
        print '</script>';

    }
}


if(!empty($_GET['idIng'])) {
    $val= $_GET['val'];
    $idIng= $_GET['idIng'];
    if ($val == 0) {
        $consulta = "UPDATE ingrediente SET disponible_ingrediente=1 WHERE codigo_ingrediente ='$idIng'";
    } else {
        $consulta = "UPDATE ingrediente SET disponible_ingrediente=0 WHERE codigo_ingrediente ='$idIng'";
    }
    $ejecutar = mysqli_query($conectar, $consulta);

//verifico si fue exitoso
    if ($ejecutar) {
//esto es JavaScript y lanza una ventana emergente y luego redirecciona a la misma pagina para ver los cambios
        print '<script language="JavaScript">';
        print 'alert("PRODUCTO MODIFICADO EXITOSAMENTE");';
        print 'window.location="adminZone.php"';
        print '</script>';
    } else {
        print '<script language="JavaScript">';
        print 'alert("PRODUCTO NO MODIFICADO");';
        print 'window.location="adminZone.php"';
        print '</script>';

    }

}

?>
