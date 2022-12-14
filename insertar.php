<?php
include("conexion.php");
$con=conectar();

$curp=$_POST['curp'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$Especialidad=$_POST['especialidad'];


$sql="INSERT INTO alumno VALUES('','$curp','$nombres','$apellidos','$Especialidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>