<?php

include("../conexion.php");
$con=conectar();

$Id_Cliente=$_POST['Id_Docente'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$calle=$_POST['calle'];
$numero=$_POST['numero'];
$colonia=$_POST['colonia'];
$municipio=$_POST['municipio'];

$sql="UPDATE docente SET  nombres='$nombres',apellidos='$apellidos',telefono='$telefono',calle='$calle',numero='$numero',colonia='$colonia',municipio='$municipio' WHERE Id_Cliente='$Id_Cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:docente.php");
    }
?>