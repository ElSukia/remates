
<!--  REMATES-->
<?php require_once 'includes/cabecera.php';?>
    <?php require_once 'includes/lateral.php';?>
    <!-- CAJA PRINCIPAL -->
    <div id="principal">
       
        
  
        
        <?php
        $entrada = conseguirEntrada($db,$_GET['id'] );
        
        
        if (!empty($entrada)):
           
      
        
        ?>
        
     
        
         <article class="entrada">
            
            <a href="entrada.php?id=<?=$entrada['id']?>">
            <h3 class="entrada"><?='Base: '. $entrada['base1']. ' Tamaño del Lote: '.$entrada['tamLote']. ' mt2 | '.
            $entrada['provincia'].' '.$entrada['canton'].
            ' '.$entrada['distrito'].' '. $entrada['fecha1'].' '. $entrada['fecha2'].' '. $entrada['fecha3']
                
                
                ?></h3>
                
                <p class="descripcion">
                <?=  $entrada['descripcion']?>
            </p> 
            </a>
            
        </article>
        
        <?php       
        
        else:
        ?>
        <div class="alerta">
            No hay entradas en esta categoría
            
        </div>
        </a>
        <?php 
        endif; ?>
      
        
        
    </div>
   
    <!-- PIE DE PÁGINA -->
    <?php require_once 'includes/footer.php';?>

</body>

    
    
    
</html>