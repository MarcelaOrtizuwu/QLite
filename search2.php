<?php

    include("conexion2.php");
    if(isset($_POST['hi'])){
        $nombre = trim($_POST['nombres']);
        $query = "SELECT * FROM `datos` WHERE `Nombre` LIKE '%".$nombre."%'";
        $result = mysqli_query($con,$query);

        if($result){
            while($row = mysqli_fetch_array($result)){
               ?>
     
             <h2>Nombre: <?= $row['Nombre'] ?></h2>
             <h2>Semestre: <?= $row['Semestre'] ?></h2>
             <h2>Carrera: <?= $row['Carrera'] ?></h2>         

            <?php
            }

        }
    }
?>