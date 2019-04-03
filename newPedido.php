<?php
require_once 'php/conectar.php';

if(isset($_POST['aumentar'])){
    $codigoIngrediente=$_POST['codigo'];
    $ultimoSandwich=$_POST['ultimo'];
    $nuevaSuma="INSERT INTO detalle_sandwich (codigo_sandwich,codigo_ingrediente,cantidad) VALUES ('$ultimoSandwich','$codigoIngrediente',1) 
                ON DUPLICATE  KEY  UPDATE cantidad = cantidad+1";
    $r=mysqli_query($conectar, $nuevaSuma) OR die ('No se pudo conectar por a MYSQL por: ' . mysqli_connect_error());

}
if(isset($_POST['disminuir'])){
    $codigoIngrediente=$_POST['codigo'];
    $ultimoSandwich=$_POST['ultimo'];
    $nuevaResta="UPDATE detalle_sandwich SET cantidad=cantidad-1 WHERE codigo_sandwich='$ultimoSandwich' AND  codigo_ingrediente='$codigoIngrediente' ";
    $r=mysqli_query($conectar, $nuevaResta) OR die ('No se pudo conectar por a MYSQL por: ' . mysqli_connect_error());
}

if(isset($_POST['definir'])) {
    $codigoFormato = $_POST['codigoFormato'];
    $nuevoSandwich = "INSERT INTO sandwich (codigo_tipo_pan) VALUES ('$codigoFormato')";
    $r = mysqli_query($conectar, $nuevoSandwich) OR die ('No se pudo conectar por a MYSQL por: '.mysqli_connect_error()
    );
    $ultimoSandwich=mysqli_insert_id($conectar);
    echo  $ultimoSandwich;
}

if(isset($_POST['reinicio'])){
    reiniciarSandwich();
}


if(isset($_POST['guardar'])){
    $comentario=$_POST['comentario'];
    $comentario=str_replace ( "\"", "&quot;", $comentario ) ;
    $hora = $_POST['hora'];
    $usuario = $_POST['usuario'];
    $consultaid="select id from members where username='$usuario'";
    $r=mysqli_query($conectar,$consultaid) OR die ('No se pudo conectar por a MYSQL por: '.mysqli_connect_error());
    $row = $r->fetch_array();
    $id = $row['0'];
    $formato = $_POST['formato'];
    $total=$_POST['total'];
    $ultimoSandwich=$_POST['ultimo'];
    $consultaPed="INSERT INTO pedido (fecha_realizacion_pedido,hora_pedido,id_cliente,comentario) VALUES ( now(),'$hora','$id','$comentario')";
    $r=mysqli_query($conectar,$consultaPed) OR die ('No se pudo conectar por a MYSQL por: '.mysqli_connect_error());
    $ultimoPedido=mysqli_insert_id($conectar);
    $consultaDetalle="insert into det_pedido_sandwich (cod_pedido,cod_sandwich) values ('$ultimoPedido','$ultimoSandwich')";
    $r=mysqli_query($conectar,$consultaDetalle)OR die ('No se pudo conectar por a MYSQL por: '.mysqli_connect_error());

    $consultaActualizar="UPDATE sandwich SET precio_sandwich='$total' WHERE codigo_sandwich='$ultimoSandwich'";
    $r=mysqli_query($conectar,$consultaActualizar);

    $consultaSelecciones= "Select nombre_ingrediente,cantidad from ingrediente,detalle_sandwich WHERE 
                                detalle_sandwich.codigo_sandwich='$ultimoSandwich' and detalle_sandwich.codigo_ingrediente=ingrediente.codigo_ingrediente";
    $r=mysqli_query($conectar,$consultaSelecciones);
    $texto=ingredientesATexto($r);

    mail (  "mnavarro91@live.cl", "Pedido de: $usuario" , "Pedido numero: ".$ultimoPedido."\n"."Hora a retirar: ".$hora."\n"."Total: ".$total."\n"."Formato: ".$formato."\n"."Ingredientes: \n".$texto."Comentario: ".$comentario."\n");
}

function ingredientesATexto($r){
    $texto='';
    while ($row = $r->fetch_array()){
        if($row['1']!=0){
        $texto=$texto.$row['0'].':'.$row['1']."\n";
        }
    }
    return $texto;
}




