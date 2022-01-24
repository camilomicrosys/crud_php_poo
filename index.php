<?php
require_once "conexion.php";
require_once"metodos.php";

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
        <title>crud mio PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <BR>
         <BR><BR>
         <BR>
        <!-- Button trigger modal -->
  <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Crear Uusario
</button>

<!-- Modal -->
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
        
<form class="container" action="insertar.php" method="POST">
            <label>NOMBRE</label>
            <p></p>
            <input class="form-group row" type="text" placeholder="Escribe tu nombre" required="" name="txtnombre">
            <br>
            <label>APELLIDO</label>
            <p></p>
            <input class="form-group row" type="text" placeholder="Escribe tu apellido" required="" name="txtapellido">
            <br>
            <br> 
      </div>
      <div class="modal-footer">
            <button class="btn btn-success" >Agregar</button>
            <input class="btn btn-primary" type="reset">
            </form>
      </div>
    </div>
  </div>
</div>
        <BR>
         <BR>
         <BR>
         <BR>
         <BR>
         <BR>
       <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">ACTUALIZAR</th>
      <th scope="col">ELIMINAR</th>
      
    </tr>
  </thead>
  <tbody>
       <?php
            $obj= new metodos();
            $sql= "SELECT id,nombre,apellido from persona";
            $datos=$obj->mostrardatos($sql);
            foreach($datos as $key){
            ?>
    <tr>
      <th scope="row"><?php echo $key['nombre']; ?></th>
      
      <th scope="row"><?php echo $key['apellido'];?></th>
      <th scope="row"><a href="editar.php?id=<?php echo $key['id']?>">EDITAR</a> </th>
       <th scope="row"><a href="eliminar.phP?id=<?php echo $key['id']?>">ElIMINAR</a> </th>
    </tr>
    <?php
            }
          
          ?>
  </tbody>
</table>
            
            
            
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
