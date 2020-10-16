<?php

    include("conexion.php");
    if(isset($_POST['buscar'])){
        $correo = trim($_POST['correo']);
        $query = "SELECT * FROM `datos` WHERE `correo` LIKE '%".$correo."%'";
        $result = mysqli_query($con,$query);

        if($result){
            while($row = mysqli_fetch_array($result)){
               ?>
             <div class="resultado">
             <h3 class="uwu2">¡Usuario Encontrado!</h3><br>
             <h4>Nombres: <?= $row['nombres'] ?></h4>
             <h4>Apellidos: <?= $row['apellidos'] ?></h4>
             <h4>Correo Electrónico: <?= $row['correo'] ?></h4>
             <h4>Contraseña: <?= $row['pass'] ?></h4>             
            </div>
            <?php
            }
    }else {
        ?>
        <h3 class="unu2">¡UPS! Ha ocurrido un error...</h3>
        <?php
    }
}
?>