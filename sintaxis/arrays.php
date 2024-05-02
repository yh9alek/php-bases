<?php

# Creación de un array
$frutas = ['🍎', '🍌', '🥥', '🍇', '🍐'];

$frutas = array('🍎', '🍌', '🥥', '🍇', '🍐');

# Mostrar array con formateado
echo '<pre>';
var_dump($frutas);
echo '</pre>';

# Visualizar el array de forma más clara
echo '<pre>';
print_r($frutas);
echo '</pre>';

# Obtener elemento por el índice
echo $frutas[3];

# Podemos verificar la existencia de algún elemento
echo isset($frutas[2]);

# Añadir un elemento al array (array_push mismo efecto)
$frutas[] = '🍍';

# Obtener el length del array
echo count($frutas);

# Métodos para arrays

array_push($frutas, '🍈');     // Añadir elemento al final del array
array_pop($frutas);            // Eliminar el último elemento del array
array_unshift($frutas, '🍑');  // Añadir elemento al inicio del array
array_shift($frutas);          // Eliminar el primer elemento del array

$string = '🥥,🍇,🍑,🥝';

# Equivalente al método split() de Javascript
$frutas = explode(',', $string);

# Equivalente al método join() de Javascript
$string = implode('-', $frutas);

# Equivalente al método includes() de Javascript
in_array('🥥', $frutas);

# Equivalente al método indexOf() de Javascript
array_search('🍑', $frutas);

# Equivalente al método concat() de Javascript
$frutas = array_merge($frutas, ['🍏', '🥭']);

# Equivalente al método sort() de Javascript
sort($frutas);

# Tambien tenemos los métodos map, filter y reduce de toda la vida
array_map(fn($item) => $item, $frutas);
array_filter($frutas, fn($item) => true);
array_reduce($frutas, fn($acc, $item) => $acc.$item);

# Se puede usar el spread operator de toda la vida
echo '<pre>';
print_r([...$frutas, ...[1, 2, 3]]);
echo '</pre>';

# ARRAYS ASOCIATIVOS

// Se le conoce como array asociativo a aquellos arrays que asocian 
// llaves o keys a sus elementos:
$array = [
    'manzana' => '🍎',
    'cereza' => '🍒',
    'naranja' => '🍊',
];

// Así accedemos a un elemento asociado a una llave
echo $array['manzana'];  // Imprime 🍎

// En un array asociativo puede haber tanto elemento no asociados como asociados
$array = [
    'manzana' => '🍎',
    '🥥',  //  -> [0]
    true,  //  -> [1]
    'pera' => '🍐',
    'uva' => '🍇',
];

// Por defecto, todos los elementos de un array ya estan asociados a un valor,
// en este caso, 🥥 y true tienen asociada como llave un valor númerico. Ese
// valor se determina a partir del último valor númerico asociado, por defecto,
// el valor numérico inicial siempre será 0:

// PD: El último valor numérico asociado puede ser tanto de tipo numérico como string,
//     siempre y cuando sea un número como tal.

$array = [
    'uva' => '🍇',
    2 => '🥝',        // último valor numérico asociado: 2
    'cereza' => '🍒',
    '🍓',  // -> [3]
    '🍋',  // -> [4]
];

$array = [
    'uva' => '🍇',
    '-3' => '🥝',        // mismo efecto, último valor numérico asociado: -3
    'cereza' => '🍒',
    '🍓',  // -> [-2]
    '🍋',  // -> [-1]
];

// Se puede asociar cualquier tipo de valor a un elemento, a excepción de otro
// array o un objeto
$array = [
    'banana' => '🍌',
    '-3' => '🥝',        // mismo efecto, último valor numérico asociado: -3
    'durazno' => '🍑',
    true => '🍓',        // booleans se expresan como enteros, último valor númerico asociado: 1
    3.1416 => 'PI',      // floats o doubles se expresan como enteros, último valor númerico asociado: 3
    NULL => true,        // NULL´s se expresan como un string vacío ""
    '🍍',  // -> [4]       Al final el último valor numérico asociado fue el 3, 
           //              por lo que el siguiente indice es 4.
];

// Crear un nuevo elemento con valor asociado
$array['types'] = ['string', 'boolean', 'integer'];

echo '<pre>';
print_r($array);
echo '</pre>';