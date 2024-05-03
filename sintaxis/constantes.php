<?php

echo __DIR__.'<br>';         // Obtener la ruta del directorio actual 
echo __FILE__.'<br>';        // Obtener la ruta del script actual
echo __LINE__.'<br>';        // Obtener el número de línea actual de este echo

# Renombrar directorio
rename('test', 'test2');

# Eliminar directorio
rmdir('test2');

# Leer un archivo
file_get_contents(__DIR__.'/archivo.txt');

# Añadir contenido a un archivo
file_put_contents(__DIR__.'/archivo.txt', 'Contenido a añadir');

# Escanear un directorio (equivalente a dir en cmd y ls en OSX y Linux)
$files = scandir('./');

# Verificar la existencia de un archivo
file_exists('sample.txt');   // - false

# Verificar si es un directorio
is_dir('sample.txt');        // - false

