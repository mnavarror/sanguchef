<?php
require "loginheader.php";
require_once 'php/conectar.php';
require 'newPedido.php'
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Sanguchef</title><!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Deliccio Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    var factor=1 ;
    var total=0;
    var formato;
    var comentario;
    var hora;
    var ultimoSandwich;
    function mostrar(){
        document.getElementById('seccionIngredientes').style.display = 'block';
    }

        function hideURLbar() {
        window.scrollTo(0, 1);
    }

    function aumentar( nombreInput,precio,codigo) {
        document.getElementById(nombreInput).value++;
        total+= parseInt(precio*factor);
        $.ajax({
            url: 'newPedido.php',
            type: 'post',
            data: {aumentar:1,codigo:codigo,ultimo:ultimoSandwich}
        });
        fijarTotal();

    }
    function disminuir( nombreInput, precio,codigo) {
        if(document.getElementById(nombreInput).value>0){
            document.getElementById(nombreInput).value--;
            total= total-parseInt(precio*factor);
            $.ajax({
                url: 'newPedido.php',
                type: 'post',
                data: {disminuir:1,codigo:codigo,ultimo:ultimoSandwich}
            });
            fijarTotal();
        }
    }
    function fijarFactor( valorN,formatoN,codigo ) {
            factor=valorN;
            formato=formatoN;
            document.getElementById('formato').style.display = 'none';
            document.getElementById('formatoElegido').value=formato;
            document.getElementById('formatoDefinitivo').style.display = 'block';
            document.getElementById('filaTotal').style.display = 'block';
        $.ajax({
            url: 'newPedido.php',
            type: 'post',
            data: {definir:1,codigoFormato:codigo},
            success: function(data) {
                ultimoSandwich=data;
            },
            error: function(){
                alert('Error!');
            }
        });

    }

    function fijarTotal() {
        document.getElementById('totalFinal').value=total;
    }


    function guardar(usuario){
        comentario=document.getElementById('comentario').value;
        hora=document.getElementById('hora').value;
        $.ajax({
            url: 'newPedido.php',
            type: 'post',
            data: {guardar:1,comentario:comentario,hora:hora,ultimo:ultimoSandwich,total:total,usuario:usuario,formato:formato},
            success: function(data) {
               alert(data);
                window.location.reload();

            },
            error: function(){
                alert('Error!');
            }
        });
    }
    </script>

    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
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
                        <li class="active"><a href="preparacion1.php">Preparar</a></li>
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
                        <li ><a href="productos.php">Productos</a></li>
                        <li class="active"><a href="preparacion1.php">Preparar</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                        <li ><a href="contacto.php">Contacto</a></li>
                        <li ><a href="adminZone.php">Administrar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>';?>
<!-- services -->
<div class="identificador col-xs-13 col-xs-offset-1">
    <form class="logout form-inline container " name="" method="post" action="logout.php">
        <h3>
                <span  class=" label-warning label " id="logout" ><?php if (isset($_SESSION['username'])) echo 'Identificado como: ' . '<strong>' . $_SESSION['username'] . '</strong>' . '
                <button name="Submit" id="submita" class="btn btn-danger btn-sm col-xs-offset-2 "  type="submit">Salir</button>'; else echo "Identificado como: Visita"?> </span>
        </h3>
    </form>
