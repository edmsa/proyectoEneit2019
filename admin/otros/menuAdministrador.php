       <?php
       include ('conexion.php');

        $TotalEstudiantes = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM estudiantes"));
        $TotalDocentes = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM docentes"));
        $TotalAsignaturas = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM asignaturas"));
        $TotalCarreras = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM carreras"));
        $TotalCuatrimestre = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM cuatrimestres"));
        $TotalGrupos = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM grupos"));
        $TotalHorarios = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM horarios"));
        $TotalTurnos = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM turnos"));
        $TotalUsuarios = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM usuarios"));
        $TotalYearsAcademicos = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM years_academicos"));
        $TotalPlanesEstudio = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM plan_estudio"));
        $TotalNumeroAsignaciones = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM numeros_asignaciones"));
        $TotalUsuarios = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM usuarios"));
        $TotalAsignaciones = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM asignaciones"));
        $TotalInscripciones = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM inscripciones_asignaturas"));
         $TotalMensajes = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM mensajes"));
        ?>

         <div class="row">
           
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-child fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Estudiantes</h4>
                         <p>Total de Estudiantes: <span class="label label-danger pull-right"><?php echo $TotalEstudiantes ?></span></p>
                         <a href="estudiantes.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                       <h4 class="media-heading">Asignaturas</h4>
                       <p>Total de Asignaturas: <span class="label label-danger pull-right"><?php echo $TotalAsignaturas ?></span></p>
                       <a href="asignaturas.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-th fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                          <h4 class="media-heading">Semestre</h4>
                      <p>Total de Semestres: <span class="label label-danger pull-right"><?php echo $TotalCuatrimestre ?></span></p>
                      <a href="cuatrimestre.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-group fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                         <h4 class="media-heading">Docentes</h4>
                       <p>Total de Docentes: <span class="label label-danger pull-right"><?php echo $TotalDocentes ?></span></p>
                       <a href="docentes.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            
            
           
        </div>

         <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                      <h4 class="media-heading">Usuarios</h4>
                        <p>Total de Usuarios: <span class="label label-danger pull-right"><?php echo $TotalUsuarios ?></span></p>
                        <a href="usuarios.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                      <h4 class="media-heading">Mensajes</h4>
                        <p>Total de Usuarios: <span class="label label-danger pull-right"><?php echo $TotalMensajes ?></span></p>
                        <a href="mensajes.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                            <h4 class="media-heading">Configuraciones</h4>
                        <p>Configuracion de Cuenta<span class="label label-danger pull-right"></span></p>
                      <a href="cambiar_foto.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
        </div>