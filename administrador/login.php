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

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="card">

                    <section class="vh-100">
                        <div class="container-fluid h-custom">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-9 col-lg-6 col-xl-5">
                                    <img src="img/logo_fdsl.jpeg" class="img-fluid" alt="Sample image">
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    <form action="controller/j_utilijador/j_utilijador_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">

                                        <div class="divider d-flex align-items-center my-4">
                                            <h2 class="text-center fw-bold mx-3 mb-0">LOGIN SISTEMA INFORMASAUN FDSL</h2>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="id_rejistu" name="id_rejistu" class="form-control form-control-lg" placeholder="Hatama ita nia ID-Membro nian" />
                                            <label class="form-label" for="id_rejistu">ID-Membro</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Hatama ita nia password" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>

                                        <!-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">
                                        Remember me
                                    </label>
                                    </div>
                                    <a href="#!" class="text-body">Haluha password?</a>
                                </div> -->

                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <button type="submit" name="login_utilijador" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                                Login
                                            </button>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color: #006600;">
                            <!-- Copyright -->
                            <div class="text-white mb-3 mb-md-0">
                                Copyright © <?= date('Y') ?>. All rights reserved.
                            </div>
                            <!-- Copyright -->

                            <!-- Right -->
                            <div>
                                <a href="#!" class="text-white me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#!" class="text-white me-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#!" class="text-white me-4">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#!" class="text-white">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                            <!-- Right -->
                        </div>
                    </section>

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