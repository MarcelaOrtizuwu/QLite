<?php

    include("conexion2.php");
    
  if(isset($_POST['ora'])){

    if(strlen($_POST['nombres']) > 1)
    {
        $nombres = trim($_POST['nombres']);
        $semestre = trim($_POST['semestre']);
        $carrera = trim($_POST['carrera']);
        $query = "INSERT INTO `datos`(`Nombre`, `Semestre`, `Carrera`) VALUES ('$nombres','$semestre','$carrera')";
        $result = mysqli_query($con,$query);
        
        
  }
}
?>