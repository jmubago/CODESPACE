<h1>14. Subir fichero al servidor</h1>
<code>
    <pre>
    
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
            &lt;meta charset="UTF-8"&gt;
            &lt;title&gt;Subir fichero a través de un formulario&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;form action="subir-fichero.php" method="post" enctype="multipart/form-data"&gt;
                &lt;h2&gt;Subir Fichero&lt;/h2&gt;
                &lt;label for="fileSelect"&gt;Nombre de fichero:&lt;/label&gt;
                &lt;input type="file" name="fotografia" id="fileSelect"
                &lt;input type="submit" name="submit" value="Subir"&gt;
                &lt;p&gt;&lt;strong&gt;Notas:&lt;/strong&gt; Solo admite formatos en .jpg, .jpeg, .gif, .png con un máximo de 5 MB.&lt;/p&gt;
            &lt;/form&gt;
        &lt;/body&gt;
        &lt;/html&gt;
    </pre>
</code>
<p>
    
    En el archivo "subir-fichero.php" recibiremos la petición enviada desde
    el formulario y realizaremos las acciones necesarias para validar
    que el tipo de archivo sea el correcto y el tamaño no sobre pase los 5MB
    
</p>
<code>
    <pre>

    &lt;?php

    // comprobar si el formulario se está enviando
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // Comprobar que el el fichero se ha subido sin errores
        if(isset($_FILES["fotografia"]) && $_FILES["fotografia"]["error"] == 0){
            $permitidos = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $nombre_fichero = $_FILES["fotografia"]["name"];
            $tipo_fichero = $_FILES["fotografia"]["type"];
            $tamanio_fichero = $_FILES["fotografia"]["size"];

            // Verificamos que la extensión sea correcta
            $ext = pathinfo($nombre_fichero, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $permitidos)) die("Error: Debes seleccionar un formato de fichero válido");

            // Verificamos que el tamaño del fichero no supere los 5MB
            $maxsize = 5 * 1024 * 1024;
            if($tamanio_fichero > $maxsize) die("Error: El fichero ocupa más del tamaño permitido (5MB)).");

            // Verificar el MYME del fichero
            if(in_array($tipo_fichero, $permitidos)){
                // Comprobar que el fichero no existe antes de subir el nuevo
                if(file_exists("upload/" . $_FILES["fotografia"]["name"])){
                    echo $_FILES["fotografia"]["name"] . " ya existe.";
                } else{
                    move_uploaded_file($_FILES["fotografia"]["tmp_name"], "upload/" . $_FILES["fotografia"]["name"]);
                    echo "Fichero subido con éxito.";
                } 
            } else{
                echo "Error: Hubo un error al subir el fichero. Inténtalo de nuevo."; 
            }
        } else{
            echo "Error: " . $_FILES["fotografia"]["error"];
        }

    }

    ?&gt;

    </pre>
    
</code>

<p>
    Una vez que se envía el formulario, se puede acceder a la información 
    sobre el archivo cargado a través de una matriz superglobal PHP llamada 
    $_FILES. Por ejemplo, nuestro formulario de carga contiene un campo de 
    selección de archivo llamado fotografia (es decir, nombre = "fotografia"), 
    si cualquier usuario subió un archivo usando este campo, 
    podemos obtener sus detalles como el nombre, tipo, tamaño, nombre temporal 
    o cualquier error se produjo al intentar la carga a través del array asociativo 
    $_FILES ["fotografia"].
</p>

<ul>
    <li>
        <code>$_FILES["fotografia"]["name"]</code> -
        Este valor del array especifica el nombre original del archivo, 
        incluida la extensión del archivo. No incluye la ruta del archivo.
    </li>
    
    <li>
        <code>$_FILES["fotografia"]["type"]</code> - 
        Este valor del array especifica el tipo MIME del archivo.
    </li>
    
    <li>
        <code>$_FILES["fotografia"]["size"]</code> - 
        Este valor del array especifica el tamaño 
        del archivo, en bytes.
    </li>
    
    <li>
       <code>$_FILES["fotografia"]["tmp_name"]</code> - 
        Este valor del array especifica el 
        nombre temporal, incluida la ruta completa que se asigna al archivo una 
        vez que se ha cargado en el servidor.
    </li>
    <li>
        <code>$_FILES["fotografia"]["error"]</code> - 
        Este valor del array especifica un error 
        o código de estado asociado con la carga del archivo, será 0, si no
        hay ningún error.
    </li>
</ul>








<?php include("templates/navegacion.php");

