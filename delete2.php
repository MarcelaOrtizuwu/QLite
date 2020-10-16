<?php

include("conexion2.php");

if(isset($_POST['hu'])){

    $nombre = trim($_POST['nombres']);
    $query = "DELETE FROM `datos` WHERE `Nombre` LIKE '%".$nombre."%'";
    $result = mysqli_query($con,$query);

}
?>