<?php
    session_start();
    include '../admin/conexion.php';
    
    if(isset($_SESSION["user"])){
	      if($_SESSION["nivel"] == 2){
              
              $user = $_SESSION["user"];
                $query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombreUser = '$user'");
          }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Docentes</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="../css/modern-business.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

<body>
<?php
include ('menu_inicio_docente.php');
 ?>
<br>
    <!-- Page Content -->
    <div class="container-fluid">

        <!-- Page Heading/Breadcrumbs -->
        
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../imagenes/logittla.jpg" width="70" height="70" class="img-responsive"></div>
                 <div class="col-md-6">         
                <img src="../imagenes/banerDoc.png" class="img-responsive">      
             </div>
               <div class="col-md-3">
                 
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea:</b> <?php echo $user ?></h5>
               </div> 

            </div>

           
            <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li class="active">Docentes</li>
                </ol>
            </div>
        <!-- /.row -->

        <!-- Content Row -->
    
            <!-- Sidebar Column -->

            <!-- Content Column -->
            <div class="col-md-12">
                <h3>Estimado docente: </h3>
                <p>En esta seccion de la plataforma usted podra subir los archivos que necesite compartir con sus alumnos. Sus alumnos podran consultar todo el material que usted publique para reforzar temas vistos en clase.</p>

                  <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">                 
                              <img src="../imagenes/docente1.png" class="img-responsive">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Material Didactico para estudiantes</h4>
                        <a href="material_didactico.php" class="btn btn-primary"> <i class="glyphicon glyphicon-download"></i>   Entrar</a>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Footer -->
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <?php
    include('../includes/footer.php');
   ?>
</body>
</html>

<?php
     } else {
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
        echo '<script> window.location="../login.php"; </script>';
     }
?>