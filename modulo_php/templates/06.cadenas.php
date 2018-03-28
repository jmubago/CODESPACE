<h1>06. Cadenas</h1>


<p>Podemos definir variables de tipo cadena a través de los delimitarores
    <code>"</code> y <code>'</code></p>

<p>
Cuando utilizamos <code>"</code> podemos intercalar dentro de la cadena variables
PHP</p>

<pre>
    <code>
    &lt;?php
        // variable
        $nombre = 'Juan';
        var_dump($nombre);
        
        echo "&lt;br&gt;";
        
        $usuario = "Usuario: $nombre Alarcón";
        var_dump($usuario);

        $nacionalidades = array("Español","Sueco","Colombiano");
        
        $usuario_nacionalidad = "$nombre Alarcón es {$nacionalidades[0]}";
        echo "&lt;br&gt;";
        var_dump($usuario_nacionalidad);
    ?&gt;
    </code>
</pre>

<h2>Manipulando cadenas</h2>

<h3>Concatenación</h3>

<p>Las cadenas en PHP se pueden concatenar entre ellas a través del <code>.</code></p>

<pre>
    <code>
    &lt;?php
        // Cadena 1
        $nombre = 'Juan';
        var_dump($nombre);
        echo "&lt;br&gt;";
        
        // Cadena 2
        $apellidos = 'Alarcón';
        var_dump($apellidos);
        echo "&lt;br&gt;";

        $usuario = $nombre . ' ' . $apellidos;
        var_dump($usuario);
    ?&gt;
    </code>
</pre>

<h3>Longitud de cadena</h3>

<p>La función <code>strlen()</code> se usa para calcular el número de caracteres dentro de
    una cadena.</p>

<pre>
    <code>
    &lt;?php
        // Longitud de cadena
        $cliente = 'Antonio Sanchez Ruiz';
        echo 'Longitud de cadena: ' .  strlen($cliente); 
    ?&gt;
    </code>
</pre>

<h3>Reemplazando texto</h3>

<p>
    El <code>str_replace()</code> reemplaza todas las apariciones del texto de 
    búsqueda dentro de una cadena
</p>
<pre>
    <code>
    &lt;?php
        $cadena1 = 'Curso de introducción al desarrollo web con HTML, CSS, Javascript, PHP y MySQL';
        // Reemplazar cadena
        $cadena2 = str_replace("PHP", "Python", $cadena1);
        // Resultado
        echo $cadena2;
    ?&gt;
    </code>
</pre>




<a href="http://php.net/manual/es/ref.strings.php" target="blank">Referencia al funciones con cadenas</a>


<?php include("templates/navegacion.php");

