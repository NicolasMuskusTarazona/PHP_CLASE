// Constantes en PHP

/* define(name, value);
Parametros:

nombre : especifica el nombre de la constante
valor : especifica el valor de la constante */
<?php

define("Nombre", "Nicolas");
echo Nombre;








// Operadores de comparación de PHP

// 1. Devuelve verdadera si $ x es igual a $ y

$x = 100;  
$y = "100";

var_dump($x == $y); // bool(true)

// 2. Devuelve verdadero si $x es identico a $y y son del mismo tipo

$x = 100;  
$y = "100";

var_dump($x === $y); // bool(false)


// 3. Devuelve verdadera si $ x no es igual a $ y 

$x = 100;  
$y = "100";

var_dump($x != $y); // bool(falso) => devuelve falso por que los valores son iguales

// 4. Devuelve verdadero si $x no es igual a $y, o no son del mismo tipo

$x = 100;  
$y = "100";

var_dump($x !== $y); // bool(true) => devuelve verdadero porque los tipos no son iguales

// 5. Devuelve un entero menor, igual o mayor que cero, 
// dependiendo de si $x es menor, igual o mayor que $y.

$x = 5;  
$y = 10;

echo ($x <=> $y); // -1 | retorna -1 porque $x es menor que $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // 0  | retorna 0 porque los valores son iguales
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // +1 | retorna +1 porque $x es mayor que $y
