<?php
session_start();
include "../conexion.php";

if (!empty($_POST["mes"]) && !empty($_POST["anio"])) 
{
    //$query = mysqli_query($conexion,'select salas.id, salas.nombre, tmp.total from salas join ( select  pedidos.id_sala, SUM(pedidos.total) as total from  salas join pedidos on  pedidos.id_sala = salas.id where salas.estado = 1 and MONTH (fecha) = '.$_POST["mes"].' and YEAR (fecha) = '.$_POST["anio"].'  GROUP BY pedidos.id_sala ) tmp on tmp.id_sala = salas.id where salas.estado = 1'); 
    $query = mysqli_query($conexion, 'select usuarios.id, usuarios.nombre,	tmp.total from	usuarios join ( select 	pedidos.id_usuario , SUM(pedidos.total) as total from pedidos join usuarios on usuarios.id = pedidos.id_usuario join detalle_pedidos on detalle_pedidos.id_pedido = pedidos.id where 	usuarios.estado = 1 and MONTH (pedidos.fecha) = 11 and YEAR (pedidos.fecha) = 2023 GROUP BY	pedidos.id_usuario ) tmp on tmp.id_usuario = usuarios.id where usuarios.estado = 1'); 
    $query1 = mysqli_query($conexion, "SELECT IFNULL (SUM(total),0) AS total FROM pedidos where MONTH (fecha) = ".$_POST["mes"]." and YEAR (fecha) = ".$_POST["anio"]);
}else{
    $query = mysqli_query($conexion,'select salas.id, salas.nombre, tmp.total from salas join ( select  pedidos.id_sala, SUM(pedidos.total) as total from  salas join pedidos on  pedidos.id_sala = salas.id where salas.estado = 1 and MONTH (fecha) = '.date("m").' and YEAR (fecha) = '.date("Y").'  GROUP BY pedidos.id_sala ) tmp on tmp.id_sala = salas.id where salas.estado = 1'); 
    $query1 = mysqli_query($conexion, "SELECT IFNULL (SUM(total),0) AS total FROM pedidos where MONTH (fecha) = date('m') and YEAR (fecha) = date('Y')");
}

$arrayUsuariosNombre = [];
$arrayUsuariosVentaTotal = [];
while ($data0 = mysqli_fetch_assoc($query)) {
    array_push($arrayUsuariosNombre, $data0['nombre']);
    array_push($arrayUsuariosVentaTotal, $data0['total']);
}


$totalVentas = mysqli_fetch_assoc($query1);

echo json_encode(["usuariosNombre"=>$arrayUsuariosNombre, "usuariosVentaTotal"=>$arrayUsuariosVentaTotal,"total"=>$totalVentas]); 

