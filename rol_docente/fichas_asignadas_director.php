<?php

session_start();

if (!isset($_SESSION['id_rol_usu'])) {
	header('location: ../login.php');
} else {
	if ($_SESSION['id_rol_usu'] != 2) {
		header('location: ../login.php');
	}
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>Fichas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../assets/mainTable.css">

    <?php include('nav.php'); ?>

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/gif" />

</head>

<body>

    <header>

    </header>
    <br></br>
    <br></br>



    <br>
    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaFichas" class=" table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>id_ficha</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Programa</th>
                                <th>Estado</th>
                                <th>Evaluacion</th>
                                <th>Creacion</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="../include/docente/js/ficha_asignada_director.js"></script>


</body>

</html>