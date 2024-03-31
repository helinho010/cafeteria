</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#"> Luis Enrique Casas A.</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../assets/dist/js/adminlte.min.js"></script>

<script src="../assets/plugins/chart.js/Chart.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="../assets/js/sweetalert2.all.min.js"></script>
<script src="../assets/js/funciones.js"></script>

<script>
    $("#nombre").bind('keypress', function(event) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
</script>

</body>
</html>