<?php

$a = 5;
$b = 10;

# Operaciones aritméticas
echo $a + $b;  // 15
echo $a - $b;  // -5
echo $a * $b;  // 50
echo $a / $b;  // 0.5
echo $a % $b;  // 5

# Operadores de asignación    Equivalencia
$a += $b;  // 15              $a = $a + $b;
$a -= $b;  // -5              $a = $a - $b;
$a *= $b;  // 50              $a = $a * $b;
$a /= $b;  // 0.5             $a = $a / $b;
$a %= $b;  // 5               $a = $a % $b;

# Operadores de incremento - decremento
$b = 12;

echo $b++;  // 12  Incremento a partir de la siguiente línea
echo ++$b;  // 14  Incremento inicial (13 + 1) = 14

echo $b--;  // 14  Decremento a partir de la siguiente línea
echo --$b;  // 12  Decremento inicial (13 - 1) = 12

# Verificar si el valor es numérico
is_numeric('3g.45');  // false

# Conversión de tipos
$strNumber = '12.34';

// Casteo o Casting (Expresión resultante de interpretar
//                   el valor como otro tipo de dato)
$number = (float)$strNumber;

// Conversión explícita
$number = floatval($strNumber);

# Funciones numéricas
echo abs(-15);    // 15 valor absoluto
echo pow(2, 3);   // 8  potenciación
echo sqrt(16);    // 4  raíz cuadrada
echo max(2, 3);   // 3  número máximo
echo min(2, 3);   // 2  número mínimo
echo round(2.4);  // 2  redondear, menos de .5 número ant.
echo round(2.6);  // 3  redondear, más de .5 número sig.
echo floor(2.6);  // 2  redondeo al número anterior
echo ceil(2.4);   // 3  redondeo al número siguiente

# Imprimir número con cierto formato
$number = 123456789;
echo number_format($number, 2, '.', ','); // 123,456,789.00