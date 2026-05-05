<?php
    // esto es un comentario de una linea
    # esto tambien es un comentario

    /*
    esto es un bloque 
    de multiples líneas
    */

    $nombre = "juan";
    $edad = "20";

    echo $nombre; // imprime: juan

    define("PI", 3.1416);
    const Saludo = "holiss";
    echo PI; //nimprime 3,1416

    $frutas = ["manzana", "banano", "uva"];

    echo $frutas[0]; // imprime: manzana
    echo $frutas[2]; // imprime: uva


    $personas = [
        "nombre" => "ana",
        "edad" => 25,
        "ciudad" => "bogota"
    ];

    echo $personas["nombre"]; //imprime: ana


    $a = 10;
$b = 3;

// Aritmético y Asignación
$suma = $a + $b; // 13

// Comparación
$esIgual = ($a == 10); // true

// Lógico
if ($a > 5 && $b < 5) {
    echo "Ambas condiciones se cumplen.";
}

// Concatenación
echo "El resultado de la suma es: " . $suma;

?>