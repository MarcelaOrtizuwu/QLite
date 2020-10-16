<?php

include("conexion.php");

if(isset($_POST['eliminar'])){

    $correo = trim($_POST['correo']);
    $query = "DELETE FROM `datos` WHERE `correo` LIKE '%".$correo."%'";
    $result = mysqli_query($con,$query);

    if($result){
        ?>
        <h3 class="uwu2">¡Usuario Eliminado!</h3>
        <?php
    }else{
        ?>
        <h3 class="unu2">¡UPS! Ha ocurrido un error...</h3>
        <?php
    }
}
?>