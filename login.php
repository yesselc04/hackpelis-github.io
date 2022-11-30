<?php
//crear la conesion usando nuestro archivo db_conn.php
include 'dbconn_pdo.php';

//session para iniciar nuestra sesion en php
session_start();
error_reporting(0);

//si el formulario a subir; tiene email y passaword completo
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    //verifica si el usuario ay existe con estas credenciales
    $result=mysqli_query($conn,"SELECT 'email' , 'password' FROM user WHERE email='$email' and password='$password'");
    //contar el numero usuarios/filas retornados en la consulta
    $user_match = mysqli_num_rows($result);
    //si el usuario con el email existe que nos redirecciones a alguna pagina
    if($user_match > 0){

        $_SESSION['email'] = $email;
        header("location: main.php");
    } else{
        echo "<script>alert('El usuario no esta registrado, por favor registrese')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="icon" href="carpeta/imagenes/netflix.png">
    <link rel="stylesheet" href="carpeta/css/estilos.css">
</head>
<body>
        <main>

                <!--Formulario de Login y si no tiene puede entrar al registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="login.php" class="formulario__login" method="POST">

                        <h2>Iniciar Sesión</h2>
                        <!--correo electronico-->
                        <p class="mb-5 pb-lg-2" style="color: #FFFFFF;"> Correo Electronico </p>
                        <input type="email" name="email" placeholder="email@email.com">
                        <h2></h2>

                        <!--contraseña-->
                        <p class="mb-5 pb-lg-2" style="color: #FFFFFF;"> Contraseña</p>
                        <input type="password" name="password" placeholder="**********">

                        <!--iniciar sesion-->
                        <button name="login" type="submit">Iniciar Sesion</button>
                        <h2></h2>
                        <p class="mb-5 pb-lg-2" style="color: #FFFFFF;">  ¿No tiene cuenta? </p>
                        <h2></h2>

                        <!--registrarse-->
                        <a href="register.php" style="color: #FF0000;"><center><b>REGISTRESE</b></center></a>                                 

                    </form> 
                </div>
            </div>
        </main>
        
</body>
</html>
