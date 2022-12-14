
<?php 
    include("conexion.php");
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
        <link href="style_m.css?126567" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>

    <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 class="text-white">Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="curp" placeholder="Curp">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad">
                                    <input type="submit" class="btn btn-primary">
                                    
                                    
                                </form>

                        </div>
                        <div class="col-md-8">
                            <table class="table table-dark" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id_Alumno</th>
                                        <th>Curp</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
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
                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <a class="btn btn-warning btn-lg" href="json.php" role="button">JSON</a>
                                    <a class="btn btn-success btn-lg" href="xml.php" role="button">XML</a>
                        </div>
                    </div>  
            </div>
    </body>
</html>

