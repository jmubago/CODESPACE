<h1>08. If , else, elseif, switch</h1>

<p>Los bloques condicionales nos permiten ejecutar distintas acciones
según se cumplan ciertas condiciones. Existen 4 sentencias condicionales
para evaluar variables y realizar la operación oportuna</p>

<ul>
    <li> if 
    </li>
     <li>  if...else
    </li>
     <li> if...elseif....else
    </li>
     <li> switch...case
    </li>
</ul>


<h3>if, if...else, if...elseif....else</h3>

<p>
La instrucción if se usa para ejecutar un bloque de código solo si la condición 
especificada se evalúa como verdadera. Esta es la declaración condicional
más simple de PHP y se puede escribir como:</p>

<code>
    <pre>
    &lt;?php
        $edad=22;

        // if
        if($edad>=18){
            echo "Es mayor de edad";
        } 

        //if...else
        if($edad>=18){
            echo "Es mayor de edad";
        } else {
            echo "No es mayor de edad";
        }

        //if...elseif....else
        if($edad>=18){
            echo "Es mayor de edad";
        } elseif($edad>=18 && $edad<30) {
            echo "Es mayor de edad y está menor de 30";
        } elseif($edad>=18 && $edad<30) {
            echo "Es mayor de edad y está menor de 30";
        } else {
            echo "No es mayor de edad";
        }
    ?&gt;
    </pre>
    
</code>

<h3>Operador ternario</h3>
<p>El operador ternario proporciona una forma abreviada de escribir las 
    declaraciones if ... else. El operador ternario está representado por el 
    signo de interrogación (?) Y toma tres operandos: una condición para 
    verificar, un resultado para ture y un resultado para falso.</p>
    
<code>
    <pre>
    &lt;?php
        $edad=22;
        echo ($edad>=18) ? 'Es mayor de edad' : 'No es mayor de edad';
    ?&gt;
    </pre>
    
</code>

<h3>switch</h3>


<code>
    <pre>
    &lt;?php
        $mes = date("m");

        switch ($mes) {
            case 1:
                echo "Estamos en Enero";
                break;
            case 2:
                echo "Estamos en Febrero";
                break;
            case 3:
                echo "Estamos en Marzo";
                break;
            case 4:
                echo "Estamos en Abril";
                break;
            case 5:
                echo "Estamos en Mayo";
                break;
            case 6:
                echo "Estamos en Junio";
                break;
            case 7:
                echo "Estamos en Julio";
                break;
            case 8:
                echo "Estamos en Agosto";
                break;
            case 9:
                echo "Estamos en Septiembre";
                break;
            case 10:
                echo "Estamos en Octubre";
                break;

            case 11:
                echo "Estamos en Noviembre";
                break;

            case 12:
                echo "Estamos en Diciembre";
                break;


            default:

            break;

          }
    ?&gt;
    </pre>
     
    
</code>

<?php include("templates/navegacion.php");

