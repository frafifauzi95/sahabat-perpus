<?php session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda Belum Login'); </script>";
    echo "<script>location='../index.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Sahabat Perpus </title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../src/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../src/css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="../src/js/solid.js" crossorigin="anonymous"></script>
    <script defer src="../src/js/fontawesome.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3> Sahabat Perpus</h3>
                <strong> SP </strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="menu.php?halaman=dashboard">
                        <i class="fas fa-briefcase"></i>
                        Dashboard
                    </a>
                    <li>
                        <li>
                            <a href="menu.php?halaman=anggota">
                                <i class="fas fa-briefcase"></i>
                                Anggota
                            </a>
                            <li>
                                <a href="menu.php?halaman=buku">
                                    <i class="fas fa-image"></i>
                                    Buku
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-question"></i>
                                    Pinjaman
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-paper-plane"></i>
                                    Laporan
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-paper-plane"></i>
                                    Extra
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Page Content  -->
                    <div id="content">

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">

                                <button type="button" id="sidebarCollapse" class="btn btn-info">
                                    <i class="fas fa-align-left"></i>
                                    <span> Menu </span>
                                </button>
                                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-align-justify"></i>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="btn btn-danger" href="../keluar.php"> Keluar </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- jQuery CDN - Slim version (=without AJAX) -->
                        <script src="../src/js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
                        <!-- Popper.JS -->
                        <script src="../src/js/popper.min.js" crossorigin="anonymous"></script>
                        <!-- Bootstrap JS -->
                        <script src="../src/js/bootstrap.min.js" crossorigin="anonymous"></script>

                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#sidebarCollapse').on('click', function () {
                                    $('#sidebar').toggleClass('active');
                                });
                            });
                        </script>
                    </body>

                    </html>