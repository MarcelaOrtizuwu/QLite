<?php

    include("conexion.php");
    
  if(isset($_POST['palante'])){

    if(strlen($_POST['nombres']) > 1 && strlen($_POST['apellidos']) > 1 && strlen($_POST['correo']) > 1 && strlen($_POST['password']) > 1)
    {
        $nombres = trim($_POST['nombres']);
        $apellidos = trim($_POST['apellidos']);
        $correo = trim($_POST['correo']);
        $password = trim($_POST['password']);
        $query = "INSERT INTO datos(correo, nombres, apellidos, pass) VALUES ('$correo','$nombres','$apellidos','$password')";
        $result = mysqli_query($con,$query);

        if($result){
            ?>
            <h3 class="uwu">¡Gracias por registrarte en QLite Music!</h3>
            <?php
        }else{
            ?>
            <h3 class="unu">¡UPS! Ha ocurrido un error...</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="unu">Por favor, complete todos los campos</h3>
        <?php
    }
  }
?>