<h1>16. Mysql y PHP</h1>

<h3>Conectar con una base de datos Mysql desde php</h3>
<p>
    
    Podemos realizar una conexion a una base de datos Mysql función <code>mysqli_connect()</code>
    de PHP. Toda la comunicación entre PHP y el servidor de base de datos MySQL se lleva a 
    cabo a través de esta conexión.
</p>

<h3>mysqli_connect()</h3>
<p>Abre una nueva conexión al servidor MySQL</p>
<code>
    <pre>

    &lt;?php

        $conexion = mysqli_connect("hostname", "usuario", "password", "basededatos");
    ?&gt;
    </pre>
</code>

<p>
    El parámetro de nombre de host en la sintaxis anterior especifica el nombre 
    de host (por ejemplo, localhost) o dirección IP del servidor MySQL, 
    mientras que los parámetros de nombre de usuario y contraseña especifican 
    las credenciales para acceder al servidor MySQL, 
    y el parámetro de base de datos especificará la base de datos MySQL predeterminada
    que se utilizará al realizar consultas.
</p>

<code>
    <pre>
        
    &lt;?php

        /* Conexion con una base de datos Mysql */
        $conexion = mysqli_connect("localhost", "root", "");

        // comprobamos que se realizó la conexión
        if($conexion === false){
            die("ERROR: Se producjo un error al conectar con la base de datos. " . mysqli_connect_error());
        }

        // Imprimir el nombre del host
        echo "Conexión realizada con éxito. Host: " . mysqli_get_host_info($conexion);
    ?&gt;
    </pre>
    
</code>

<h3>mysqli_close()</h3>

<p>Cierra una conexión de base de datos previamente abierta</p>
<code>
    <pre>
        
    &lt;?php
        // Cerrar conexión
        mysqli_close($conexion);
    ?&gt;

    </pre>
</code>


<h3>mysqli_query</h3>
<p>Realiza una consulta en la base de datos</p>

<code>
    <pre>

    &lt;?php
        mysqli_query($conexion,$sql);
    ?&gt;
    </pre>
</code>


<h3>mysqli_prepare</h3>
<p>Prepara una instrucción SQL para su ejecución</p>
<h3>mysqli_stmt_bind_param</h3>
<p>Agrega variables a una sentencia preparada como parámetros</p>
<h3>mysqli_stmt_execute</h3>
<p>Ejecuta una consulta preparada</p>
<h3>mysqli_stmt_close</h3>
<p>Cierra una sentencia preparada</p>

<code>
    <pre>

    &lt;?php
        $conexion = mysqli_connect("localhost", "mi_usuario", "mi_contraseña", "world");

        /* comprobar la conexión */
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }

     
        /* Preparar una sentencia INSERT */
        $consulta = "INSERT INTO usuarios (nombre, apellidos, email) VALUES (?,?,?)";
        $sentencia = mysqli_prepare($conexion, $consulta);

        mysqli_stmt_bind_param($sentencia, "sss", $val1, $val2, $val3);

        $val1 = 'Pedro';
        $val2 = 'Hernández';
        $val3 = 'info@pedro.com';

        /* Ejecutar la sentencia */
        mysqli_stmt_execute($sentencia);

        $val1 = 'Maria';
        $val2 = 'Sanchez';
        $val3 = 'maria@empresa.com';

        /* Ejecutar la sentencia */
        mysqli_stmt_execute($sentencia);

        /* cerrar la sentencia */
        mysqli_stmt_close($sentencia);

        /* recuperar todas las filas de usuarios */
        $consulta = "SELECT * FROM usuarios";
        if ($resultado = mysqli_query($conexion, $consulta)) {
            while ($fila = mysqli_fetch_row($resultado)) {
                printf("%s (%s,%s)\n", $fila[0], $fila[1], $fila[2]);
            }
            /* liberar el conjunto de resultados */
            mysqli_free_result($resultado);
        }

        /* cerrar la conexión */
        mysqli_close($conexion);
    ?&gt;
    </pre>
</code>


<h3>mysqli_fetch_assoc</h3>

<p>Obtiene una fila de resultados como una array asociativo</p>

<code>
    <pre>

    &lt;?php

        $conexion = mysqli_connect("localhost", "root", "", "demo_tienda");

        /* verificar la conexión */
        if (mysqli_connect_errno()) {
            printf("Conexión fallida: %s\n", mysqli_connect_error());
            exit();
        }

        $consulta = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexion, $consulta);

        /* array numérico */
        $row = mysqli_fetch_array($resultado, MYSQLI_NUM);
        printf ("%s (%s)\n", $row[0], $row[1]);

        /* array asociativo */
        $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        printf ("%s (%s)\n", $row["nombre"], $row["appellidos"]);

        /* array numérico y asociativo */
        $row = mysqli_fetch_array($resultado, MYSQLI_BOTH);
        printf ("%s (%s)\n", $row[0], $row["apellidos"]);

        /* liberar la serie de resultados */
        mysqli_free_result($resultado);

        /* cerrar la conexión */
        mysqli_close($conexion);

    ?&gt;

    </pre>
</code>


<h3>mysqli_fetch_object</h3>

<p>Devuelve la fila actual de un conjunto de resultados, como un objeto</p>

<code>
    <pre>

    &lt;?php
        $conexion = mysqli_connect("localhost", "mi_usuario", "mi_contraseña", "demo_tienda");

        /* comprobar la conexión */
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }

        $consulta = "SELECT * FROM usuarios";

        if ($resultado = mysqli_query($conexion, $consulta)) {

            /* obtener el objeto  */
            while ($obj = mysqli_fetch_object($resultado)) {
                printf ("%s (%s)\n", $obj->nombre, $obj->apellidos);
            }

            /* liberar el conjunto de resultados */
            mysqli_free_result($resultado);
        }

        /* cerrar la conexión */
        mysqli_close($conexion);
    ?&gt;
    </pre>
</code>


<h3>mysqli_free_result</h3>
<p>Libera la memoria asociada a un resultado</p>


<h3>mysqli_insert_id</h3>
<p>Devuelve el id autogenerado que se utilizó en la última consulta</p>

<code>
    <pre>

    &lt;?php

        $conexion = mysqli_connect("localhost", "root", "", "demo_tienda");

        /* comprobar conexión */
        if (mysqli_connect_errno()) {
            printf("Error de conexión: %s\n", mysqli_connect_error());
            exit();
        }

        $consulta = "INSERT INTO usuarios VALUES ('Luis', 'Sanchez', 'luis@empresa.com')";
        mysqli_query($conexion, $consulta);

        printf ("Nuevo registro con el id %d.\n", mysqli_insert_id($conexion));

        /* cerrar conexión */
        mysqli_close($conexion);

    ?&gt;
    </pre>
</code>

<p>Referencia a documentación MySQL: <a href="http://php.net/manual/es/book.mysqli.php" target="_blank">Mysqli</a></p>

<?php include("templates/navegacion.php");
