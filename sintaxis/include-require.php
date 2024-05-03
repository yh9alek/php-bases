<?php 

# INCLUIR OTROS SCRIPTS DE PHP 

/* Se utiliza para 2 cosas

    - Reutilizar código HTML
    - Reutilizar funciones, variables, clases y lógica de PHP 

*/
?>

<?php include 'partials/header.php'; ?>

<?php

echo '<h1>Hola</h1>';
echo __DIR__; // Constante que contiene la ruta del directorio actual
              // Ejemplo: "C:\Users\Yohan\Desktop\PHP\sintaxis"
?>

<?php include 'partials/footer.php'; ?>

<?php

# Tipos

// include        - Incluir un script PHP
// include_once   - Incluir un script PHP sin repetirse

// require        - Requerir un script PHP de forma obligatoria
// require_once   - Requerir un script PHP de forma obligatoria sin repetirse

# Este último es el más utilizado y recomendado