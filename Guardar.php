<?php

include("conexion.php");

$Codigo = $_POST['Codigo'];
$Nom_Producto = $_POST['Nom_Producto'];
$Costo = $_POST['Costo'];
$Porc_Venta = $_POST['Porc_Venta'];
$Fecha = $_POST['Fecha'];

$Precio_Venta = $Costo + ($Costo * $Porc_Venta / 100);

$nombreImagen = $_FILES['simagen']['name'];
$tempImagen = $_FILES['simagen']['tmp_name'];

$ruta = "imagenes/";

if(!file_exists($ruta)){
    mkdir($ruta);
}

move_uploaded_file($tempImagen, $ruta . $nombreImagen);

$sql = "INSERT INTO productos
(Codigo, Nom_Producto, Costo, Porc_Venta, Precio_Venta, Fecha, Imagen)

VALUES
('$Codigo',
'$Nom_Producto',
'$Costo',
'$Porc_Venta',
'$Precio_Venta',
'$Fecha',
'$nombreImagen')";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    echo "Datos guardados correctamente";
}else{
    echo "Error al guardar";
}

?>