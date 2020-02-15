

<?php
// Conectar a la base de datos

$server ='munozgamboa.com';
$username = 'munozgam_bran';
$password='CaballeroM0607G.,.';
$database ='munozgam_usuarios';
$port ='3306';
$db = mysqli_connect($server, $username,$password,$database,$port);

// Comprobar si nos conectamos

/*
if(mysqli_connect_errno()) {
    
        echo "La conexión a la base de datos ha fallado".mysqli_connect_error();
        
    
} else {echo "Conexión realizada correctamente";}
*/
        
// Iniciar la sesión
if (!isset($_SESSION)){
    session_start();
}
