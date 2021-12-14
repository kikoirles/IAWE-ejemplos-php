<?php

include_once ("./funciones.php");

session_start();

// Variables de inilizacion
$username = "";
$email    = "";
$errors = array(); 

// Conexion base de datos
$con = conectarBD();

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // Recibe los campos imput del formulario de registro
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  // Validacion que si el usuario a intoducido datos en el sistema  ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username obligatorio"); }
  if (empty($email)) { array_push($errors, "Email obligatorio"); }
  if (empty($password_1)) { array_push($errors, "Password obligatorio"); }
  if ($password_1 != $password_2) {array_push($errors, "Las dos contraseñas no coinciden");}

  // Revisa primeramnete parametros de la sentecia
  // Comprueba si el usuario existe ya en la base de datos para crearlo o no 
  $user_check_query = "SELECT * FROM users WHERE username=? OR email=? LIMIT 1";

  $statement = mysqli_prepare ($con,$user_check_query);

  mysqli_stmt_bind_param($statement,"ss",$username,$email);

  mysqli_stmt_execute($statement);

  $result = myslqi_stmt_get_result($statement);
  
  $user = mysqli_fetch_assoc ($result);

  if ($user) { // si el usuario existe
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finalmente, registre usuario si no hay errores en el formulario
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypta la contraseña antes de guardar en la base de datos

    $query = "INSERT INTO users (username, email, password) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($con, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.html');
  }
}
// ... 
  
