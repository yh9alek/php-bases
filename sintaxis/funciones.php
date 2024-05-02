<?php

# FUNCIONES
function mi_funcion($arg) {
    echo "Hello $arg";
    return true;
}

$resultado = mi_funcion('Yohan');
echo $resultado;


# FUNCIONES ANÓNIMAS
$mostrar = function() {
    echo "Mostrando mensaje";
};

$mostrar();


// Sumar números usando un parámetro rest
function sumar(...$args) {
    $result = 0;
    foreach($args as $number) {
        $result += $number;
    }
    return $result;
}

echo sumar(10, 15, 30, 45);

# FUNCIONES DE FLECHA
$flecha = fn($arg) => "Hello $arg";        // Solo pueden usarse sin cuerpo, 1 sola línea

echo $flecha('Gael');