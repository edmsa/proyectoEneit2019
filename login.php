<!DOCTYPE html>

<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acceso a sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="imagenes/ittla.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery.js"></script>
    <link href="admin/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="admin/sweetalert/sweetalert.min.js"></script>
    <script src="admin/sweetalert/sweetalert-dev.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body>

    <section id="login-container" style="background-color: #1C5F47;">
        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-warning class">
                    <div class="panel-heading">
                        <div  style="text-align: center;">
                            <h3 class="panel-title"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acceso al Sistema </h3>  
                        </div>       
                    </div>
                    <div class="panel-body">
                   <div style="text-align: center;">
                       <img src="imagenes/logittla.jpg" height="120px" width="120px">
                   </div>
                   <br> 
                           <div  style="text-align: center;">
                             <p style="font-weight: bold"> Introduce tus datos de acceso</p>   
                           </div>                   
                        <form class="form-horizontal" role="form" method="post" action="login/validar.php">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" style="text-align: center;" class="form-control" name="usuario" id="usuario" placeholder="   Usuario" required="true">
                                    <i class="fa fa-user fa-fw"></i>
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-12">
                                    <input type="password" style="text-align: center;" class="form-control" name="password" id="password" placeholder="Contraseña" required="true">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <center><h6 style="color:green;">Contacte al administrador para obtener sus credenciales de acceso</h6></center>
                            <div class="form-group">
                               <div class="col-md-12">
                               <center>
                                <input type="submit" name="Submit" value="Entrar"  class="btn btn-success" >
                                <a href="index.php" class="btn btn-danger">Salir</a>                             
                                 </center> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
