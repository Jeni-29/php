<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        echo "<p>Vamos aprender arrays:</p>";
        
        $nome = "Anderson Burnes";
        $carros = array("Marea 24V","Fusca 1300","Fiat 147","DelRey Ghia");
        
        print_r($carros);
        
        echo $carros[1];

        foreach ($carros as $dados) {
            echo "<p>{$dados}</p>";
        }

        array_push($carros, "Opala");
        array_push($carros, "monza");
        foreach($carros as $dados){
            echo "<p>{$dados}</p>";
        }

        if (in_array("monza", $carros)){
        echo "<p> Monza encontrado</p>";
        } else{
            echo "<p> Monza não encontrado</p>";
        }

        unset($carros[1]);
        print_r($carros);
        
        $carros[1] = "Conrcel";
        print_r($carros);
        
        ?>
</body>
</html>