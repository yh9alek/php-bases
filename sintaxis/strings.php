<?php

# Creación de string
$string = 'Yohan Alek';

# Concatenar valores
$string = $string.'Plazola';

# Interpolar valores
$nombre = 'Yohan';
$edad = 21;

echo "Hola soy $nombre y tengo $edad años";

# Funciones para strings
$string = 'Hello World';

echo strlen($string);             // 11
echo trim($string);               // Eliminar espacios en blanco
echo ltrim($string);              // Eliminar espacios en blanco de la izquierda
echo rtrim($string);              // Eliminar espacios en blanco de la derecha
echo str_word_count($string);     // 2, contar palabras
echo strrev($string);             // dlroW olleH, invertir string
echo strtoupper($string);         // HELLO WORLD
echo strtolower($string);         // hello world
echo ucfirst('hello');            // Hello
echo lcfirst('HELLO');            // hELLO
echo ucwords('yohan alek');       // Yohan Alek
echo strpos($string, 'World');    // 6, posición de 'W'
echo stripos($string, 'World');   // 6, lo mismo, pero ignora el case-sensitive
echo substr($string, 8);          // rld, obtener un substring
echo str_replace('World', 'PHP', $string); // Hello PHP
echo str_ireplace('World', 'PHP', $string); // Hello PHP, (ignora el case-sensitive)
