<?php
session_start();
if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {
    require_once "../conexion.php";
    $id_user = $_SESSION['idUser'];
    $query = mysqli_query($conexion, '
    SELECT
        p.*,
        s.nombre AS sala,
        u.nombre
    FROM
        pedidos p
    INNER JOIN salas s ON
        p.id_sala = s.id
    INNER JOIN usuarios u ON
        p.id_usuario = u.id
    where YEAR(p.fecha) = '.date('Y').' and MONTH(p.fecha) = '.date('n').' and DAY (p.fecha) = '.date('j'));
    include_once "includes/header.php";
?>
    <div class="card">
        <div class="card-header">
            Historial pedidos
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sala</th>
                            <th>Mesa</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $contador = 1;
                            $id_pedido = [];
                            while ($row = mysqli_fetch_assoc($query)) 
                            {
                                if ($row['estado'] == 'PENDIENTE') {
                                    $estado = '<span class="badge badge-danger">Pendiente</span>';
                            } else {
                                $estado = '<span class="badge badge-success">Completado</span>';
                            }
                        ?>
                            <tr>
                                <?php 
                                    array_push($id_pedido,$row['id']); 
                                ?>
                                <td><?php echo $contador; $contador++; ?></td>
                                <td><?php echo $row['sala']; ?></td>
                                <td><?php echo $row['num_mesa']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['total']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td>
                                    <a href="#" class="btn"><?php echo $estado; ?></a>
                                </td>
                                <td>
                                    <button type="button" onclick="setIdPedido(<?php echo $row['id'];?>)" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" data-placement="top" title="Facturar">
                                        <i class="fas fa-toilet-paper"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INGRESE LOS DATOS DEL CLIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="factura.php" method="post" id="factura">
                    <div class="form-group">
                        <input type="text" id="id_pedido" value="<?php echo $id_pedido[1]; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre o Razon Social:</label>
                        <input type="email" id="nombre_razon_social" value="S/N" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nit:</label>
                        <input type="text" id="nit" value="0" class="form-control" id="exampleInputPassword1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="facturar()">Imprimir</button>
            </div>
            </div>
        </div>
    </div>

<?php include_once "includes/footer.php";
} else {
    header('Location: permisos.php');
}
?>


<script>
    // const { jsPDF } = window.jspdf;
    let r = (Math.random() + 1).toString(36).substring(2);
    var id_pedido = 0;
    
    function setIdPedido(id){
        id_pedido = id;
    }
    
    function facturar(){
        let nombreRazonSocial = $("#nombre_razon_social").val();
        let nit = $("#nit").val();
        console.log(id_pedido);
        location.href = "factura.php?id_pedido="+id_pedido+'&nombre_razonsocial='+nombreRazonSocial+'&nit='+nit;
        nombreRazonSocial = $("#nombre_razon_social").val("S/N");
        nit = $("#nit").val("0");
        $('#exampleModal').modal('hide');
    }  
</script>