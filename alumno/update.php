<?php

include("../conexion.php");
$con=conectar();
$Id_alumno=$_POST['Id_Alumno'];
$curp=$_POST['curp'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$Espe=$_POST['especialidad'];

$sql="UPDATE alumno SET  curp='$curp',nombre='$nombres',apellidos='$apellidos',especialidad='$Espe' WHERE id_alumno='$Id_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:alumno.php");
    }
?>