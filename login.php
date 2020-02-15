<?php
// REMATES
// Iniciar la sesión y la conexión a bd

require_once 'includes/conexion.php';

//var_dump($_POST);
// Recoger datos del formulario
if(isset($_POST)){
    
    // Borrar sesion antigua o fallo antiguo
	if(isset($_SESSION['error_login'])){
		session_unset($_SESSION['error_login']);
	}
    
    
    $email = trim($_POST['email']);
    $password = $_POST['password'];
}
//Consulta para comprobar las credenciales del usuario
//Señala si efectivamente hay un correo así en la base de datos
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$login = mysqli_query($db, $sql);

var_dump($email);
var_dump ($password);
var_dump($login);
die();



if ($login && mysqli_num_rows($login)== 1) {
   
    
// Comprobar la contraseña - cifrar
    // Esto extrae el objeto de usuarios con todas sus columnas
    $usuario = mysqli_fetch_assoc($login);
    var_dump($usuario['password']);
    var_dump($password);
   
    
    
    // Aquí se verifica el dato ingresado con el guardado en la base
    // DE MOMENTO NO QUIERO CIFRAR LOS PASSWORDS
    //$verify = password_verify($password, $usuario['password']);
    
    if ($usuario['password'] == $password ) {
         
        // Utilizar una sesión para guardar los datos del usuario logueado
/***IMPORTANTÍSIMO EN USUARIO1 VAMOS A TENER TODOS LOS DATOS DEL USUARIO REAL *******/
        $_SESSION['usuario1'] = $usuario;
        if(isset($_SESSION['error_login'])){
            
            session_unset($_SESSION['error_login']);
            
        }
    } else {
        
        // Si algo falla, enviar una sesión con el fallo
    
        $_SESSION['error_login']= "La contraseña no es válida";
    }
    
}else {
    
    // Mensaje de Error
    $_SESSION['error_login']= "El correo no es correcto";
}

// Redirigir

header('Location:index.php');



