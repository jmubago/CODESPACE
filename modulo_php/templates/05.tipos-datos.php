<h1>05. Tipos de datos</h1>

<p>
    Los valores asignados a una variable de PHP pueden ser de tipos de datos 
    diferentes, pueden ir desde tipos simples como cadenas o nùmericos
    hasta tipos de datos más complejos como arrays u objetos.
</p>

<p>Existen hasta ocho de tipos de datos distintos:</p>

<h3>Enteros</h3>

<pre>
    <code>
    &lt;?php
        $a = 2018; // número
        var_dump($a);
        echo "&lt;br&gt;";

        $b = -2018; // negativo
        var_dump($b);
        echo "&lt;br&gt;";
    ?&gt;
    </code>
</pre>



<h3>Cadenas</h3>

<p>Las cadenas son secuencias de caracteres, donde cada carácter es igual a un byte.
</p>

<p>Una cadena puede contener letras, números y caracteres especiales y puede 
    ser tan grande como hasta 2 GB (2147483647 bytes máximo). 
    La forma más sencilla de especificar una cadena es encerrarla
    en comillas simples aunque también podemos utilizar comillas dobles
</p>

<pre>
    <code>
    &lt;?php
        $variable_cadena1 = 'Hola Mundo!';
        echo $variable_cadena1;
        echo "&lt;br&gt;";

        $variable_cadena2 = "Hola Mundo!";
        echo $variable_cadena2;
        echo "&lt;br&gt;";

        $variable_cadena3 = 'Hola mundo, \'Dicho y hecho.\'';
        echo $variable_cadena3;
    ?&gt;
    </code>
</pre>


<h3>Flotantes y doubles</h3>

<pre>
    <code>
    &lt;?php
        $numero = 1.234;
        var_dump($a);
    ?&gt;
    </code>
</pre>

<h3>Booleans</h3>
<p>Los booleanos tiene solo dos valores posibles, 
    1 (verdadero) o 0 (falso).
<pre>
    <code>
    &lt;?php
        // Asignamos verdadero a la variable
        $mostrar_errores = true;
        var_dump($mostrar_errores);
    ?&gt;
    </code>
</pre>

<h3>Arrays</h3>
<p>
Una array es una variable que puede contener más de un valor a la vez. 
Es útil agrupar una serie de elementos relacionados.
</p>

<p>
    Una array se define formalmente como una colección 
    indexada de valores de datos. Cada índice (también conocido como la clave) 
    es único y hace referencia a un valor correspondiente.
</p>
<pre>
    <code>
    &lt;?php
        $paises = array("México", "Costa Rica", "Italia", "Estados Unidos");
        var_dump($paises);
        
        echo "&lt;br&gt;";
 
        $moneda_paises = array(
            "México" => "Pesos mexicanos",
            "Costa Rica" => "Colones",
            "Italia" => "Euros",
            "Estados Unidos" => "Dolar americano"
        );
        var_dump($moneda_paises);
    ?&gt;
    </code>
</pre>

<h3>Objetos</h3>

<p>
    Un objeto es un tipo de datos que no solo permite almacenar datos sino también 
    información sobre cómo procesarlos. Un objeto es una instancia específica de una 
    clase que sirve como plantillas para objetos. Los objetos se crean en base a 
    esta plantilla a través de la la palabra clave <code>new</code>
</p>

<p>
    Cada objeto tiene propiedades y métodos que corresponden a los de su clase 
    padre. Cada instancia de objeto es completamente independiente, con sus 
    propias propiedades y métodos, y por lo tanto puede ser manipulada 
    independientemente de otros objetos de la misma clase.
</p>

<pre>
    <code>
    &lt;?php
        // Definición de prodcuto (clase)
        class producto {
            // propiedades
            public $nombre = "Garbanzos";

            // métodos
            function get_nombre(){
                return $this->nombre;
            }
        }

        // Crear un objeto de la clase
        $producto = new producto;
        var_dump($producto);
    ?&gt;
    </code>
</pre>

<h3>NULL</h3>

<p>
    El valor especial NULL se usa para representar variables vacias. Una variable
    de tipo NULL es una variable si nigún datos.
</p>


<pre>
    <code>
    &lt;?php
        $variable = NULL;
        var_dump($variable);
        echo "&lt;br&gt;";

        $otra = "Hola Mundo!";
        $otra = NULL;
        var_dump($otra);
    ?&gt;
    </code>
</pre>
<p>
    Cuando creamos una variable sin ningún valor <code>$variable;</code> automáticamente
    se le asigna el valor null. No es lo mismo <code>$variable1=NULL;</code> que
    <code>$variable2="";</code>
</p>

<h3>Resources</h3>
<p>Resource es una variable especial que hace referncia a un recurso externo.</p>
<p>Se suelen usar para manejar ficheros y conexiones a bases de datos</p>

<pre>
    <code>
    &lt;?php
        // Apertura de fichero para leerlo
        $link_a_fichero = fopen("archivo.txt", "r");
        var_dump($link_a_fichero);
        echo "&lt;br&gt;";

        // Conexción a base de datos MySQL
        $conexion = mysql_connect("localhost", "root", "");
        var_dump($conexion);
    ?&gt;
    </code>
</pre>


<?php include("templates/navegacion.php");
