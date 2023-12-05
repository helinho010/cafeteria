<?php
session_start();
include "../conexion.php";

require_once '../vendor/autoload.php';
use  Dompdf\Dompdf;

// echo $_POST["id_pedido"];
// echo $_POST["nit"];
// echo $_POST["nombreRazonSocial"];

if (!empty($_POST["id_pedido"])) 
{
    $query = mysqli_query($conexion,'
        select
            pedidos.num_mesa,
            pedidos.fecha,
            pedidos.observacion,
            pedidos.estado as estado_pedidos,
            usuarios.nombre as nombre_usuarios,
            salas.nombre as nombre_salas,
            salas.estado as estado_salas,
            tmp.nombre_detalle_pedidos,
            tmp.precio,
            tmp.cantidad
        from
            pedidos
        join usuarios on
            usuarios.id = pedidos.id_usuario
        join salas on
            salas.id = pedidos.id_sala
        join (
            select
                pedidos.id as id_pedidos,
                pedidos.id_sala,
                pedidos.num_mesa,
                pedidos.id_usuario,
                pedidos.fecha as fecha_pedidos,
                pedidos.estado as estado_pedidos,
                detalle_pedidos.nombre as nombre_detalle_pedidos,
                detalle_pedidos.precio,
                detalle_pedidos.cantidad
            from
                detalle_pedidos
            join pedidos on
                pedidos.id = detalle_pedidos.id_pedido) as tmp on
            tmp.id_pedidos = pedidos.id 
        where pedidos.id ='.$_POST["id_pedido"]); 
}else{
    echo "Error al pasar id del pedido";
}


$datosFacturaPedido = mysqli_fetch_assoc($query);

echo json_encode($datosFacturaPedido); 


// // crear una instancia y usar la clase dompdf 
// $dompdf = new  Dompdf ();
// $dompdf-> loadHtml ( 'hola mundo' );

// // (Opcional) Configurar el tamaño y la orientación del papel 
// //$dompdf-> setPaper ( 'A4' , 'landscape' );

// // Representa el HTML como PDF 
// $dompdf -> render ();

// // Envía el PDF generado al navegador 
// $dompdf -> stream ();