<?php
session_start();
include "../conexion.php";

if (!empty($_POST["mes"]) && !empty($_POST["anio"])) 
{
    $query = mysqli_query($conexion,'select salas.id, salas.nombre, tmp.total from salas join ( select  pedidos.id_sala, SUM(pedidos.total) as total from  salas join pedidos on  pedidos.id_sala = salas.id where salas.estado = 1 and MONTH (fecha) = '.$_POST["mes"].' and YEAR (fecha) = '.$_POST["anio"].'  GROUP BY pedidos.id_sala ) tmp on tmp.id_sala = salas.id where salas.estado = 1'); 
}else{
    $query = mysqli_query($conexion,'select salas.id, salas.nombre, tmp.total from salas join ( select  pedidos.id_sala, SUM(pedidos.total) as total from  salas join pedidos on  pedidos.id_sala = salas.id where salas.estado = 1 and MONTH (fecha) = '.date("m").' and YEAR (fecha) = '.date("Y").'  GROUP BY pedidos.id_sala ) tmp on tmp.id_sala = salas.id where salas.estado = 1'); 
}

$arraySalasNombre = [];
$arraySalasVentaTotal = [];
while ($data0 = mysqli_fetch_assoc($query)) {
    array_push($arraySalasNombre, $data0['nombre']);
    array_push($arraySalasVentaTotal, $data0['total']);
}

$query1 = mysqli_query($conexion, "SELECT IFNULL (SUM(total),0) AS total FROM pedidos where MONTH (fecha) = date('m') and YEAR (fecha) = date('Y')");
$totalVentas = mysqli_fetch_assoc($query1);

echo json_encode(["salasNombre"=>$arraySalasNombre, "salasVentaTotal"=>$arraySalasVentaTotal,"total"=>$totalVentas]); 

