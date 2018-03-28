<h1>07. Operadores</h1>

<h3>Operadores aritméticos</h3>

<code>
    <pre>

    -, +, *, / , %
    </pre>
</code>
    

<h3>Operadores de asignación</h3>


<table class="data">
    <tbody><tr>
        <th>Operador</th>
        <th style="width: 40%;">Descripción</th>
        <th>Ejemplo</th>
        <th>Es lo mismo que</th>
    </tr>
    <tr>
        <td><code>=</code></td>
        <td>Asignación</td>
        <td><code>$x = $y</code></td>
        <td><code class="plain">$x = $y</code></td>
    </tr>
    <tr>
        <td><code>+=</code></td>
        <td>Añadir y asignar</td>
        <td><code>$x += $y</code></td>
        <td><code class="plain">$x = $x + $y</code></td>
    </tr>
    <tr>
        <td><code>-=</code></td>
        <td>Sustraer y asignar</td>
        <td><code>$x -= $y</code></td>
        <td><code class="plain">$x = $x - $y</code></td>
    </tr>
    <tr>
        <td><code>*=</code></td>
        <td>Multiplicar y asignar</td>
        <td><code>$x *= $y</code></td>
        <td><code class="plain">$x = $x * $y</code></td>
    </tr>
    <tr>
        <td><code>/=</code></td>
        <td>Dividir y asignar</td>
        <td><code>$x /= $y</code></td>
        <td><code class="plain">$x = $x / $y</code></td>
    </tr>                        
    <tr>
        <td><code>%=</code></td>
        <td>Dividir y asignar el resto</td>
        <td><code>$x %= $y</code></td>
        <td><code class="plain">$x = $x % $y</code></td>
    </tr>
</tbody></table>

<code>
    <pre>

    &lt;?php
        $x = 10;
        echo $x; // Salida: 10

        $x = 20;
        $x += 30;
        echo $x; // Salida: 50

        $x = 50;
        $x -= 20;
        echo $x; // Salida: 30

        $x = 5;
        $x *= 25;
        echo $x; // Salida: 125

        $x = 50;
        $x /= 10;
        echo $x; // Salida: 5

        $x = 100;
        $x %= 15;
        echo $x; // Salida: 10
    ?&gt;
    </pre>
</code>

<h3>Operadores de comparaciones</h3>


<table class="data">
    <tbody><tr>
        <th>Operador</th>
        <th style="width:28%;">Nombre</th>
        <th style="width:15%;">Ejmplo</th>
        <th>Resultado</th>
    </tr>
    <tr>
            <td><code>==</code></td>
        <td>Igual</td>
        <td><code>$x == $y</code></td>
        <td>True si $x es igual $y</td>
    </tr>
    <tr>
            <td><code>===</code></td>
        <td>Idéntico</td>
        <td><code>$x === $y</code></td>
        <td>True si $x es igual $y, y son del mismo tipo</td>
    </tr>
    <tr>
        <td><code>!=</code></td>
        <td>Distintos</td>
        <td><code>$x != $y</code></td>
        <td>True si $x no es igual $y</td>
    </tr>
    <tr>
        <td><code>&lt;&gt;</code></td>
        <td>Distintos</td>
        <td><code>$x &lt;&gt; $y</code></td>
        <td>True si $x no es igual $y</td>
    </tr>
    <tr>
        <td><code>!==</code></td>
        <td>No idénticos</td>
        <td><code>$x !== $y</code></td>
        <td>True si $x no es igual a $y, o no son del mismo tipo</td>
    </tr>
                            <tr>
        <td><code>&lt;</code></td>
        <td>Menor que</td>
        <td><code>$x &lt; $y</code></td>
        <td>True si $x es menor que $y</td>
    </tr>
    <tr>
            <td><code>&gt;</code></td>
        <td>Mayor que</td>
        <td><code>$x &gt; $y</code></td>
        <td>True si $x es mayor que $y</td>
    </tr>                        
    <tr>
            <td><code>&gt;=</code></td>
        <td>Mayor o igual a</td>
        <td><code>$x &gt;= $y</code></td>
        <td>True si $x es mayor o igual $y</td>
    </tr>
    <tr>
            <td><code>&lt;=</code></td>
        <td>Menor o igual a</td>
        <td><code>$x &lt;= $y</code></td>
        <td>True si $x es menor o igual a $y</td>
    </tr>
</tbody>
</table>

<code>
    <pre>

    &lt;?php
        $x = 25;
        $y = 35;
        $z = "25";
        var_dump($x == $z);  // Salida: boolean true
        var_dump($x === $z); // Salida: boolean false
        var_dump($x != $y);  // Salida: boolean true
        var_dump($x !== $z); // Salida: boolean true
        var_dump($x < $y);   // Salida: boolean true
        var_dump($x > $y);   // Salida: boolean false
        var_dump($x <= $y);  // Salida: boolean true
        var_dump($x >= $y);  // Salida: boolean false 
    ?&gt;
    </pre>
</code>


<h3>Operadores para incrementar y decrementar</h3>

