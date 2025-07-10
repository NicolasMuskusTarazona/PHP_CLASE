<?php

// Constantes en PHP

// define(name, value);
// Parametros:

// nombre : especifica el nombre de la constante
// valor : especifica el valor de la constante

define("Nombre", "Nicolas");
echo Nombre . "\n";








// Operadores de comparación de PHP

// 1. Devuelve verdadera si $ x es igual a $ y

$x = 100;  
$y = "100";

var_dump($x == $y) . "\n"; // bool(true)


// 2. Devuelve verdadero si $x es identico a $y y son del mismo tipo

$x = 100;  
$y = "100";

var_dump($x === $y) . "\n"; // bool(false)


// 3. Devuelve verdadera si $ x no es igual a $ y 

$x = 100;  
$y = "100";

var_dump($x != $y) . "\n"; // bool(falso) => devuelve falso por que los valores son iguales

// 4. Devuelve verdadero si $x no es igual a $y, o no son del mismo tipo

$x = 100;  
$y = "100";

var_dump($x !== $y) .  "\n"; // bool(true) => devuelve verdadero porque los tipos no son iguales

// 5. Devuelve un entero menor, igual o mayor que cero, 
// dependiendo de si $x es menor, igual o mayor que $y.

$x = 5;  
$y = 10;

echo ($x <=> $y) . "\n"; // -1 | retorna -1 porque $x es menor que $y

$x = 10;  
$y = 10;

echo ($x <=> $y) . "\n"; // 0  | retorna 0 porque los valores son iguales

$x = 15;  
$y = 10;

echo ($x <=> $y) . "\n"; // +1 | retorna +1 porque $x es mayor que $y


// Operadores de incremento/decremento de PHP

// 1. Increments $x en uno, despues retonar $x
$x = 100;  

echo ++$x ."\n";

// 2. Desincrementa $x en uno, despues retonar $x
$x = 100;  

echo --$x . "\n";




// Operadores lógicos de PHP

// 1. Escribe un mensaje si ambas condiciones son verdaderas

$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Son ambas verdaderas"  . "\n";
}

// 2. Escribe un mensaje si al menos una condicion es verdadera

$a = 100;  
$b = 50;

if ($a == 100 or $b == 80) {
    echo "Una condicion es verdadera OR"  . "\n";
}

// 3. Escribe un mensaje si al menos una condicion es verdadera, pero NO si ambas condiciones son verdaderas ( AND )

$d = 100;  
$t = 50; // Aqui puedes intentarlo

if ($d == 100 xor $t == 20) {
    echo "Una condicion es verdadera XOR"  . "\n"; // Intenta con cambiar " t = 20 " y vcerficaras que no imprimira nada
}