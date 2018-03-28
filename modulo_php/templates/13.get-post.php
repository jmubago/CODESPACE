<h1>13. $_GET, $_POST y $_REQUEST</h1>
<p>
Un navegador web se comunica con el servidor normalmente utilizando 
uno de los dos métodos HTTP (Protocolo de transferencia de hipertexto): GET y POST. 
Ambos métodos pasan la información de manera diferente</p>


<h3>$_GET</h3>

<code>http://www.codespaceacademy.com/operacion.php?<b>nombre</b>=<i>maria</i>&<b>edad</b>=<i>28</i></code>

<p>
    Las partes en negrita en la URL son los parámetros GET y las partes en 
    cursiva son el valor de esos parámetros. Se puede incrustar más de un 
    parámetro = valor en la URL concatenando con signos y signos (&). 
    Solo se pueden enviar texto simples a través del método GET
</p>

<p>
    PHP proporciona la variable superglobal $_GET para acceder a toda la 
    información enviada a través de la URL o enviada a través de un formulario 
    HTML utilizando el método = "get"
</p>

<code>
    <pre>

        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo de PHP con el método GET&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;?php
                if(isset($_GET["nombre"])){
                    echo "&lt;p&gt;Hola, " . $_GET["nombre"] . "&lt;/p&gt;";
                }
                ?&gt;
                &lt;form method="get" action="&lt;?php echo $_SERVER["PHP_SELF"];?&gt;"&gt;
                    &lt;label for="nombre"&gt;Nombre:&lt;/label&gt;
                    &lt;input type="text" name="nombre" id="nombre"&gt;
                    &lt;input type="submit" value="Enviar"&gt;
                &lt;/form&gt;
            &lt;/body&gt;  
        &lt;/html&gt;  
    </pre>
</code>

<h3>$_POST</h3>

<p>
    
En el método POST, los datos se envían al servidor como un paquete en una 
comunicación separada. Los datos enviados a través del método POST no serán 
visibles en la URL.
</p>

<p>
    Al igual que $_GET, PHP proporciona otra variable superglobal $_POST para 
    acceder a toda la información enviada a través del método de publicación o 
    enviada a través de un formulario HTML utilizando el método = "post".
</p>

<code>
    <pre>

        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo de PHP con el método POST&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;?php
                if(isset($_POST["nombre"])){
                    echo "&lt;p&gt;Hola, " . $_POST["nombre"] . "&lt;/p&gt;";
                }
                ?&gt;
                &lt;form method="post" action="&lt;?php echo $_SERVER["PHP_SELF"];?&gt;"&gt;
                    &lt;label for="nombre"&gt;Nombre:&lt;/label&gt;
                    &lt;input type="text" name="nombre" id="nombre"&gt;
                    &lt;input type="submit" value="Enviar"&gt;
                &lt;/form&gt;
            &lt;/body&gt;
        &lt;/html&gt;      
    </pre>
</code>


<h3>$_REQUEST</h3>

<p>
PHP proporciona otra variable superglobal $_REQUEST que contiene los valores 
de las variables $_GET y $_POST</p>

<code>
    <pre>

        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo de PHP con el método REQUEST&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;?php
                if(isset($_REQUEST["nombre"])){
                    echo "&lt;p&gt;Hola, " . $_REQUEST["nombre"] . "&lt;/p&gt;";
                }
                ?&gt;
                &lt;form method="post" action="&lt;?php echo $_SERVER["PHP_SELF"];?&gt;"&gt;
                    &lt;label for="nombre"&gt;Nombre:&lt;/label&gt;
                    &lt;input type="text" name="nombre" id="nombre"&gt;
                    &lt;input type="submit" value="Enviar"&gt;
                &lt;/form&gt;
            &lt;/body&gt;
        &lt;/html&gt;      
    </pre>
</code>


    <?php include("templates/navegacion.php");



