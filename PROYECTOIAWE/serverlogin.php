<?php
    session_start();
    
    include_once ("./funciones.php");
  
    //Conectar a la base de datos

    $conexion = conectarBD();

    $sql = "SELECT password FROM users WHERE name = ?";

    //Se prepara la sentencia 
    $sentencia = mysqli_prepare($conexion,$sql);

    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];

    //Se asocian los parámetros a la sentencia y se ejecuta la misma
    mysqli_stmt_bind_param($sentencia,"s",$username);
   
    mysqli_stmt_execute($sentencia);

    //Acceso a los resultados de la ejcución de la consulta
    $password_cifrado;

    mysqli_stmt_bind_result($sentencia,$password_cifrado);

    //Se mueve a la siguiente fila del conjunto de resultados, en este caso solamente uno.
    mysqli_stmt_fetch($sentencia);

    //Se comprueba que la contraseña sea correcta
    if (password_verify($password_1 ,$password_cifrado)){
        header("Location: ./pruebamenu.php");
    }else{
        header("Location: ./fallosesion.html");}
    
        





