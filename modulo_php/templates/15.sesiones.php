<h1>15. Sesiones</h1>

<h3>¿Qué es una sesión?</h3>

<p>
    
    Una sesión de PHP almacena datos del usuario conectado al servidor a través
    del navegador. En un entorno basado en sesiones, cada usuario se identifica 
    a través de un número único llamado identificador de sesión o SID. 
    Esta identificación única de sesión se usa para vincular a cada usuario 
    con su propia información en el servidor.
</p>

<h3>Iniciando sesiones en nuestra aplicación</h3>

<p>
    Antes de que pueda almacenar cualquier información en variables de sesión, 
    primero se debe iniciar la sesión. Para comenzar una nueva sesión, simplemente 
    hay que llamar a la función de  PHP  <code>session_start()</code>. Creará una nueva sesión 
    y generará una ID de sesión única para el usuario.
    
    A partir de aquí podremos crear variables de sesión personalizadas y 
    añadirles los valores que nos interese.
</p>
<code>
    <pre>

        &lt;?php
            // Inicio de sesión
            session_start();
        ?&gt;
    </pre>
</code>

<p>
    
    La función <code>session_start()</code> comprueba primero si ya existe una 
    sesión al buscar la presencia de una ID de sesión. Si encuentra uno, es decir, si la sesión ya se 
ha iniciado, configura las variables de la sesión y, si no lo hace, inicia una 
nueva sesión creando una nueva ID de sesión.
    
    
</p>
<p>
Se debe llamar a la función <code>session_start())</code> al principio de la 
página, es decir, antes de cualquier salida generada por el navegador.
</p>

<h3>Almacenando y accediendo a datos de sesión</h3>

<p>
    Podemos almacenar todos sus datos de sesión como pares clave-valor en el 
    array superglobal <code>$_SESSION[]</code>. Se puede acceder a los datos almacenados 
    durante la vida de una sesión.
</p>

<code>
    <pre>

        &lt;?php
            // Inicio de sesión
            session_start();

            // Alamacenando datos en sesion
            $_SESSION["nombre"] = "María";
            $_SESSION["apellidos"] = "Hernandez";
        ?&gt;
    </pre>
</code>

<p>
    Podríamos acceder a las variables creadas en la página anterior desde otra
    página.
</p>


<code>
    <pre>

        &lt;?php
             // Inicio de sesión
            session_start();

            // Accedemos a las variables creadas anteriormente
            echo 'Hola, ' . $_SESSION["nombre"] . ' ' . $_SESSION["apellidos"];
        ?&gt;
    </pre>
</code>

<h3>Destruir una sesión</h3>

<?php include("templates/navegacion.php");
