<?php

include("conexion.php");
$con=conectar();

$IdMedicamento=$_POST['IdMedicamento'];
$Nombre=$_POST['Nombre'];
$Costo=$_POST['Costo'];
$Descripcion=$_POST['Descripcion'];
$Proveedor=$_POST['Proveedor'];

$sql="UPDATE medicamento SET  Nombre='$Nombre',Costo='$Costo',Descripcion='$Descripcion',Proveedor='$Proveedor' WHERE IdMedicamento='$IdMedicamento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: medicamento.php");
    }
?>