<table class="data">
    <tbody><tr>
        <th>Operador</th>
        <th>Nombre</th>
        <th>Efecto</th>
    </tr>
    <tr>
        <td><code>++$x</code></td>
        <td>Pre-incremento</td>
        <td>Incremeta $x en uno, y devuelve y después $x</td>
    </tr>
    <tr>
        <td><code>$x++</code></td>
        <td>Post-incremento</td>
        <td>Devuelve $x, y después incrementa $x en uno</td>
    </tr>
    <tr>
        <td><code>--$x</code></td>
        <td>Pre-decremento</td>
        <td>Decrementa $x en 1, y devuelve después $x</td>
    </tr>
    <tr>
        <td><code>$x--</code></td>
        <td>Post-decremento</td>
        <td>Devuelve $x, y  después decrementa $x en uno</td>
    </tr>
</tbody></table>

<code>
    <pre>

    &lt;?php
        $x = 10;
        echo ++$x; // Salida: 11
        echo $x;   // Salida: 11

        $x = 10;
        echo $x++; // Salida: 10
        echo $x;   // Salida: 11

        $x = 10;
        echo --$x; // Salida: 9
        echo $x;   // Salida: 9

        $x = 10;
        echo $x--; // Salida: 10
        echo $x;   // Salida: 9  
    ?&gt;
    </pre>
</code>


<h3>Operadores lógicos</h3>

<table class="data">
    <tbody><tr>
        <th>Operador</th>
        <th style="width:12%;">Nombre</th>
        <th>Ejemplo</th>
        <th>Resultado</th>
    </tr>
    <tr>
        <td><code>and</code></td>
        <td>And</td>
        <td><code>$x and $y</code></td>
        <td>True si $x y $y son true</td>
    </tr>
    <tr>
        <td><code>or</code></td>
        <td>Or</td>
        <td><code>$x or $y</code></td>
        <td>True si $x o $y es true</td>
    </tr>
    <tr>
        <td><code>xor</code></td>
        <td>Xor</td>
        <td><code>$x xor $y</code></td>
        <td>True si $x o $y son true, pero no ambos</td>
    </tr>
    <tr>
        <td><code>&amp;&amp;</code></td>
        <td>And</td>
        <td><code>$x &amp;&amp; $y</code></td>
        <td>True si $x y $y son true</td>
    </tr>
    <tr>
        <td><code>||</code></td>
        <td>Or</td>
        <td><code>$x || $y</code></td>
        <td>True si $x o $y son true</td>
    </tr>
    <tr>
        <td><code>!</code></td>
        <td>Not</td>
        <td><code>!$x</code></td>
        <td>True si $x no es true</td>
    </tr>
</tbody></table>

<code>
    <pre>

    &lt;?php
        $anio = 2018;
        // Años bisiestos son divisibles por 400, por 4 y no por 100
        if(($anio % 400 == 0) || (($anio % 100 != 0) && ($anio % 4 == 0))){
            echo "$anio es un año bisiesto.";
        } else{
            echo "$anio no es un año bisiesto.";
        }
    ?&gt;
    </pre>
</code>


<h3>Operadores de Arrays</h3>

<table class="data">
    <tbody><tr>
        <th>Operador</th>
        <th>Nombre</th>
        <th style="width:15%;">Ejemplo</th>
        <th>Resultado</th>
    </tr>
    <tr>
        <td><code>+</code></td>
        <td>Union</td>
        <td><code>$x + $y</code></td>
        <td>Union de $x y $y</td>
    </tr>
    <tr>
        <td><code>==</code></td>
        <td>Igualdad</td>
        <td><code>$x == $y</code></td>
        <td>True si $x y $y tienen los mismos pares para clave/valor </td>
    </tr>
    <tr>
        <td><code>===</code></td>
        <td>Idénticos</td>
        <td><code>$x === $y</code></td>
        <td>True si $x y $y tienen los mismos pares para clave/valor en el mismo orden y son del mismo tipo</td>
    </tr>
    <tr>
        <td><code>!=</code></td>
        <td>Distintos</td>
        <td><code>$x != $y</code></td>
        <td>True si $x no es igual $y</td>
    </tr>
    <tr>
        <td><code>&lt;&gt;</code></td>
        <td>Distintos</td>
        <td><code>$x &lt;&gt; $y</code></td>
        <td>True si $x no es igual $y</td>
    </tr>
    <tr>
        <td><code>!==</code></td>
        <td>No son idénticos</td>
        <td><code>$x !== $y</code></td>
        <td>True si $x no es idéntico a $y</td>
    </tr>
</tbody></table>

<code>
    <pre>

    &lt;?php
        $luis = array("Nombre" => "Luis", "Email" => "luis@empresa.com", "nacimiento" => "1992", "empresa"=>"Codespace");
        $maria = array("Nombre" => "María", "Email" => "maria@empresa.com", "nacimiento" => "1998", "empresa"=>"Codespace");
        $usuarios = $x + $y; // Union de $luis y maría
        var_dump($usuarios);
        var_dump($luis == $maria);   // Salida: boolean false
        var_dump($luis === $maria);  // Salida: boolean false
        var_dump($luis != $maria);   // Salida: boolean true
        var_dump($luis <> $maria);   // Salida: boolean true
        var_dump($luis !== $maria);  // Salida: boolean true
        var_dump($luis["empresa"] == $maria["empresa"]);  // Salida: boolean true
        var_dump($luis["empresa"] === $maria["empresa"]);  // Salida: boolean true
        var_dump($luis["empresa"] != $maria["empresa"]);  // Salida: boolean false
    ?&gt;
    </pre>
</code>

<?php include("templates/navegacion.php");

