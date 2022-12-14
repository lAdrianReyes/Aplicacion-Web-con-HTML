<?php 
session_start();

if (isset($_SESSION['Id_Usuario']) && isset($_SESSION['nombre'])) {

 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style_menu.css?1826567" rel="stylesheet">
    <title>Menú</title>
</head>
<body>
	<nav>
			<ul>
			<li><a href="menu.php">Inicio</a></li>
			
				<li><a href="alumno/alumno.php">Alumnos</a></li>
				<li><a href="docente/docente.php">Docentes</a></li>
				
				<li><a href="#">Bienvenido, <?php echo $_SESSION['nombre']; ?></a>
				<div>

					<ul>
						<li class="titulo"><a href="logout.php">Cerrar Sesión</a></li>
					</ul>
			
				</div>
            </li>
			</ul>
		</nav>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>