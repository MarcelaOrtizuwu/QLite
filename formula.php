<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
<link href="estilos3.css" rel="stylesheet">
</head>
<body>
	<input type="checkbox" id="Check">
	<label for="Check">
		<img src="menu.png" class="icono">
	</label>
	<nav>
		<ul class="palmenu">
			<li><a href="QLite.php">QLite Music</a></li>
			<li><a href="admin.php">Gestionar QLite Music</a></li>
			<li><a href="home.html">Cascarita 1</a></li>
			<li><a href="formula.php">Primer Intento de Formulario</a></li>
		</ul>
	</nav>
	<section>
		<h1>Formulario Hecho en Clase</h1>
		<div class="form">
		<form method="POST">
            <h2>Registrar a un alumno</h2>
			<input class="control" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre completo"><br>
			<input class="control" type="number" min="1" max="6" name="semestre" id="semestre" placeholder="Semestre que cursa"><br>
			<label class="ashu"for="">Selecciona tu carrera</label><br><br>
			<select class="sis" name="carrera" id="">
				<option value="progra">PROGRAMACIÓN</option>
				<option value="meca">MECATRONICA</option>
				<option value="hor">HOTELERÍA</option>
				<option value="mant">MANTENIMIENTO</option>
				<option value="prod">PRODUCCIÓN</option>
			</select>
			<input class="botonxd" type="submit" name="ora" value="Continuar">
		</form>
    </div>
    <div action="search2.php" class="abajo">
    <h2>Buscar a un Alumno</h2>
            <form method="POST">
                <input class="control" type="text" name="nombres" id="nombres" placeholder="Ingrese el nombre del alumno">
                <input class="botonxd" type="submit" name="hi" value="Buscar Registro">
            </form>
        </div>
    <div class="abajo2">
    <h2>Eliminar a un Alumno</h2>
            <form method="POST">
                <input class="control" type="text" name="nombres" id="nombres" placeholder="Ingrese el nombre del alumno">
                <input class="botonxd" type="submit" name="hu" value="Eliminar Registro">
            </form>
	</div>
	<form method="POST">
		<div class="abajo3">
		<form method="POST">
		<h2>Modifica tus datos</h2>
			<input class="control" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre Registrado"><br>
			<input class="control" type="number" min="1" max="6" name="semestre" id="semestre" placeholder="Semestre Nuevo"><br>
			<label class="ashu"for="">Carrera Nueva</label><br><br>
			<select class="sis" name="carrera" id="">
				<option value="progra">PROGRAMACIÓN</option>
				<option value="meca">MECATRONICA</option>
				<option value="hor">HOTELERÍA</option>
				<option value="mant">MANTENIMIENTO</option>
				<option value="prod">PRODUCCIÓN</option>
				</select>
				<input class="botonxd" type="submit" name="ora2" value="Continuar">
		</form>
    </div>		
    </section>
    
    <?php
    include("registraA.php");
    include("delete2.php");
	include("search2.php");
	include("modify.php");
    ?>
</body>
</html>