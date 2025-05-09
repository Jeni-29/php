<?php

$salario = 19800;

// se o salario for maior que 10000- burges
// se o salario for maior que 5000- ta bom
// se o salario for menor ou igual a 5000- ta meio ruim 

if ($salario > 10000){
    echo "<p> Esta burgues 😊 </p>";

} else if($salario>5000){
    echo "<p> Ta bom 😒 </p>";

} else{
    echo "<p> Ta meio ruim 😢 </p>";
}

// ira mostrar a quantidade de numero ate 10
$numero = 10;

for($x = 0; $x <= $numero; $x++){
    echo "<p> {$x} </p>";
}


//
$x = 0;
$numero = 7;

while($x <= $numero){
    echo "<p> {$x} </p>";
    $x++;
}

