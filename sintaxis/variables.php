<?php

// Creación de variables
   $variable = 'valor';

// Imprimir variable
   echo $variable;

/* 10 Tipos de dato
   
   - Integer
   - Float
   - String
   - Boolean
   - Array
   - Object
   - Callable
   - Iterable
   - NULL
   - Resource

*/

$nombre = 'Yohan';
$edad = 21;
$is_male = true;
$estatura = 1.75;
$delitos = null;
$hobbies = ['Jugar', 'Programar'];

# Obtener el tipo de dato
gettype($estatura);

# Mostrar detalles de la variable
var_dump($edad);

# Funciones para verificar el tipo
is_string($nombre);
is_float($estatura);
is_bool($is_male);
# entre otros...

# Verificar que una variable se haya definido
isset($variable);  # true

# Definir una constante
define('PI', 3.1416);
echo PI;
