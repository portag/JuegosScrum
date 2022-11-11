<?php session_start(); ?>
<?php include("lib.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>8D Juegos - Home</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php" style="
    width: 152px;
">
                <div class="sidebar-brand-icon bg-password-image img-thumbnail rotate-n-15 text-dark  w-100">
                    <i class="fas fa-laugh-wink" style="visibility:hidden"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-center">JUEGOS 8D</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">




            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Gestionar juegos</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#insertar">Añadir juego</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#addLoca">Añadir localizacion</a>

                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top bg-dark shadow">





                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
</body>

</html>