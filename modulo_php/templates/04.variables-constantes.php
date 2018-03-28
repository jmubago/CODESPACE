<h1>04. Variables y constantes</h1>

<h3>Variables</h3>
<p>
    Las variables se usan para almacenar datos como cadenas de texto, números, etc. 
    Los valores de las variables pueden cambiar a lo largo del proceso de un script.</p>
    
<ul>
    <li>
En PHP, no es necesario declarar una variable antes de agregarle un valor. 
PHP convierte automáticamente la variable al tipo de datos correcto, según su valor.</li>
    <li>
        Después de declarar una variable, puede reutilizarse en todo el código.
    </li>
    <li>El operador de asignación (=) utilizado para asignar valor a una variable.</li>
</ul>

<pre> 
<code>
    &lt;?php
        // Declarando variables
        $saludo = "Hola curso de PHP!"; //variable de tipo cadena
        $numero = 10; //variable de tipo entero

        // Mostrando valores de la variables
        echo $saludo;  // Salida: Hola curso de PHP!
        echo $numero; // Salida: 10
    ?&gt;
</code>
</pre>

<h3>Constantes</h3>
<p>
Una constante es un nombre o un identificador para un valor fijo. Las constantes 
son como variables, excepto aquella que están definidas, no pueden ser 
indefinidas o modificadas.
</p>

<p>
Las constantes son muy útiles para almacenar datos que no cambian mientras se 
ejecuta la secuencia de comandos. Algunos ejemplos más comunes donde se utilizan
constantes son para ajustes de configuración como el nombre de usuario y la contraseña 
de la base de datos, la URL base del sitio web, el nombre de la empresa, nombre 
de la aplicación, etc.
</p>
<p>
    Las constantes se definen utilizando la función de <code>define()</code> de PHP, 
    que acepta dos argumentos: el nombre de la constante y su valor. 
    Una vez definido, se puede acceder al valor constante en cualquier momento 
    simplemente refiriéndose a su nombre:
</p>

<pre>
    
<code>
    &lt;?php
        // Definición de constante
        define("HOST_BBDD", "127.0.0.1");
        define("NAME_BBDD", "jem_catalogo");
        define("USER_BBDD", "root");
        define("PASS_BBDD", "root");
        
        // Usando la constante
        echo 'Tu host de la base de datos es: ' . HOST_BBDD . '&lt;br&gt;';
        echo 'Tu nombre de la base de datos es: ' . NAME_BBDD  . '&lt;br&gt;';
        echo 'Tu usuario de la base de datos es: ' . USER_BBDD  . '&lt;br&gt;';
        echo 'Tu contraseña de la base de datos es: ' . PASS_BBDD  . '&lt;br&gt;';
    ?&gt;
</code>
</pre>

<p>El nombre de las constantes se suelen escribir en mayúsculas y no se requiere añadir el caracter <code>$</code> al principio para acceder a ellas</p>

<?php include("templates/navegacion.php");?>

