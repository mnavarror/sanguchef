<?php
require "loginheader2.php";

if (isset($_REQUEST['enviar'])) {
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $numero=$_POST['numero'];
    $sujeto=$_POST['sujeto'];
    $telefono=$_POST['telefono'];
    $comentario=$_POST['comentario'];

    mail (  "mnavarro91@live.cl", "$sujeto", 'Correo:'.$email."\n".'Nombre: '.$nombre."\n".'Telefono: '.$telefono."\n".'Mensaje: '.$comentario);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sanguchef</title>
<!-- for-mobile-apps -->
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


                            function pregunta(){
                                if (confirm('¿Estas seguro de enviar este Mensaje?')){
                                    alert('Mensaje enviado, se le responderá al correo señalado')
                                    document.formu.submit()
                                }
                            }
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
                        <li ><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li class="active"><a href="contacto.php">Contacto</a></li>
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
                        <li ><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li class="active"><a href="contacto.php">Contacto</a></li>
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
                        <li><a href="index.php">Inicio</a></li>
                        <li ><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li class="active" ><a href="contacto.php">Contacto</a></li>
                        <li ><a href="adminZone.php">Administrar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>';?>
<!-- contact -->
<div class="identificador col-xs-13  col-xs-offset-2>
    <form class="logout form-inline container " name="" method="post" action="logout.php">
        <h3>
                <span  class=" label-warning label " id="logout" ><?php if (isset($_SESSION['username'])) echo 'Identificado como: ' . '<strong>' . $_SESSION['username'] . '</strong>' . '
                <button name="Submit" id="submita" class="btn btn-danger btn-sm col-xs-offset-2 "  type="submit">Salir</button>'; else echo "Identificado como: Visita"?> </span>
        </h3>
    </form>
</div>
	<div class="contact">
		<div class="container">

			<h3>Contáctanos!</h3>
			<div class="line">
			</div>
			<p class="proident">Puedes ir a nuestro local señalado en el mapa o enviarnos un mensaje</p>
			<div class="contact-grid">
                <div class="contact-right">
                    <form action="contacto.php" name="formu" method="post" onsubmit="pregunta()">
                        <input type="text"  name="nombre" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" required="">
                        <input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="text" name="numero" value="Numero telefónico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Numero Telefonico';}" required="">
                        <input type="text" name="sujeto" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Encabezado';}" required="">
                        <div class="clearfix"> </div>
                        <textarea type="text" name="texto" maxlength="75" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" required="">Mensaje...</textarea>
                        <input type="submit" name="enviar" value="enviar" style="margin-bottom: 1.5em" class="btn-warning">
                    </form>
                </div>
				<div class="contact-left">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d203.17924606357283!2d-71.6216250457908!3d-35.43330133920632!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1504763207965" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //contact -->
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