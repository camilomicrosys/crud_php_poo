<?php
require_once "conexion.php";
require_once "metodos.php";

$id=$_GET['id'];

$obj=new metodos();
if($obj->eliminardatos($id)==1){
    
    header("location:index.php");
}else{
    
    echo "error en eliminar.php o en metodo eliminar";
}



?>
