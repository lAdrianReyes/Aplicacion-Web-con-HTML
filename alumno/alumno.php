<?php 
session_start();

if (isset($_SESSION['Id_Usuario']) && isset($_SESSION['nombre'])) {

 ?>
<?php 
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Datos Empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style_m.css?126967" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <nav>
			<ul>
			<li><a href="../menu.php">Inicio</a></li>
			
				<li><a href="alumno.php">Alumnos</a></li>
				<li><a href="../docente/docente.php">Docentes</a></li>
			
				<li><a href="#">Bienvenido, <?php echo $_SESSION['nombre']; ?></a>
				<div>

					<ul>
						<li class="titulo"><a href="../logout.php">Cerrar Sesión</a></li>
					</ul>
			
				</div>
            </li>
			</ul>
		</nav>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">


                                    <input type="text" class="form-control mb-3" name="curp" placeholder="Curp">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad">
                                    <input type="submit" class="btn btn-primary">
                                    
                                    
                                </form>

                        </div>

                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id_Alumno</th>
                                        <th>Curp</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Especialidad</th>
                                        <th>Operaciones</th>
                                      
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_alumno']?></th>
                                                <th><?php  echo $row['curp']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['especialidad']?></th>     
                                                <th><a href="actualizar.php?id=<?php echo $row['id_alumno'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_alumno'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <a class="btn btn-warning btn-lg" href="json.php" role="button">JSON</a>
                                    <a class="btn btn-dark btn-lg" href="xml.php" role="button">XML</a>
                        </div>
                    </div>  
            </div>
    </body>
</html>

<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>