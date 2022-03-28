<?
include ("vistas/header.php");
?>

    <script>
     $('.inicio').removeClass("inicio").addClass("active");
  </script>



<? 

session_start();
$varsesion = $_SESSION['usuario'];
$rol = $_SESSION['id_rol'];
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');


?>




<head>

<script src="http://localhost:8888/activos_dh/complementos/js/bootstrap.bundle.min.js" ></script>

<script src="http://localhost:8888/activos_dh/complementos/js/popper.min.js"></script>
<script src="http://localhost:8888/activos_dh/complementos/js/bootstrap.min.js" ></script>
<!-- <link rel="stylesheet" href="http://localhost:8888/activos_dh/complementos/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="http://localhost:8888/activos_dh/complementos/css/dataTables.bootstrap5.min.css">
<!-- https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" -->
<link rel="stylesheet" href="http://localhost:8888/activos_dh/complementos/css/jquery.dataTables.min.css">
<script src="http://localhost:8888/activos_dh/complementos/js/jquery-3.6.0.min.js" type="text/javascript"></script>



</head>
<body>
    
    <div class="">
    <h1>Activos en cola</h1>



    <table table id="customersTable" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
                <!-- <th scope="col">ID</th>-->
                <th scope="col">Sede</th> 
                
                <th scope="col">Nombre</th>
                <th scope="col">Documento</th>
       <!--          <th scope="col">DNI</th>
                <th scope="col">Asesor</th>
                
                <th scope="col">Horario</th>
                <th scope="col">Condicion</th>
                <th scope="col">Modalidad</th> 
                <th scope="col">Telefono</th>
                <th scope="col">Motivo</th> 
                <th scope="col">Observacion VC</th> -->

                
        </tr>
    </thead>
   
    <!-- <tfoot>
        <tr>
                <th  scope="col">Sub Campaña</th>
                <th scope="col">Supervisor</th>
                <th scope="col">Ejecutivo</th>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Horario</th>
                <th scope="col">Condicion</th>
                <th scope="col">Modalidad</th> 
        </tr>
    </tfoot> -->
</table>












<!--  -->
</div>
</body>
<script src="http://localhost:8888/activos_dh/complementos/js/jquery-3.6.0.min.js" ></script>

<script src="http://localhost:8888/activos_dh/complementos/js/jquery.dataTables.min.js"></script>
<script src="http://localhost:8888/activos_dh/complementos/js/jszip.min.js"></script>
<script src="http://localhost:8888/activos_dh/complementos/js/pdfmake.min.js"></script>
 <script src="http://localhost:8888/activos_dh/complementos/js/dataTables.buttons.min.js"></script>
<script src="http://localhost:8888/activos_dh/complementos/js/buttons.html5.min.js"></script>
<script src="http://localhost:8888/activos_dh/complementos/js/buttons.print.min.js"></script> 

<script type="text/javascript">
    $(document).ready(function() {
        $('#customersTable').dataTable({
            dom: 'Bfrtip',
            buttons: [ 'excel','print' ],
            "processing": true,
            "ajax": "get_data.php",
            "columns": [
                /* {data: 'key_id'}, */
                /*{data: 'sub_campaña'}, */
                {data: 'sede_dh'},
                {data: 'nombres_dh'},
                {data: 'n_document_dh'},
              /*   {data: 'documento'},
                {data: 'nombre_asesor'},
                {data: 'horario'},
                {data: 'condicion'},
                {data: 'modalidad'},
                {data: 'telefono'},
                {data: 'motivo'},
                {data: 'observacion_vc'}, */


            ]
        });
    });
    </script>