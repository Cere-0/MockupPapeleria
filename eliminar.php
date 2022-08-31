<?php
session_start();
$datoscompra=$_SESSION['carrito'];
$eliminar=$_GET['id'];

unset($datoscompra[$eliminar]);


if(empty($datoscompra)){
	echo "Arreglo vacio";
	session_destroy();
}else{


$datoscompra = array_values($datoscompra);
$_SESSION['carrito']=$datoscompra;
$datoscompra=$_SESSION['carrito'];

echo "<pre>";
print_r($datoscompra);
echo "</pre>";
}
header('location: pedido.php');
?>