<?php
require "loginheader2.php";
require 'php/conectar.php';
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

<!-- banner Normal --><?php if (!isset($_SESSION['username'])) echo '
<div class="banner1">
    <div class="container">
        <div class="header-nav">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="index.php">Sanguchef<span>Comida Saludable y Rica</span></a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Inicio</a></li>
                        <li class="active"><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        
    </div>
    <div class="clearfix"></div>
</div>
</div> '; ?>
<!-- banner Logged --><?php if (isset($_SESSION['username'])&&$_SESSION['username']!="Admin" ) echo '
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
                        <li class="active"><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li ><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>';?>
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
                        <li class="active" ><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li ><a href="contacto.php">Contacto</a></li>
                        <li ><a href="adminZone.php">Administrar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>';?>
<div class="identificador col-xs-13 ">
    <form class="logout form-inline container " name="" method="post" action="logout.php">
        <h3>
                <span  class=" label-warning label " id="logout" ><?php if (isset($_SESSION['username'])) echo 'Identificado como: ' . '<strong>' . $_SESSION['username'] . '</strong>' . '
                <button name="Submit" id="submita" class="btn btn-danger btn-sm col-xs-offset-2 "  type="submit">Salir</button>'; else echo "Identificado como: Visita"?> </span>
        </h3>
    </form>
</div>
<!-- services -->
	<div class="services">
		<div class="container">
			<div class="welcome-info">
                <h3> Productos </h3>
                <p class="proident">Disfruta nuestros productos</p>
			<div class="col-sm-13 " align="center" >
                                <?php
                                while ($row = $det_productos_disp->fetch_array()) {
                                    ?>
                                    <li class="row list-group-item "><h6 ><?php echo $row['nombre_producto'].' $'.$row['valor_producto']; ?> </h6>
                                       </li>
                                    <?php
                                }
                                ?>
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab1').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
				</script>
			</div>
			</div>
            <div class="line"></div>
			<div class="clearfix"> </div>

            <div class="welcome-info">
                <h3> Ingredientes </h3>
                <p class="proident">Los mejores ingredientes a tu elección</p>
                <div class="col-sm-13 "  >
                    <div class="sap_tabs" align="center">
                        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Proteinas</span></li>
                                <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Lácteos</span></li>
                                <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>Verduras</span></li>
                                <li class="resp-tab-item grid4" aria-controls="tab_item-3" role="tab"><span>Aderezos</span></li>
                                <div class="clear"></div>
                            </ul>
                            <div class="resp-tabs-container">
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <?php
                                    while ($row = $ingProtDisp->fetch_array()) {
                                        ?>
                                        <li class="row list-group-item "><h6 ><?php echo $row['nombre_ingrediente']; ?></h6>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                    <?php
                                    while ($row = $ingLactDisp->fetch_array()) {
                                        ?>
                                        <li class="row list-group-item "><h6 ><?php echo $row['nombre_ingrediente']; ?></h6>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                    <?php
                                    while ($row = $ingVerdDisp->fetch_array()) {
                                        ?>
                                        <li class="row list-group-item "><h6 ><?php echo $row['nombre_ingrediente']; ?> </h6>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                                    <?php
                                    while ($row = $ingAdereDisp->fetch_array()) {
                                        ?>
                                        <li class="row list-group-item "><h6 ><?php echo $row['nombre_ingrediente']; ?></h6>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
            <div class="clearfix"> </div>
	</div>
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
                <p><a href="contacto.php">contacto</a></p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>