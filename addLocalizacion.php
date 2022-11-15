<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Añadir Localización</h6>
        </div>
        <div class="card-body">
            <div class="p-5">
                <div class="text-center">

                </div>
                <form class="user" action="controlador.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="itulo"
                         name="titulo" aria-describedby="titulo" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="descripcion"
                         name="descripcion" aria-describedby="descripcion" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="plataforma"
                         name="plataforma" aria-describedby="plataforma" placeholder="Plataforma">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="genero"
                         name="genero" aria-describedby="genero" placeholder="Genero" min=0 max=100>
                    </div>

                    <input type="hidden" name="idjuegos" value="<?php $_GET['id'];?>">

                    <input type="submit" id="add" name="accion" value="addLoca" class="btn btn-dark btn-user btn-block" />

                </form>
                <hr>
            </div>
        </div>
    </div>

</body>

</html>
<?php include("footer.php"); ?>