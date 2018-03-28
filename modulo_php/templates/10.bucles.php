<h1>10. Bucles</h1>

<p>Existen 4 tipos de bucles en PHP</p>

<ul>
    <li>
        while 
    </li>
    
    <li>do…while
    </li>
       
    <li>for 
        
    </li>
    
    <li>foreach 
        
    </li>
 
</ul>
<h3>while</h3>
<p>
La instrucción while recorrerá un bloque de código hasta que la condición 
en la sentencia while se evalúe como verdadera.
</p>
<pre> 
<code>
    &lt;?php
    
        $usuarios = array("Juan", "Luis", "María"); 
        $i = 0;
        while(count($usuarios) < $i) {
            echo "Nombre: {$usuarios[$i]} &lt;br&gt;";
            //o 
            echo 'Nombre: ' . $usuarios[$i] . '&lt;br&gt;';
            $i++;
        }
        
    ?&gt;
</code>
</pre>

<h3>do…while</h3>

<p>
    El ciclo do while es una variante del ciclo while, que evalúa la condición 
    al final de cada ciclo de iteración. Con do while el bloque de 
    código se ejecuta una vez, y luego se evalúa la condición, si la condición 
    es verdadera, la instrucción se repite siempre que la condición especificada 
    evaluada sea verdadera.
</p>

<pre> 
<code>
    &lt;?php
    
        $usuarios = array("Juan", "Luis", "María"); 
        
        $i = 0;
        do {    
            echo "Nombre: {$usuarios[$i]} &lt;br&gt;";
            $i++;
        }
        while($i<=count($usuarios));
           
    ?&gt;
</code>
</pre>

<h3>for</h3>
<p>El bucle for repite un bloque de código hasta que se cumple una determinada condición.</p>
<p>
    Los parámetros de for loop tienen los siguientes significados:</p>
<ul>
<li>inicialización: se usa para inicializar las variables del contador, y se 
    evalúa una vez incondicionalmente antes de la primera ejecución del cuerpo 
    del bucle.</li>
<li>condición: al comienzo de cada iteración, se evalúa la condición. Si es 
    verdadero, el ciclo continúa y las sentencias anidadas se 
    ejecutan. Si es falso, la ejecución del ciclo termina.
</li>

<li>
Incremento: actualiza el contador de bucles con un nuevo valor. Se evalúa al 
final de cada iteración.
</li>
    
</ul>

<pre> 
<code>
    &lt;?php
    
        $usuarios = array("Juan", "Luis", "María"); 
        $numero_de_usuarios = count($usuarios);
        for ($i=0;$i<$numero_de_usuarios;$i++) {
             echo "Nombre: {$usuarios[$i]} &lt;br&gt;";
        }
           
    ?&gt;
</code>
</pre>

<h3>foreach</h3>
<p>El bucle foreach se usa para iterar sobre las arrays.</p>
<pre> 
<code>
    &lt;?php
    
        $usuarios = array("Juan", "Luis", "María");
         
        foreach($usuarios as $usuarios){
            echo "Nombre: " . $usuario;
        }
    
    ?&gt;
</code>
</pre>

<p>Existe otra sintaxis más para foreach, que es la extensión de la primera.</p>

<pre> 
<code>
    &lt;?php
    
        $juan = array("nombre"=>"Juan", "email"=>"juan@empresa.com", "telefono"=>"603279364", "activo"=true, "nacimmiento"=1984);
         
        foreach($juan as $key=>$value){
            echo $key ": " . $value . &lt;br&gt;";
        }
        
        $usuarios = array(
        
            array(
                "nombre"=>"Juan", 
                "email"=>"juan@empresa.com", 
                "telefono"=>"603279364", 
                "activo"=true, 
                "nacimmiento"=1984
                ),
                
            array(
                "nombre"=>"Maria", 
                "email"=>"maria@empresa.com", 
                "telefono"=>"670025470", 
                "activo"=false, 
                "nacimmiento"=1994
                ),
                
            array(
                "nombre"=>"Luis", 
                "email"=>"luis@empresa.com", 
                "telefono"=>"684752582", 
                "activo"=true, 
                "nacimmiento"=1974
                )
       
        )
        
        foreach($usuarios as $usuario){
            echo "&lt;h2&gt;" . $usuario['nombre'] . "&lt;/h2&gt;";
            foreach($usuario $key=>$value) {
                echo $key ": " . $value . &lt;br&gt;";
            }
        }
    
    ?&gt;
</code>
</pre>


<?php include("templates/navegacion.php");

