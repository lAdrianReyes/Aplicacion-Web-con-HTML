<?php
include("../conexion.php");
$con=conectar();

$curp=$_POST['curp'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$especialidad=$_POST['especialidad'];


$sql="INSERT INTO alumno VALUES('','$curp','$nombres','$apellidos','$especialidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>