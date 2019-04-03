<?php
session_start();
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
<!-- banner Normal --><?php if (!isset($_SESSION['username'])) echo '
<div class="banner">
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
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="banner-info">
            <div class="col-md-5 banner-info-left">
                <h1>Disfruta de una comida deliciosa, sana y a tu pinta</h1>
                <ul>
                    <li><a href="#" class="dribble"></a></li>
                </ul>
                <div class="more">
                    <a href="conocenos.php">Conócenos!</a>
                </div>
            </div>
            <div class="col-md-7 banner-info-right">
                
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Ingreso</span>
                            </li>
                            <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Registro</span>
                            </li>
                            <div class="clear"></div>
                        </ul>
                       
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <div class="sign-in-form">
                                                <div class="in-form">
                                                    <form class="form-signin" name="form1" method="post" action="checklogin.php">
                                                        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Nombre de usuario" autofocus>
                                                        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Contraseña">
                                                        <!-- The checkbox remember me is not implemented yet...
<label class="checkbox">
<input type="checkbox" value="remember-me"> Remember me
</label>
-->
                                                        <div id="message"></div>
                                                    <div class="ckeck-bg">
                                                        <div class="checkbox-form">
                                                            <div class="check-center">
                                                                    <input type="submit"  name="Submit" id="submit" class="btn btn-lg btn-warning btn-block" value="Entrar" >
                                                                </form>
                                                            </div>
                                                      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">
                                            <div class="sign-in-form">
                                                <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
                                                  
                                                    <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Nombre de usuario" autofocus>
                                                    <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                                                    <br>
                                                    <input name="password1" id="password1" type="password" class="form-control" placeholder="Contraseña">
                                                    <input name="password2" id="password2" type="password" class="form-control" placeholder="Repita contraseña">

<div class="ckeck-bg">
                                                        <div class="checkbox-form">
                                                        <div class="check-center">
                                                    <input name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Registrarse">
</div>
                                                    <div id="message"></div>
                                                    </div></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                        </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>
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
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li ><a href="productos.php">Productos</a></li>
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
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li ><a href="productos.php">Productos</a></li>
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

    <!-- //banner -->
    <!-- welcome -->
<div class="identificador col-xs-13 col-xs-offset-1">
    <form class="logout form-inline container " name="" method="post" action="logout.php">
        <h3>
                <span  class=" label-warning label " id="logout" ><?php if (isset($_SESSION['username'])) echo 'Identificado como: ' . '<strong>' . $_SESSION['username'] . '</strong>' . '
                <button name="Submit" id="submita" class="btn btn-danger btn-sm col-xs-offset-2 "  type="submit">Salir</button>'; else echo "Identificado como: Visita"?> </span>
        </h3>
    </form>
</div>

    <div class="welcome">
        <div class="container">

            <h3>Bienvenido !</h3>
            <div class="line">
            </div>
            <p class="proident">Aquí podrás ordenar la comida mas deliciosa y sana</p>
            <div class="welcome-info">
                <div class="col-md-6 welcome-info-left">
                    <div class="col-xs-5 welcome-info-leftl">
                        <img src="images/castellon.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="col-xs-7 welcome-info-leftr">
                        <h4>Prueba nuestro sandwich "Castellón"</h4>
                        <p>Contiene: queso, tomate, jamón serrano y lechuga</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 welcome-info-left">
                    <div class="col-xs-5 welcome-info-leftl">
                        <img src="images/fajitaPollo.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="col-xs-7 welcome-info-leftr">
                        <h4>Fajitas</h4>
                        <p>Arma tu fajita con los ingredientes que mas te gusten!</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="welcome-info">
                <div class="col-md-6 welcome-info-left">
                    <div class="col-xs-5 welcome-info-leftl">
                        <img src="images/Veggie-Burger.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="col-xs-7 welcome-info-leftr">
                        <h4>Conoce nuestra hamburguesa de soya</h4>
                        <p>Además de sana, es rica y muy deliciosa</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 welcome-info-left">
                    <div class="col-xs-5 welcome-info-leftl">
                        <img src="images/ensalada.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="col-xs-7 welcome-info-leftr">
                        <h4>Ensaladas</h4>
                        <p>Con nuestras ensaladas personalizadas no pasarás hambre!</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <h2>Delivery<span> Pronto!</span></h2>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- about -->
    <div class="welcome-bottom">
        <div class="container">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="welcome-bottom-info">
                                <h3>Crea un sandwich con los ingredientes a tú elección</h3>
                            </div>
                        </li>
                        <li>
                            <div class="welcome-bottom-info">
                                <h3>Puedes programar tu pedido para retirarlo a cierta hora</h3>
                            </div>
                        </li>
                        <li>
                            <div class="welcome-bottom-info">
                                <h3>Nuestros productos son saludables y con una preparación que asegura un sabor
                                    único</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- //about -->
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
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="js/signup.js"></script>

<!-- The AJAX login script -->
<script src="js/login.js"></script>
</body>
</html>