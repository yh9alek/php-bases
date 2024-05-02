<?php

$counter = 0;

# WHILE
while($counter < 5) {
    echo $counter++;
}

# DO WHILE
do {
    echo $counter++;
} while($counter < 5);

# FOR
for($i = 0; $i < 10; $i++) {
    echo $i;
    // break, detener el ciclo
    // continue, comenzar la siguiente iteración
    if($i === 5)
        break;
    else
        continue;
}

# FOREACH
$array = ['🍎', '🍌', '🥥', '🍇', '🍐'];

foreach($array as $item) {
    echo $item;
}

// obtener llave e item a la vez
foreach($array as $key => $item) {
    echo $key.' -> '.$item.'<br>';
}