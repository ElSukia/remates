<?php

$_SESSION['no-usuario'] = "TRUE";

function mostrarError($errores, $campo) {
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta'>".$errores[$campo].'</div>';
        
        
    }
    return $alerta;
    
}

function borrarErrores(){
    $borrado = false;
    
    if (isset($_SESSION['completado'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }
    
    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
               $borrado = true;
        
    }
    
    
    return $borrado;
    
}

function desaparecerBloques () {
    
    $_SESSION['no-usuario'] = null;
   
}


function conseguirUltimasEntradas ($conexion) {
    $sql = "SELECT * FROM remates ORDER BY id DESC LIMIT 25";
    
    $entradas = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($entradas && mysqli_num_rows($entradas)>= 1) {
        
        $resultado = $entradas;
       
    }
    
    return $resultado;
    
    
}

function conseguirEntradasPorProvincia ($conexion, $provincia) {
    $sql = "SELECT * FROM remates WHERE provincia = '$provincia' ORDER BY base1 ASC LIMIT 12";
    
    $entradas = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($entradas && mysqli_num_rows($entradas)>= 1) {
        
        $resultado = $entradas;
       
    }
    
    return $resultado;
    
    
}
function conseguirEntradasDeMenorAMayor ($conexion, $orden) {
    $sql = "SELECT * FROM remates ORDER BY base1 $orden LIMIT 12";
   
    
    $entradas = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($entradas && mysqli_num_rows($entradas)>= 1) {
        
        $resultado = $entradas;
       
    }
    
    return $resultado;
    
    
}

function conseguirEntradasPorFecha ($conexion, $fecha1, $fecha2, $fechaRemate) {
    $sql = "SELECT * FROM remates WHERE $fechaRemate BETWEEN '$fecha1' AND '$fecha2' ORDER BY fecha1 ASC LIMIT 12";
   
    
    $entradas = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($entradas && mysqli_num_rows($entradas)>= 1) {
        
        $resultado = $entradas;
       
    }
    
    return $resultado;
    
    
}

function conseguirEntrada ($conexion, $id) {
    
     $sql = "SELECT * FROM remates WHERE id = $id;";
        
       $entrada = mysqli_query($conexion, $sql);
    
    $resultado = [];
    $resultado = mysqli_fetch_assoc($entrada);
    
    return $resultado;
 

    }



