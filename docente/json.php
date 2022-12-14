<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<?php 
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM docente";
  
    

    $docentes = array(); //creamos un array
    if($query=mysqli_query($con,$sql)){
while($row = mysqli_fetch_array($query)) 
{ 	

    $idC=$row['id_docente'];
    $dato1=$row['nombres'];
    $dato2= $row['apellidos'];
    $dato3= $row['telefono'];
    $dato4=$row['calle'];
    $dato5=$row['numero'];
    $dato6=$row['colonia'];
    $dato7=$row['Municipio'];

	
	$docentes[] = array('idDocente'=> $idC, 'nombres'=> $dato1, 'apellidos'=> $dato2,
						'telefono'=> $dato3, 'calle'=> $dato4,'numero'=> $dato5,'colonia'=> $dato6,'municipio'=> $dato7);


}
    }
$json_string = json_encode($docentes);
echo $json_string;
?>
<br>
<a class="btn btn-primary btn-lg btn-block" href="docente.php" role="button">Regresar</a>