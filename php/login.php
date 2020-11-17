<?php
  
  require_once "conexion.php";
  $db_host            = "127.0.0.1";
  $db_user            = "root";
  $db_password        = "";
  $db_login_table     = "claves";
  $db                 = conexion($db_host,$db_user,$db_password,$db_login_table);
  $usuario            = $_POST['Usuario'];
  $pass               = ($_POST['Clave']);
  $sql                = "SELECT * from usuarios where Usuario='$usuario'"; // and Clave='$pass'"
  $result             = mysqli_query($db,$sql);
  $user_exists        = (mysqli_num_rows($result) > 0) ? true : false;
  $user_correct_pass  = false;
  $response           = array();
//   var_dump($pass);
  if($user_exists)
  {
    $sql2               = "SELECT * from usuarios where Usuario='$usuario' and Clave='$pass'";
    $request_pass       = mysqli_query($db,$sql2);
    $user_correct_pass  = (mysqli_num_rows($request_pass) > 0) ? true : false;
  }
  if($user_exists AND !$user_correct_pass)
  {
    $response['conection']  = false;
    $response['message']    = "Contraseña Incorrecta :(";
  }
  else if(!$user_exists AND !$user_correct_pass)
  {
    $response['conection']  = false;
    $response['message']    = "Usuario no existe :(";
  }
  else if($user_exists AND $user_correct_pass)
  {
    session_start();
    $_SESSION['user']=$usuario;
    $response['conection']  = true;
    $response['message']    = "Logeado con exito! :D";
  }
  echo json_encode($response);

 ?>