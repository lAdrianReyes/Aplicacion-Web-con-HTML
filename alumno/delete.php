<?php

include("../conexion.php");
$con=conectar();

$Id_Alumno=$_GET['id'];
echo $Id_Alumno;
print_r( $Id_Empleado);
$sql="DELETE FROM  alumno  WHERE id_alumno='$Id_Alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
