<?php

if($_POST) {
    $opcion = $_POST['opcion'];
    switch($opcion) {
        case 1:
            echo "Se ingresó un 1";
            break;
        case 2:
            echo "Se ingresó un 2";
            break;
        case 3:
            echo "Se ingresó un 3";
            break;
        default:
            echo "No se ingreso ninguno de las opciones";
    }
}