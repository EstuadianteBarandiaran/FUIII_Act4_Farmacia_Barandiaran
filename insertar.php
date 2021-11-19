<?php
include("conexion.php");
$con=conectar();

$IdMedicamento=$_POST['IdMedicamento'];
$Nombre=$_POST['Nombre'];
$Costo=$_POST['Costo'];
$Descripcion=$_POST['Descripcion'];
$Proveedor=$_POST['Proveedor'];


$sql="INSERT INTO medicamento VALUES('$IdMedicamento','$Nombre','$Costo','$Descripcion','$Proveedor')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: medicamento.php");
    
}else {
}
?>