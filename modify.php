<?php

    include("conexion2.php");
    
  if(isset($_POST['ora2'])){

    if(strlen($_POST['nombres']) > 1)
    {
        $nombres = trim($_POST['nombres']);
        $semestre = trim($_POST['semestre']);
        $carrera = trim($_POST['carrera']);
        $query = "UPDATE `datos` SET `Nombre`='$nombres',`Semestre`='$semestre',`Carrera`='$carrera' WHERE `Nombre` LIKE '%".$nombres."%'";
        $result = mysqli_query($con,$query);

        
  }
}
?>