</div>
<div class="services">
    <div class="container">

        <h3> ARMA TU PEDIDO!</h3>
        <div class="line">
        </div>
        <div class="welcome-info">
            <div class="col-sm-13 ">
                <div class="sap_tabs" id="formato">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab" id="tabFormato"><span>Formato</span>
                            </li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <?php
                                while ($row = $tipoPanDisp->fetch_array()) {
                                    ?>
                                    <li class="row list-group-item "><h5
                                                class="col-xs-7"><?php echo $row['nombre_pan']; ?></h5>  <input
                                                type="radio" value="<?php echo $row['nombre_pan']; ?> "
                                                name="formato"
                                                onclick="fijarFactor('<?php echo $row['multiplicador_pan']; ?>','<?php echo $row['nombre_pan']; ?>', '<?php echo $row['codigo_tipo_pan']; ?>'); mostrar(); "
                                                class="col-xs-4"></li>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-xs-13" id="formatoDefinitivo" style="display: none">
                    <h3>Formato</h3>
                </br>
                    <input class="col-xs-6  col-xs-offset-1 " id="formatoElegido"  type="text" readonly="readonly">
                    <input class="col-xs-4 col-xs-offset-1"  type="submit" value="Cambiar" onclick="javascript:window.location.reload();"/>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-13 " id="seccionIngredientes"  style="display: none">
                </br>
                    <h3>Ingredientes</h3>
                    <div class="sap_tabs" >
                        <div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list">
                                    <li class="resp-tab-item grid3" aria-controls="tab_item-0" role="tab"><span>Proteinas</span></li>
                                    <li class="resp-tab-item grid4" aria-controls="tab_item-1" role="tab"><span>Lácteos</span></li>
                                    <li class="resp-tab-item grid5" aria-controls="tab_item-2" role="tab"><span>Verduras</span></li>
                                    <li class="resp-tab-item grid6" aria-controls="tab_item-3" role="tab"><span>Aderezos</span></li>
                                    <div class="clear"></div>
                                </ul>
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <?php
                                        while ($row = $ingProtDisp->fetch_array()) {
                                            ?>
                                        <li class="row list-group-item "><h6 class="col-xs-5"><?php echo $row['nombre_ingrediente']; ?></h6>
                                            <input type="number" value=0 min=0 width="1em" id="<?php echo $row['nombre_ingrediente']; ?>" name="<?php echo $row['nombre_ingrediente']; ?>"  readonly="readonly" class="col-xs-2">
                                            <input  align="center" type="button" value="+" onclick="aumentar('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class=" col-xs-2 col-xs-offset-1 ">
                                            <input align="center" type="button" value="-" onclick="disminuir('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class="col-xs-2 ">
                                        </li>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <?php
                                        while ($row = $ingLactDisp->fetch_array()) {
                                            ?>
                                            <li class="row list-group-item "><h6 class="col-xs-5"><?php echo $row['nombre_ingrediente']; ?></h6>
                                                <input type="number" value=0 min=0 width="1em" id="<?php echo $row['nombre_ingrediente']; ?>" name="<?php echo $row['nombre_ingrediente']; ?>"  readonly="readonly" class="col-xs-2">
                                                <input align="center" type="button" value="+" onclick="aumentar('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class="col-xs-2 col-xs-offset-1 botonSuma">
                                                <input align="center" type="button" value="-" onclick="disminuir('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class="col-xs-2 botonResta">
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                        <?php
                                        while ($row = $ingVerdDisp->fetch_array()) {
                                            ?>
                                            <li class="row list-group-item "><h6 class="col-xs-5"><?php echo $row['nombre_ingrediente']; ?> </h6>
                                                <input type="number" value=0 min=0 width="1em" id="<?php echo $row['nombre_ingrediente']; ?>" name="<?php echo $row['nombre_ingrediente']; ?>"  readonly="readonly" class="col-xs-2">
                                                <input align="center" type="button" value="+" onclick="aumentar('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class="col-xs-2 col-xs-offset-1 botonSuma">
                                                <input align="center" type="button" value="-" onclick="disminuir('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class="col-xs-2 botonResta">
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                                        <?php
                                        while ($row = $ingAdereDisp->fetch_array()) {
                                            ?>
                                            <li class="row list-group-item "><h6 class="col-xs-5"><?php echo $row['nombre_ingrediente']; ?></h6>
                                                <input type="number" value=0 min=0 width="1em" id="<?php echo $row['nombre_ingrediente']; ?>" name="<?php echo $row['nombre_ingrediente']; ?>"  readonly="readonly" class="col-xs-2">
                                                <input align="center" type="button" value="+" onclick="aumentar('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class="col-xs-2 col-xs-offset-1 botonSuma">
                                                <input align="center" type="button" value="-" onclick="disminuir('<?php echo $row['nombre_ingrediente']; ?>','<?php echo $row['valor_ingrediente']; ?>' ,'<?php echo $row['codigo_ingrediente']; ?>');" class="col-xs-2 botonResta">
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </div>
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

                <div  class="row"  class="formularioEnvio" id="filaTotal" style="display: none">
                        <p class="col-xs-5 col-xs-offset-1">Total: </p>
                        <p class="col-xs-1 ">$</p>
                        <input class="col-xs-4 in-form " align="center" type="number" id="totalFinal" name="total" value=0 readonly="readonly">
                        <p class="col-xs-6 col-xs-offset-1 ">Comentarios: </p>
                        <textarea name="comentario" id="comentario" type="text" class="col-xs-10 col-xs-offset-1 in-form" placeholder="..." maxlength="50"></textarea>
                        <p class="col-xs-5  col-xs-offset-1">hora de retiro: </p>
                        <input class="in-form col-xs-3 col-xs-offset-2" type="time" name="hora" id="hora" min="09:00:00" max="20:00:00" >
                        <p class="col-xs-12 ">     </p>
                        <input type="button" name="guardar" value="Finalizar Pedido" class="col-xs-4 col-xs-offset-7 btn-warning " style="margin-top: 1.5em" onclick="if( confirm('Esta seguro de su pedido?'))guardar('<?php echo $_SESSION['username'];?>');"/>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
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
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>