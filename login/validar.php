<?php session_start(); ?>
		<?php
			include '../admin/conexion.php';
			if(isset($_POST['usuario']) && isset($_POST['password'])){
				
				$usuario = htmlentities(mysqli_real_escape_string($conexion,$_POST['usuario']));
				$pw = htmlentities(mysqli_real_escape_string($conexion,$_POST['password']));
                
				$log = mysqli_query($conexion,"SELECT * FROM usuarios WHERE 
                                                nombreUser='$usuario' AND passUser ='$pw'");
				if (mysqli_num_rows($log)>0) {
					$row = mysqli_fetch_array($log);

					$_SESSION["user"] = $row['nombreUser']; 
				  	$_SESSION["nivel"] = $row['idNivel']; 
				  	 
				  	if ($_SESSION["nivel"] == 1) {
				  		echo '<script> window.location="../admin/admin.php"; </script>';
				  	}
					  	  elseif ($_SESSION["nivel"] == 2) {
					  	 	echo '<script> window.location="../docentes/docentes.php" </script>';
					  	 }

							 else if($_SESSION["nivel"] == 3){
						  	 	echo '<script> window.location="../estudiantes/estudiantes.php </script>';
						  	 }
				} else {
					echo '<script> alert("Usuario o contraseña incorrectos. ");</script>';
					echo '<script> window.location="../login.php"; </script>';
				}
			}
		?>