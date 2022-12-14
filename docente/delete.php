<?php

include("../conexion.php");
$con=conectar();

$Id_Docente=$_GET['id'];

$sql="DELETE FROM docente WHERE id_docente='$Id_Docente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:docente.php");
    }
?>
