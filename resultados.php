<?php require_once 'includes/cabecera.php';?>
<?php require_once 'includes/lateral.php';?>
<?php

if(isset($_POST)){
    
    $variable = $_POST;
     
   
 
    if (count($variable)== 1){
        
         switch (current($variable)) {
    case "San Jose":
        $provincia = 'San Jose';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasPorProvincia($db, $provincia);
        break;
    case "Alajuela":
        $provincia = 'Alajuela';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasPorProvincia($db, $provincia);
        break;
    case "Heredia":
        $provincia = 'Heredia';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasPorProvincia($db, $provincia);
        break;
    case "Cartago":
        $provincia = 'Cartago';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasPorProvincia($db, $provincia);
        break;
    case "Limon":
        $provincia = 'Limon';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasPorProvincia($db, $provincia);
        break;
    case "Alajuela":
        $provincia = 'Puntarenas';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasPorProvincia($db, $provincia);
        break;
    case "Alajuela":
        $provincia = 'Guanacaste';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasPorProvincia($db, $provincia);
        break;
    
    case "Ver Resultados de Menor a Mayor":
        $orden = 'ASC';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasDeMenorAMayor($db, $orden);
        break;
    case "Ver Resultados de Mayor a Menor":
        $orden = 'DESC';
            //var_dump($provincia);
            // "entradas" define lo que se va a imprimir en la parte html siguiente
             $entradas = conseguirEntradasDeMenorAMayor($db, $orden);
        break;
    
      }
      
}
  if (count($variable) > 1) {
        
       $fecha1 = $variable['fecha1a'];
       $fecha2 = $variable['fecha1b'];
      $fechaRemate =$variable['fechaRemate'];
      
      $entradas = conseguirEntradasPorFecha($db, $fecha1, $fecha2, $fechaRemate);
       
       
       //var_dump($fecha1b);
        
    }


    }


?>
<div id="principal">
        
    <h3 id="titulo_principal">Resultados de la búsqueda</h3>
    
    <?php
       
        if (!empty($entradas)):
            while ($entrada= mysqli_fetch_assoc($entradas)):
      
        
        ?>
        
        
        <article class="entrada">
            
            <a href="entrada.php?id=<?=$entrada['id']?>">
            <h3 class="entrada"><?='Base: '. $entrada['base1']. ' Tamaño del Lote: '.$entrada['tamLote']. ' mt2 | '.
            $entrada['provincia'].' '.$entrada['canton'].
            ' '.$entrada['distrito'].' '. $entrada['fecha1'].' '. $entrada['fecha2'].' '. $entrada['fecha3']
                
                
                ?></h3>
                
                <p class="descripcion">
                <?=  substr($entrada['descripcion'], 0, 280)."..."?>
            </p> 
            </a>
            
        </article>
        
        <?php       
        endwhile;
        endif;
        ?>
        
        
</div>