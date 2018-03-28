<h1>11. Funciones</h1>


<h3>Definición e invocación de functiones</h3>
<p>La sintaxis básica para crear una función personalizada:</p>
    
<code>
    <pre>

        function nombreFuncion(){
            // código a ejecutar
        }
    </pre>
</code>

<p>
    La declaración de una función definida por el usuario comienza con la 
    palabra <code>function</code>, seguida por el nombre de la función que 
    desea crear, seguido por un paréntesis, es decir <code>()</code> y finalmente 
    se colca el código de su función entre llaves <code>{}</code>.

Este es un ejemplo simple de una función definida por el usuario, que representa la fecha de hoy:
</p>

<code>
    <pre>

        &lt;?php
            // Definición de la funcion
            function queDiaEsHoy(){
                echo "Hoy es " . date('l', mktime());
            }
            // Llamada a la funcion
            queDiaEsHoy();
            ?&gt;

            &lt;?php
            // Otra función
            function obtenerUsuarios(){
                //código necesario para obtener usuarios
            }
            // Llamada a la funcion
            obtenerUsuarios();
        ?&gt;

    </pre>
</code>

<h3>Parámetros</h3>
<p>
Podemos especificar parámetros cuando define una función y aceptar valores de 
entrada. Los parámetros funcionan como variables dentro de una función; 
son reemplazados en tiempo de ejecución por los valores (conocidos como argumento) proporcionados a la 
función en el momento de la invocación.
</p>
<code>
    <pre>

        function miFuncion($parametro1, $parametro2){
            // Código a ejecutar
        }
    </pre>
</code>

<p>
    Podemos definir tantos parámetros como desee. Sin embargo, para cada parámetro 
    que especifique, se debe pasar un argumento correspondiente a la función 
    cuando se invoca.
</p>

<p>
    La función obtenerSuma() en el ejemplo siguiente toma dos valores enteros como 
    argumentos:
</p>

<code>
    <pre>

        &lt;?php
            // Definimos la función 
            function obtenerSuma($num1, $num2){
              $suma = $num1 + $num2;
              echo "La suma de los números $num1 y $num2 es : $sum";
            }

            // Llamando a la función
            obtenerSuma(10, 20);
        ?&gt;

    </pre>
</code>
    

<h3>Parámetros opcionales y con valores por defecto</h3>

<p>También podemos crear funciones con parámetros opcionales; 
    El nombre del parámetro deberá ir seguido de un signo igual <code>(=)</code>, 
    y de un valor predeterminado:
</p>
<code>
    <pre>

        &lt;?php

            // Definición de función
            function escribirParrafo($texto, $class="estiloParrafo"){
                echo "&lt;p class="$class">$texto&lt;/p&gt;";
            }

            // Llamando a la función
            escribirParrafo("Lorem ipsum dolor sit amet");
            escribirParrafo("Sed do eiusmod tempor incididunt ut", "negrita");
            escribirParrafo("Ut enim ad minim veniam, quis nostrud", "otroEstilo");

        ?&gt;
    </pre>
</code>

<h3>Devolviendo valores</h3>

<p>
    Una función puede devolver un valor al script que llamó a la función utilizando 
    la declaración return. El valor puede ser de cualquier tipo, incluidas 
    arrays y objetos.
</p>

<code>
    <pre>

        &lt;?php
            // Definimos la función 
            function obtenerSuma($num1, $num2){
              $suma = $num1 + $num2;
              return $suma; //devolvemos un valor
             
            }

            // Llamando a la función
            echo obtenerSuma(10, 20);
        ?&gt;

    </pre>
</code>

<p>
    Una función no puede devolver múltiples valores. 
    Sin embargo, puede obtener resultados similares devolviendo una array:
</p>

<code>
    <pre>

        &lt;?php
            // Definimos la función 
            function obtenerUsuarios(){
                $usuarios = array();
                $usuarios[0] = "Juan"; 
                $usuarios[1] = "Luis"; 
                $usuarios[2] = "María";
                return $usuarios;
            }

            // Llamando a la función
            $listaUsuarios =  obtenerUsuarios();
            var_dump($listaUsuarios);
        ?&gt;

    </pre>
</code>

<h3>Argumentos de funciones por referencia</h3>
<p>
    En PHP hay dos formas de pasar argumentos a una función: por valor y por referencia. 
    Por defecto, los argumentos de función se pasan por valor de modo que si 
    se cambia el valor del argumento dentro de la función, no se ve afectado 
    fuera de la función. Sin embargo, para permitir que una función modifique 
    sus argumentos, deben pasarse por referencia.</p>

<p>Pasar un argumento por referencia se realiza anteponiendo un signo & (&) al 
    nombre del argumento en la definición de la función, como se muestra en el 
    siguiente ejemplo:</p>

<code>
    <pre>

        &lt;?php
            /* */
            function multiplicarSelf(&$numero){
                $numero *= $numero;
                return $numero;
            }

            $num1 = 5;
            echo $num1; // Salida: 5

            multiplicarSelf($num1);
            echo $num1; // Salida: 25
        ?&gt;

    </pre>
</code>

<h3>Scope y global</h3>
<p>
     Podemos declarar las variables en cualquier parte de un script PHP. 
     Sin embargo, la ubicación de la declaración determina el alcance de la 
     visibilidad de una variable dentro del programa PHP, es decir, 
     donde se puede usar o acceder a la variable. Esta accesibilidad se conoce 
     como alcance variable o scope.
</p>

<p>
    Por defecto, las variables declaradas dentro de una función son locales y 
    no se pueden ver ni manipular desde fuera de esa función:
</p>

<code>
    <pre>

        &lt;?php

            // Definición de función
            function saludar(){
                $texto = "Hola Mundo!";
                echo $texto;
            }

            saludar(); // Salida: Hola Mundo!

            echo $texto; //  Generar salida undefined variable error

        ?&gt;
    </pre>
</code>


<p>
    Del mismo modo, si se intenta acceder o importar una variable externa dentro 
    de la función, obtendrá un error variable indefinida:
</p>


<code>
    <pre>

        &lt;?php

            $texto = "Hola Mundo!";
 
            // Definición de Función
            function saludar(){
                echo $texto;
            }

            saludar();  // Generar salida undefined variable error

            echo $texto; // Salida: Hola Mundo!

        ?&gt;
    </pre>
</code>

<p>En los ejemplos anteriores, la variable declarada dentro de 
    la función no es accesible desde el exterior, y la 
    variable declarada fuera de la función no es accesible dentro de la función. 
    Esta separación reduce las posibilidades de que variables dentro de una 
    función se vean afectadas por las variables en el programa principal.
</p>


<p>
    
Puede haber una situación en la que necesite importar una variable del programa 
principal a una función, o viceversa. En tales casos, podemos usar la palabra 
clave <code>global</code> antes de las variables dentro de una función. Esta palabra clave 
convierte la variable en una variable global, haciéndola visible o accesible 
tanto dentro como fuera de la función:
    
</p>


<code>
    <pre>

        &lt;?php
            $texto = "Hola Mundo!";

            // Definición de función
            function saludar(){
                global $texto;
                echo $texto;
            }

            saludar(); // Salida: Hola Mundo!
            echo $texto; // Salida: Hola Mundo!

            // Asignamos un nuevo valor a la variable
            $texto = "Adiós";

            saludar(); // Salida: Adios
            echo $texto; // Salida: Adiós

        ?&gt;
    </pre>
</code>
<?php include("templates/navegacion.php");

