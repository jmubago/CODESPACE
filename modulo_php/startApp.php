<?php

function getNext($actual) {
    //obtenemos el número actual
    $num_actual = substr ($actual,0,2);
    $int_actual = intval($num_actual);
    $int_siguiente = $int_actual + 1;
    if ($int_siguiente<10) {
        $int_siguiente = "0" . $int_siguiente;
    } 
    $siguiente = glob("$int_siguiente*.{php}", GLOB_BRACE);
    $pagina_siguiente = "";
    if(count($siguiente)==1) {
        $pagina_siguiente = $siguiente[0];
    }
    return $pagina_siguiente;
} 

function getPrevios($actual) {
    //obtenemos el número actual
    $num_actual = substr ($actual,0,2);
    $int_actual = intval($num_actual);
    $int_anterior = $int_actual - 1;
    if ($int_anterior<10) {
        $int_anterior = "0" . $int_anterior;
    } 
    $anterior = glob("$int_anterior*.{php}", GLOB_BRACE);
    $pagina_anterior = "";
    if(count($anterior)==1) {
        $pagina_anterior = $anterior[0];
    }
    return $pagina_anterior;
}

function getMenu() {
     $menu = glob("*.{php}", GLOB_BRACE);
     return $menu;
}

