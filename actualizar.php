<?php

require_once "conexion.php";
require_once "metodos.php";

$nombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$apellido=(isset($_POST['txtapellido']))? $_POST['txtapellido']:"";
$id=$_POST['id'];
$datos=array($nombre,$apellido,$id);

$obj= new metodos();
if($obj->actualizardatos($datos)==1){
    
    header("location:index.php");
}else{
    echo"hubo error en archivo actualizar o editar.php o en el metodo actualizar datos";
}

