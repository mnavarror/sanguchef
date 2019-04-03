<?php


DEFINE('DB_USER', 'id3943858_exoblo');   //Usuario que conecta a la BBDD
DEFINE('DB_PASSWORD', 'Megaman1');  // Contraseña de la BBDD
DEFINE('DB_HOST', 'localhost');  //Direccion del servidor
DEFINE('DB_NAME', 'id3943858_sanguchef1');  //Nombre de la BBDD

$conectar = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('No se pudo conectar por a MYSQL por: ' . mysqli_connect_error());


$tipo_panDisp = 'SELECT * FROM tipo_pan WHERE tipo_pan.disponible_pan=1';
$tipoPan='SELECT * FROM tipo_pan';
$proteicoDisp = 'SELECT * FROM ingrediente WHERE ingrediente.disponible_ingrediente=1 and ingrediente.codigo_tipo_ingrediente=1';
$lacteosDisp = 'SELECT * FROM ingrediente WHERE ingrediente.disponible_ingrediente=1 and ingrediente.codigo_tipo_ingrediente=2';
$vegetalesDisp = 'SELECT * FROM ingrediente WHERE ingrediente.disponible_ingrediente=1 and ingrediente.codigo_tipo_ingrediente=3';
$aderezosDisp = 'SELECT * FROM ingrediente WHERE ingrediente.disponible_ingrediente=1 and ingrediente.codigo_tipo_ingrediente=4';
$productosDisp = 'SELECT * FROM producto WHERE producto.disponible_producto=1 ';
$productos = 'SELECT * FROM producto ';
$ingredientes= 'SELECT * FROM ingrediente';




$tipoPanDisp = mysqli_query($conectar, $tipo_panDisp);
$tipoPan = mysqli_query($conectar, $tipoPan);
$ingProtDisp = mysqli_query($conectar, $proteicoDisp);
$ingLactDisp = mysqli_query($conectar, $lacteosDisp);
$ingVerdDisp = mysqli_query($conectar, $vegetalesDisp);
$ingAdereDisp = mysqli_query($conectar, $aderezosDisp);
$det_productos_disp = mysqli_query($conectar, $productosDisp);
$detProductos=mysqli_query($conectar, $productos);
$detIngredientes= mysqli_query($conectar, $ingredientes);
$detIngredientes2= mysqli_query($conectar, $ingredientes);
$listaNombresIngredientes=array();
while ($row = $detIngredientes->fetch_array()) {
    $listaNombresIngredientes[$row['codigo_ingrediente']] = $row['nombre_ingrediente'];
}



