<?php
session_start();
include_once "includes/header.php";
include "../conexion.php";
$query1 = mysqli_query($conexion, "SELECT COUNT(id) AS total FROM salas WHERE estado = 1");
$totalSalas = mysqli_fetch_assoc($query1);
$query2 = mysqli_query($conexion, "SELECT COUNT(id) AS total FROM platos WHERE estado = 1");
$totalPlatos = mysqli_fetch_assoc($query2);
$query3 = mysqli_query($conexion, "SELECT COUNT(id) AS total FROM usuarios WHERE estado = 1");
$totalUsuarios = mysqli_fetch_assoc($query3);
$query4 = mysqli_query($conexion, "SELECT COUNT(id) AS total FROM pedidos WHERE estado = 1");
$totalPedidos = mysqli_fetch_assoc($query4);

$m = date('m');
$a = date('Y');
$query5 = mysqli_query($conexion, "SELECT IFNULL (SUM(total),0) AS total FROM pedidos where MONTH (fecha) =$m  and YEAR (fecha) = $a ");
$totalVentas = mysqli_fetch_assoc($query5);

$query6 = mysqli_query($conexion, "SELECT * FROM salas");

$query7 = mysqli_query($conexion,'select salas.id, salas.nombre, tmp.total from salas join ( select  pedidos.id_sala, SUM(pedidos.total) as total from  salas join pedidos on  pedidos.id_sala = salas.id where salas.estado = 1 and MONTH (fecha) = '.date("m").' and YEAR (fecha) = '.date("Y").'  GROUP BY pedidos.id_sala ) tmp on tmp.id_sala = salas.id where salas.estado = 1'); 
$arraySalasNombre = [];
$arraySalasVentaTotal = [];
while ($data0 = mysqli_fetch_assoc($query7)){
    array_push($arraySalasNombre,$data0['nombre']);
    array_push($arraySalasVentaTotal,$data0['total']);
}

?>
<div class="card">
    <div class="card-header">
        <label for="">Seleccione el mes: </label>
        <select class="custom-select col-md-2" id="selectMes">
            <option disabled>Seleccione ...</option>
            <?php 
            $meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
            $aux = (int)date("m")-1;
            foreach ($meses as $key => $mes) {
                if ($key == $aux) {
                    echo '<option selected value="'.$key.'">'.$mes.'</option>';    
                }else{
                    echo '<option value="'.$key.'">'.$mes.'</option>';
                }
            }
        ?>
        </select>
        
        <label for="">Seleccione el Anio:</label>
        <select class="custom-select col-md-2" id="selectAnio"> 
            <option disabled>Seleccione ...</option>
            <?php 
            $error =5;
            $anioActual = date("Y");
            for ($i= $anioActual-$error; $i <= $anioActual+$error; $i++) { 
                if ($i == $anioActual) {
                    echo '<option selected value="'.$i.'">'.$i.'</option>';
                }else{
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
            } 
        ?>
        </select> <br><br>
    </div>

    <div class="card-body">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Detalle de ventas por sala</h3>
                        </div>
                    </div> -->
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg"><?php echo "El Total de la venta del mes es: ".$totalVentas['total']; ?> Bs</span>
                                <span>Total</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>

<script>
    var nombresSalas = [];
    var sumaTotalMesVenta = [];
    var fechaActual = new Date;
    var mes = fechaActual.getMonth()+1;
    var anio = fechaActual.getFullYear();
    
    function grafico() {
    'use strict'
    const action = "sales";
    $.ajax({
        url: 'chart.php',
        type: 'POST',
        data: {
            action
        },
        async: true,
        success: function (response) {
            if (response != 0) {
                var data = JSON.parse(response);
                console.log(data);
                try {
                    var ticksStyle = {
                        fontColor: '#495057',
                        fontStyle: 'bold'
                    }
                
                    var mode = 'index'
                    var intersect = true
                
                    var $salesChart = $('#sales-chart')
                    // eslint-disable-next-line no-unused-vars
                    var salesChart = new Chart($salesChart, {
                        type: 'bar',
                        data: {
                            labels: nombresSalas,
                            datasets: [
                                {
                                    backgroundColor: '#007bff',
                                    borderColor: '#007bff',
                                    data: sumaTotalMesVenta,
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            tooltips: {
                                mode: mode,
                                intersect: intersect
                            },
                            hover: {
                                mode: mode,
                                intersect: intersect
                            },
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    // display: false,
                                    gridLines: {
                                        display: true,
                                        lineWidth: '4px',
                                        color: 'rgba(0, 0, 0, .2)',
                                        zeroLineColor: 'transparent'
                                    },
                                    ticks: $.extend({
                                        beginAtZero: true,
                
                                        // Include a dollar sign in the ticks
                                        callback: function (value) {
                                            if (value >= 1000) {
                                                value /= 1000
                                                value += 'k'
                                            }
                
                                            return  value + ' Bs'
                                        }
                                    }, ticksStyle)
                                }],
                                xAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false
                                    },
                                    ticks: ticksStyle
                                }]
                            }
                        }
                    })
                } catch (error) {
                    console.log(error);
                }
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}
    $(document).ready(function(){
        $.ajax({
        type: "POST",
        url: "reporte_dia_salas_api.php",
        data: {"mes":mes, "anio":anio},

        success: function (response) {
            let p = JSON.parse(response);
            nombresSalas =  p.salasNombre;
            sumaTotalMesVenta = p.salasVentaTotal;
            grafico();
        }
        });  
        grafico();
    });

    $("#selectMes").on('change',function(){
       mes = this.value ;  
    });

    $("#selectAnio").on('change',function(){
       anio = this.value ;
       $.ajax({
        type: "POST",
        url: "reporte_dia_salas_api.php",
        data: {"mes":mes, "anio":anio},

        success: function (response) {
            let p = JSON.parse(response);
            nombresSalas =  p.salasNombre;
            sumaTotalMesVenta = p.salasVentaTotal;
            grafico();
        }
        });  
    });

    

</script>