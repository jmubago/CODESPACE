<h1>09. Arrays</h1>
<p>
    
Las matrices son variables complejas que nos permiten almacenar más de un valor 
o un grupo de valores bajo un solo nombre de variable.
    
    
</p>

<p>Existe 3 tipos de arrays</p>
<ul>
    <li>
        Array indexado
    </li>
    <li>
        Array asociativo
    </li>
    
    <li>
        Array compuesto
    </li>
</ul>

<h3>Array indexado</h3>
<p>
    Una matriz indexada o numérica almacena cada elemento de la matriz con un 
    índice numérico.
</p>

<pre> 
<code>
    &lt;?php
       
        // Definición de un array indexado
        $usuarios = array("Juan", "Luis", "María"); 

        var_dump($usuarios);
        
        //o
        
        $usuarios[0] = "Juan"; 
        $usuarios[1] = "Luis"; 
        $usuarios[2] = "María";
        
          var_dump($usuarios);
        
        //añadir uno al final de la lista
        $usuarios[] = "Rosa";
        
        var_dump($usuarios);
        
    ?&gt;
</code>
</pre>

<h3>Array asociativo</h3>
<p>
    En un array asociativo, las claves asignadas a los valores pueden ser 
    cadenas definidas por el usuario. 
</p>

<pre> 
<code>    
    &lt;?php
    
         // Definición de un array asociativo
        $edades = array("Juan"=25,"Luis"=54,"María"=38);
       
        var_dump($edades);
        
        // Definición de un array asociativo
        $juan = array("nombre"=>"Juan", "email"=>"juan@empresa.com", "telefono"=>"603279364", "activo"=true, "nacimmiento"=1984);
        $maria = array("nombre"=>"Maria", "email"=>"maria@empresa.com", "telefono"=>"670025470", "activo"=false, "nacimmiento"=1994);
        $luis = array("nombre"=>"Luis", "email"=>"luis@empresa.com", "telefono"=>"684752582", "activo"=true, "nacimmiento"=1974);        
        
        var_dump($juan);
        var_dump($maria);
        var_dump($luis);
    ?&gt;
</code>
</pre>


<h3>Array Multidimensinal</h3>
<p>

    Un array multidimensional es la que cada elemento también puede ser un array 
    y cada elemento del array secundario puede ser un array o contener un array 
    dentro de ella y así sucesivamente 
</p>


<pre> 
<code>    
    &lt;?php
    
        
        // Definición de un array multidimensional
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
        
        var_dump($usuarios);
        
    ?&gt;
</code>
</pre>

<h3>Funciones para ordenar Arrays</h3>

<ul>
    <li>
        <code>sort()</code> y <code>rsort()</code> — Ordena arrys por el índice
    </li>
    
    <li>
        <code>asort()</code> y <code>arsort()</code> — Ordena arrays asociativos por valor
    </li>
    
    <li>
       <code>ksort()</code> y <code>krsort()</code> — Ordena arrays asociativos por clave 
    </li>
</ul>

<a href="http://php.net/manual/es/ref.array.php" target="_blank">Referencia a arrays PHP</a>



<?php include("templates/navegacion.php");

