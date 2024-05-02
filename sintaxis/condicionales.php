 <?php

 if($_POST) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
                                                            // > Mayor
    if($numero1 > $numero2) {                               // < Menor
        echo "Numero 1 mayor a Numero 2";                   // >= Mayor o Igual
        return;                                             // <= Menor o Igual
    }                                                       // == Igual
}                                                           // != Diferente
                                                            // <> Diferente
            
                                                            // === Exacto (PHP no convertirá los operandos)
                                                            // !== No es exacto (Lo mismo que exacto)
                                                            // <=> Devuelve un número entero menor, igual o mayor
                                                            //     que 0 si es que el primer operando cumple esta
                                                            //     misma condición.  Introducido en PHP 7

if($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
    if(($valorA != $valorB) && ($valorA > $valorB)) {
        echo "ValorA es diferente a ValorB y además es Mayor";
    }
}

// && - and   AND Devuelve true si ambos operandos son verdaderos
// || - or    OR  Devuelve true si alguno de los operandos es verdadero
// !          NOT Niega un operando (invierte) o niega el valor de una comparación
// xor        XOR Devuelve true si alguno de los operandos es verdadero pero no si ambos lo son