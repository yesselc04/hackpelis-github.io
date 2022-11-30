<?php
//incluir el archivo de conexión
include_once('dbconn_pdo.php');
//verificar si el form ha sido enviado, insertar data de usuario dentro de la base de datos
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $email= $_POST['email'];
    $password = $_POST['password'];

	if ($email == $email) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (name, dni, email, password)
					VALUES ('$name', '$dni', '$email', '$password')";
			$result = mysqli_query($conn, $sql);

			//Datos completos es exitoso
			if ($result) {
				echo "<script>alert('Registro de usuario completado, Bienvenido.... Para ingresar a Netflix, inicie sesión.')</script>";
				$name = "";
				$email = "";
				$dni = "";
				}
				//el email ya existe
		} else {
			echo "<script>alert('Upss! El Email ya existe.')</script>";
		}
	} 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix-Registrarse</title>
    <link rel="icon" href="carpeta/imagenes/netflix.png">
    <link rel="stylesheet" href="carpeta/css/registro.css" >
	<script type="text/javascript" src="carpeta/js/jquery.js" ></script>
     <script type="text/javascript" src="carpeta/js/codigo.js" ></script>
</head>
<body>
        <main>       
                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">           

                    <!--Register-->

                    <form action="register.php" class="formulario" id="formulario" method="POST">
					<h2>REGISTRO</h2>
					<h></h>
                    <div class="formulario__grupo" id="grupo__name">
						<label for="name" class="formulario__label" >Nombre</label>
				        <div class="formulario__grupo-input">
					        <input type="text" class="formulario__input" name="name" id="name" placeholder="John Doe">
					        <i class="formulario__validacion-estado fas fa-times-circle"></i>
				        </div>
				        <p class="formulario__input-error">El usuario solo puede contener letras.</p>
			        </div>

				<!-- Grupo: dni -->
				
			        <div class="formulario__grupo" id="grupo__dni">
				        <label for="dni" class="formulario__label"  >DNI</label>
				        <div class="formulario__grupo-input">
					        <input type="text" class="formulario__input" name="dni" id="dni" placeholder="4491234567">
					        <i class="formulario__validacion-estado fas fa-times-circle"></i>
				        </div>
				        <p class="formulario__input-error">El DNI solo puede contener numeros y el maximo son 8 dígitos.</p>
			        </div>

			    <!-- Grupo: Correo Electronico -->
			        <div class="formulario__grupo" id="grupo__email">
				        <label for="email" class="formulario__label"  >Correo Electrónico</label>
				        <div class="formulario__grupo-input">
					        <input type="email" class="formulario__input" name="email" id="email" placeholder="correo@correo.com">
					        <i class="formulario__validacion-estado fas fa-times-circle"></i>
				        </div>
				        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos y guion bajo.</p>
                    </div>

			    <!-- Grupo: Contraseña -->
			        <div class="formulario__grupo" id="grupo__password">
				        <label for="password" class="formulario__label">Contraseña</label>
				        <div class="formulario__grupo-input">
					        <input type="password" class="formulario__input" name="password" id="password" placeholder="*******">
					        <i class="formulario__validacion-estado fas fa-times-circle"></i>
				    </div>
				    <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			    </div>

                <!--Mensaje  para rellenar el formulario-->
			        <div class="formulario__mensaje" id="formulario__mensaje">
				        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			        </div>

			        <div class="formulario__grupo formulario__grupo-btn-enviar">
				        <button class = "btn_2" type= "submit" name= "register" class="formulario__btn">Enviar</button>
				            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
							<h2></h2>
							<a href="login.php" style="color: #000000; ;"><center><b>Iniciar Sesion</b></center></a>
							
			        </div>
					
                    </form>
                </div>
            </div>
        </main>
		
        <script src="carpeta/js/formulario.js"></script>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        
</body>
</html>