<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira das frutas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<h1>Frutas em destaque:</h1>
<?php
//incluir o array das frutas
include "frutas.php";

?>
<div class ="row">
    <?php 
    // mostrar a fruta com um btn de detalhes
    foreach($frutas as $indice => $dados){
        echo "<div class ='col-12 cal-md-6'> 
            <div class = 'card'>
                <p>{$dados['nome']}</p>
            <p> 
                <a href = 'detalhes.php?indice={$indice}' 
                class = 'btn btn-danger'>
                Detalhes da Fruta
                </a>
            </p> 
        </div>
    </div>";
    }
    
    ?>
</div>
</body>
</html>