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

<body>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span class="text-light font-weight-bold">Copyright &copy; BLIBLIOTECA JUEGOS 2022</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>

    <script>

        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';


        

        // Pie Chart Example
        // var ctx = document.getElementById("myPieChart");
        // var myPieChart = new Chart(ctx, {
        //     type: 'doughnut',
        //     data: {
        //         labels: ["Completado", "no"],
        //         datasets: [{
        //             data: [50, 50],
        //             backgroundColor: ['#4e73df', '#1cc88a'],
        //             hoverBackgroundColor: ['#2e59d9', '#17a673'],
        //             hoverBorderColor: "rgba(234, 236, 244, 1)",
        //         }],
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         tooltips: {
        //             backgroundColor: "rgb(255,255,255)",
        //             bodyFontColor: "#858796",
        //             borderColor: '#dddfeb',
        //             borderWidth: 1,
        //             xPadding: 15,
        //             yPadding: 15,
        //             displayColors: false,
        //             caretPadding: 10,
        //         },
        //         legend: {
        //             display: false
        //         },
        //         cutoutPercentage: 80,
        //     },
        // });
    </script>
    <script src="js/demo/chart-bar-demo.js"></script>


    <!-- MODAL INSERTAR TAREA -->
    <div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Juego</h5>
        </div>
        <div class="modal-body">
            <form id='formInsertarTarea' > 

                <div class='mb-3'>
                    <label for='titlulo' class='form-label'>Titulo</label>
                    <input type='text' name='titulo' class='form-control' aria-describedby='emailHelp'>
                </div>

                <div class='mb-3'>
                    <label for='descripcion' class='form-label'>Descripción</label>
                    <textarea class='form-control' name="descripcion" id="" cols="30" rows="5"></textarea>
                </div>


                <!-- <div class='mb-3'>
                    <label for='plataforma' class='form-label'>plataforma</label>
                    <textarea class='form-control' name="plataforma" id="" cols="30" rows="5"></textarea>
                </div>

                <div class='mb-3'>
                    <label for='genero' class='form-label'>genero</label>
                    <textarea class='form-control' name="genero" id="" cols="30" rows="5"></textarea>
                </div> -->



                <div class='mb-3'>
                    <label for='plataforma'  class='form-label'>Plataforma</label> <br>
                    <select class="form-select" name='plataforma' aria-label="Default select example">
                    <option name='plataforma' value="PC">PC</option>
                    <option name='plataforma' value="PS5">PS5</option>
                    <option name='plataforma' value="SWICHT">SWICHT</option>
                    <option name='plataforma' value="XBOX">XBOX</option>
                    </select>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="plataforma" name="plataforma">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Plataforma</label>
                    </div>
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="aventura" name="aventura">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Aventura</label>
                    </div>
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rol" name="rol">
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Role playing</label>
                    </div>
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="lucha" name="lucha">
                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">lucha</label>
                </div>
                
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary hidden-xs" data-bs-dismiss="modal">Close</button>
            <button type='submit' name='insertar' class='btn btn-primary' form="formInsertarTarea" formaction="controlador.php" formmethod="get">Enviar</button>
        </div>
        </div>
    </div>
    </div>




</body>

</html>