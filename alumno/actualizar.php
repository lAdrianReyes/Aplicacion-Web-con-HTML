<?php 
session_start();

if (isset($_SESSION['Id_Usuario']) && isset($_SESSION['nombre'])) {

 ?>
<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE id_alumno='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="Id_Alumno" value="<?php echo $row['id_alumno']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="curp" placeholder="curp" value="<?php echo $row['curp']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad" value="<?php echo $row['especialidad']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            <a href="alumno.php" class="btn btn-info">Regresar</a>
                    </form>
                    
                </div>
    </body>
</html>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>