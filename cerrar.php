<?php
// CIERRA CESIÓN EN REMATES
session_start();

if(isset($_SESSION['usuario1'])){
       
	session_destroy();
}

header("Location: index.php");