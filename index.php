<?php require_once 'includes/cabecera.php';?>
<?php require_once 'includes/lateral.php';?>


<div id="principal">
        
    <h3 id="titulo_principal">Últimos Remates</h3>
    
    <?php
        $entradas = conseguirUltimasEntradas($db);
        if (!empty($entradas)):
            while ($entrada= mysqli_fetch_assoc($entradas)):
      
        
        ?>
        
        
        <article class="entrada">
            
            <a href="entrada.php?id=<?=$entrada['id']?>">
            <h3 class="entrada"><?='Base: '. $entrada['base1']. ' Tamaño del Lote: '.$entrada['tamLote']. ' metros cuadrados | '.
            $entrada['provincia'].' '.$entrada['canton'].
            ' '.$entrada['distrito']
                
                
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

    





    <!-- PIE DE PÁGINA -->
    <?php require_once 'includes/footer.php';?>

</body>

    
    
    
</html>