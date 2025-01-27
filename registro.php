<?php
//Cargar conexión
//REMATES

require_once 'includes/conexion.php';
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST)){
// Recoger los valores del formulario de registro
   $nombre = isset($_POST['nombre']) ? mysqli_escape_string($db, $_POST['nombre']) : false;
   $apellidos = isset($_POST['apellidos']) ? mysqli_escape_string($db, $_POST['apellidos']) : false;
   $email = isset($_POST['email']) ? mysqli_escape_string($db, trim($_POST['email'])) : false;
   $password = isset($_POST['password']) ? mysqli_escape_string($db, $_POST['password']) : false;
    
   
   // Array de errores
   
   $errores = [];
   
   //validar la información antes de guardarlo
   // Validar nombre
   if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){

    $nombre_validado = true;   

   } else {
       $nombre_validado = false;
       $errores['nombre'] = "El nombre no es válido";
   }
   
   //validar apellido
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){

    $apellido_validado = true;   

   } else {
       $apellido_validado = false;
       $errores['apellido'] = "El apellido no es válido";
   }
   
   // Validar el email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){

    $email_validado = true;   

   } else {
       $email_validado = false;
       $errores['email'] = "El email no es válido";
   }
   
   // validar contraseña
   if (!empty($password)){

    $password_validado = true;   

   } else {
       $passwod_validado = false;
       $errores['password'] = "La contraseña está vacía";
   }
   
   $guardar_usuario =false;
   if (count($errores) == 0) {
       //Insertar usuario
       $guardar_usuario = true;  
       
       // CIFRAR CONTRASEÑA
       
       $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
       
       
       
       // INSERTAR USUARIO EN LA TABLA DE USUARIOS DE LA BBDD
       $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellidos','$email','$password', CURDATE());";
       $guardar = mysqli_query($db, $sql);
       
       
       
       if($guardar) {
           $_SESSION['completado']="El registro se ha completado con éxito";
           
           
           
           
       } else {
           $_SESSION['errores']['general']="Fallo al guardar el usuario";
       }
       
   } else {
      $_SESSION['errores'] = $errores;
     
   }

}
 header('Location: index.php');