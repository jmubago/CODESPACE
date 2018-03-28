<h1>03. Sintaxis</h1>
<pre>
<code>
    &lt;?php
        // Código a ejecutar
        echo "Hola Mundo!";
    ?&gt;
</code>    

</pre>

<p>Las sentencia PHP deben terminar con <strong><code>;</code></strong> y deben estar contenidas por
    <code><strong>&lt;?php ?&gt;</strong></code>
</p>
<p>
    Los archivos PHP son archivos de texto sin formato con la extensión .php.
    Dentro de un archivo PHP, puede escribir HTML como lo hace en páginas HTML 
    normales, así como incrustar códigos PHP para la ejecución del servidor.</p>

<pre>
    
<code>
    
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title>Ejemplo de PHP embebido en nuetros HTML&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
        &lt;h1><strong>&lt;?php echo "Hola Mundo! Estoy embebido en el HTML!";?&gt;</strong>&lt;/h1&gt;
        
    &lt;/body&gt;
    &lt;/html&gt;
    
</code>
</pre>

<h3>Comentarios</h3>

<p>Podemos añadir comentarios de 3 formas diferentes en nuesto código php</p>
<ul>
    <li><code>// Mi comentario</code>. Una sola línea</li>
    <li><code># Mi comentario</code>. Una sola línea</li>
    <li><code>/* Mi comentario */</code>. Multilíneas</li>
</ul>
<pre>
    <code>
        &lt;?php
            // Comentario en una línea
            # Otro comentario en una línea
            echo "Ejemplo con comentarios en una línea.";
        ?&gt;
        
        &lt;?php
            /*
            Esto es un comentario en varias líneas.
            Podemos añadir cuantas líneas
            necesitemos para hacer nuestros comentarios
            */
            echo "Ejemplo con comentarios multilíneas.";
        ?&gt;
    </code>
</pre>

<?php include("templates/navegacion.php");?>
