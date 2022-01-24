<?php
require_once "conexion.php";
$obj=new conectar();
$conexion=$obj->conexion();
$id=$_GET['id'];
$sql="SELECT nombre,apellido from persona where id='$id'";
$result=mysqli_query($conexion,$sql);
$ver=mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Modificar
</button>
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CRUD PHP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
 <form action="actualizar.php" method="POST">
            <input type="text" hidden="" value="<?php echo $id ?>"name="id">
            <label>NOMBRE</label>
            <p></p>
            <input type="text"  required="" name="txtnombre" value="<?php echo $ver[0] ?>">
            <br>
            <label>APELLIDO</label>
            <p></p>
            <input type="text"  required="" name="txtapellido" value="<?php echo $ver[1]?>">
            <br>
      </div>
      <div class="modal-footer">
            <button class="btn btn-success" >Actualizar</button>
            <input class="btn btn-primary" type="reset">
            </form>
      </div>
    </div>
  </div>
</div>
        
    </body>
</html>
