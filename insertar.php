<?php

require_once "conexion.php";
require_once "metodos.php";

$nombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$apellido=(isset($_POST['txtapellido']))? $_POST['txtapellido']:"";

$datos=array($nombre,$apellido);

$obj= new metodos();
if($obj->insertardatos($datos)==1){
    
    header("location:index.php");
}else{
    echo"hubo error en archivo nsertar datos.php o en el metodo insertar datos";
}







?>
