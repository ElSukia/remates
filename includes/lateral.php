<aside id="sidebar">
    
    <div id="Logo_lateral">
        <div id="imagen">
            <img id="foto" src="./img/remate.jpg" />
            
            
        </div>
        <h3 id="titulo_sidebar">Panel del Usuario</h3>
        
                
  <?php if(isset($_SESSION['usuario1'])): ?>
    <div id="usuario-logueado" class="bloque">
        <h3>Bienvenido, <?=$_SESSION['usuario1']['nombre'].' '.$_SESSION['usuario1']['apellidos'];?></h3>
         <h4>Pagar Suscripción Mensual para utilizar el buscador</h4>
        <a href="pago.php" class="boton">SUSCRIPCIÓN MENSUAL 5$</a>
        <h4>En el siguiente botón, podrás usar el buscador del sitio web</h4>
        <a href="buscador.php" class="boton">BUSCADOR</a>
        <!--<a href="crear-categoria.php" class="boton">Crear Categoría</a>
        <a href="misdatos.php" class="boton">Mis Datos</a> 
        -->
        <a href="cerrar.php" class="boton">Cerrar Sesión</a> 
    </div>
  <?php desaparecerBloques();?>
  <?php     endif;?>
            
<?php if(isset($_SESSION['no-usuario'])): ?>
              
            
 <div id="login" class="bloque">
        <h3>Identifícate</h3>
           <?php if(isset($_SESSION['error_login'])): ?>
                <div class="alerta">
                <?=$_SESSION['error_login'];?>  
                </div>
            <?php     endif;?>
                
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email"/>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/>
                    <input type="submit" value="Entrar"/>
                </form>
            </div>
        
     


            
 <div id="register" class="bloque">
                        <?php
                        if (isset($_SESSION['errores'])):
                        ?>
                    
                        <?php endif;?>
                        
                <h3>Regístrate</h3>
                
                <!-- Mostrar Errores -->
                <?php
                if (isset($_SESSION['completado'])): ?>
                <div class="exito">
                    <?=$_SESSION['completado']?>
                    <?php borrarErrores();?>
                </div>
                <?php elseif(isset($_SESSION['errores']['general'])) :  ?> 
                <div class="alerta">
                <?=$_SESSION['errores']['general']?>
                    </div>
                <?php  endif; ?>
                
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
                    <label for="email">Email</label>
                    <input type="email" name="email"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                    
                      
                    <input type="submit" name="submit" value="Registrar"/>
                </form>
                
                
                <?php borrarErrores();?>
            </div>
            <?php     endif;?>
        </aside>
    
    
    
    
    
    
    
    
    
</aside>

