<?php
// include_once '../config/parametros_db.php';
include_once 'access_control/connection.php';
include_once 'controller/j_utilijador/j_utilijador_class.php';
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fundasaun Dezenvolvimentu Software Livre">
    <meta name="author" content="FDSL">

    <title>FDSL</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon_fdsl.png" />

    <!-- Datatable -->
    <!-- Identidade Pessoal -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Javascript -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="js/jquery.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="card">
                    <?php  ?>
                    <div class="card-header bg-gradient-success">
                        <h5 class="card-title text-white" id="exampleModalLabel">Login</h5>
                    </div>
                    <form action="controller/j_utilijador/j_utilijador_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row justify-content-md-center mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="id_rejistu">ID Membru :</label>
                                        <input type="text" class="form-control" id="id_rejistu" name="id_rejistu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Password :</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                            <button type="submit" class="btn btn-success" name="login_utilijador">Tama ba Sistema</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>