<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM docente WHERE id_docente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="Id_Docente" value="<?php echo $row['id_docente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="calle" placeholder="Calle" value="<?php echo $row['calle']  ?>">
                                <input type="text" class="form-control mb-3" name="numero" placeholder="Numero" value="<?php echo $row['numero']  ?>">
                                <input type="text" class="form-control mb-3" name="colonia" placeholder="Colonia" value="<?php echo $row['colonia']  ?>">
                                <input type="text" class="form-control mb-3" name="municipio" placeholder="Municipio" value="<?php echo $row['Municipio']  ?>">
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                                <a href="docente.php" class="btn btn-info">Regresar</a>
                    </form>
                    
                </div>
    </body>
</html>