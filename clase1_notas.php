// Sintaxis Básica
<?php
// PHP code
?>



// Comentarios
// Una sola linea de código 

// Varias linea de código

/*
Esto
Comenta el comentario
*/




// Variables 
<?php
$nombre = "Nicolas";

// Obtener tipo de dato
var_dump($nombre); // string

?>





// Imprimir mensajes

<?php

$saludo = "Hola";
$nombre = "Nicolas";

echo '<h2>' . $saludo . '</h2>';
echo '<p>' . $nombre . '</p>';

// ------------------------------------------------

$txt = "Learn PHP";
$txt2 = "W3Schools.com";

printf ('<h2>' . $txt1 . '</h2>');
printf ('<p>Study PHP at ' . $txt2 . '</p>');

?>






// Contar Letras y Palabras
<?php
// Letras —> strlen
echo strlen("Nicolas");

// Palabras —> str_word_count
echo str_word_count("Hola Nicolas");

?>






// Buscar Palabra
/*
Buscar palabra —> strpos
- Salida va a mostrar el numero “ 5 ” 
- por que es la cantidad de letras que llega a este */
<?php

echo strpos("Hola Mundo", "Mundo");

?>







// VOLVER TODO MAYUS & volver todo mini

<?php

// MAYUSCULAS —> strtoupper 

$x = "Hello World!";
echo strtoupper($x);


// minusculas —> strtolower

$x = "Hello World!";
echo strtolower($x);

?>






// Convertir Alrevez
<?php
// strrev

$nombre = "Nicolas";
echo strrev($nombre);


?>





// Remover Espacios al inicio y final 
<?php
// trim

$x = "            Nicolas           ";
echo trim($x);


?>







// Remplazar palabras

<?php

$oldtxt = "Hello World!";
$newtxt =(str_replace("World","Nicolas",$oldtxt));

?>




// Concatenar cadenas

<?php
// Para concatenar o combinar 
// dos cadenas puedes utilizar el " . " operador:
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
// HelloWorld


// Agregandole espacio

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
// o
$n = "$x  $y";
echo $z;
// Hello World
?>






// Rebanar
<?php
// Puedes devolver un rango de caracteres 
// utilizando la substr() función.

// Especifique el índice de inicio y el 
// número de caracteres que desea devolver.


$x = "Hello World";
echo substr($x, 2, 3);
// llo



// Cortar hasta el final

$x = "Hello World!";
echo substr($x, 6);
// World!

?>





// Numeros en PHP
<?php

$a = 5; // Integer
$b = 5.34; // Float
$c = "25"; // String


// Compobar si es un numero 

is_int($a)

?>





// Tipos de Datos
<?php

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL


?>





// Numero Minimo y Maxima
<?php

echo(min(0, 150, 30, 20, -8, -200)); // -200
echo(max(0, 150, 30, 20, -8, -200)); // 150

?>







// Numero Aleatorio
<?php


// La rand() función genera un número aleatorio:

echo(rand());


// Numeros aleatorio entre 10 y 100

echo(rand(10, 100));

?>
