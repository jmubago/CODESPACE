<h1>12. Include y require</h1>



<p>
    
Las instruccións <code>include()</code> y <code>require()</code> nos permite incluir el código contenido 
en un archivo PHP dentro de otro archivo PHP. Incluir un archivo produce el 
mismo resultado que copiar el script del archivo especificado y pegarlo en la 
ubicación donde se lo llama.
</p>
<p>
    La sintaxis básica de la instrucción <code>include()</code> y 
    <code>require()</code> se puede dar con:
</p>
<code>
    <pre>

       &lt;?php

            include("path/al/archivo"); -o- include "path/al/archivo";
            require("path/al/archivo"); -o- require "path/al/archivo";
        ?&gt;
    </pre>
    
</code>
<p>
    El siguiente ejemplo nos muestra cómo incluir los códigos comunes de 
    encabezado, pie de página y menú que se almacenan en archivos separados 
    'header.php', 'footer.php' y 'menu.php' respectivamente, 
    dentro de todas las páginas de nuestro sitio web. Al usar esta técnica, 
    pdemos actualizar todas las páginas del sitio web al mismo tiempo realizando 
    los cambios en un solo archivo, lo que ahorra mucho trabajo repetitivo.
</p>

<code>
    <pre>

        <!DOCTYPE html>
        &lt;html lang="es"&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo include&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
            &lt;?php include "header.php"; ?&gt;
            &lt;?php include "menu.php"; ?&gt;
                &lt;h1&gt;Bienvenido!&lt;/h1&gt;
                &lt;p&gt;Parte del contendido de nuestra página&lt;/p&gt;
            &lt;?php include "footer.php"; ?&gt;
            &lt;/body&gt;
        &lt;/html&gt;
   
    </pre>
    
</code>
<h3>Diferencias entre include y require</h3>
<p>
    Podemos pensar que si podemos incluir archivos usando la instrucción <code>include()</code>, 
    entonces por qué necesitamos <code>require()</code>. Normalmente, la instrucción require() 
    funciona como <code>include()</code>.
</p>
<p>
    La única diferencia es que la instrucción <code>include()</code> solo generará una 
    advertencia PHP pero permitirá que la ejecución del script continúe si el 
    archivo que se va a incluir no se puede encontrar, mientras que la 
    declaración <code>require()</code> generará un error fatal y detendrá la ejecución del 
    script.
</p>

<h3> include_once y require_once</h3>
<p>Investigar que hacen estas dos instrucciones</p>
<?php include("templates/navegacion.php");

