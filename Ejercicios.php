<?php

/**
 * Función que genera los primeros n términos de la serie Fibonacci
 * @param int $n Número de términos a generar
 * @return array Array con la serie Fibonacci
 */
function generarFibonacci($n) {
    // Validar que el número sea positivo
    if ($n <= 0) {
        return [];
    }
    
    // Inicializar el array con los dos primeros números
    $fibonacci = [0];
    if ($n == 1) {
        return $fibonacci;
    }
    $fibonacci[] = 1;
    
    // Generar los siguientes números de la serie
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }
    
    return $fibonacci;
}

/**
 * Función que determina si un número es primo
 * @param int $numero Número a evaluar
 * @return bool True si es primo, False si no lo es
 */
function esPrimo($numero) {
    // Los números menores o iguales a 1 no son primos
    if ($numero <= 1) {
        return false;
    }
    
    // Verificar si el número es divisible por algún número entre 2 y su raíz cuadrada
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}

/**
 * Función que determina si una cadena es un palíndromo
 * @param string $texto Texto a evaluar
 * @return bool True si es palíndromo, False si no lo es
 */
function esPalindromo($texto) {
    // Convertir a minúsculas y eliminar espacios y caracteres especiales
    $texto = strtolower($texto);
    $texto = preg_replace('/[^a-z0-9]/', '', $texto);
    
    // Comparar la cadena original con su reverso
    return $texto === strrev($texto);
}

// Ejemplos de uso
echo "Ejemplo de Fibonacci (primeros 8 números):\n";
print_r(generarFibonacci(8));

echo "\nVerificación de números primos:\n";
$numero = 17;
echo "$numero es " . (esPrimo($numero) ? "primo" : "no primo") . "\n";

echo "\nVerificación de palíndromo:\n";
$texto = "Anita lava la tina";
echo "\"$texto\" " . (esPalindromo($texto) ? "es" : "no es") . " un palíndromo\n";
?>