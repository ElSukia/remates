<?php require_once 'includes/cabecera.php';?>
<?php require_once 'includes/lateral.php';?>


<div id="principal">
    
    <h2 id="titulo_busqueda">Búsquedas de tipo único</h2>
    

<div class="busqueda">
<h3>Por Provincia</h3>
<form action="resultados.php" method="POST" >
    <select name="provincia">
    <option value="San Jose">San José</option>
    <option value="Alajuela">Alajuela</option>
    <option value="Cartago">Cartago</option>
    <option value="Heredia">Heredia</option>
    <option value="Guanacaste">Guanacaste</option>
    <option value="Puntarenas">Puntarenas</option>
    <option value="Limon">Limón</option>
</select>
       <input type="submit" value="Ver Resultados"/>
        
</form>
</div>

<h2>Por Fecha del remate</h2>
<div class="busqueda">
<form action="resultados.php" method="POST">
    <label for="fecha1">Fecha del Remate:</label>
    <select name="fechaRemate">
        <option value="fecha1">Fecha del Primer Remate</option>
         <option value="fecha2">Fecha del Segundo Remate</option>
         <option value="fecha3">Fecha del Tercer Remate</option>
    </select>

    <h5>Desde el</h5>
<input type="date" id="fecha1a" name="fecha1a"
       value="2020-01-29"
       min="2020-01-01" max="2023-12-31">
    <h5>Hasta el</h5>
    <input type="date" id="fecha1b" name="fecha1b"
       value="2020-01-31"
       min="2020-01-01" max="2023-12-31">
    
    <input type="submit" value="Ver Resultados"/>
    </form>
</div>

<h3>Ver todos los remates por precio base de menor a mayor</h3>
<div class="busqueda">
<form action="resultados.php" method="POST">
    
    <input type="submit" value="Ver Resultados de Menor a Mayor" name="menor" id="menor"/>
    
</form>
    
 
<h3>Ver todos los remates por precio base de mayor a menor</h3>
<div class="busqueda">
<form action="resultados.php" method="POST">
    
    <input type="submit" value="Ver Resultados de Mayor a Menor" name="mayor" id="mayor"/>
    
</form>
    </div>




    
    
    
    
</div>
</div>

 <?php require_once 'includes/footer.php';?>
