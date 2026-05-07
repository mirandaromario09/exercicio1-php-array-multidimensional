<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

    function calcular_preco_final($valor_produto, $categoria) {
        $valor_final = 0;

        if ($categoria === "alimento") {
            $valor_final = $valor_produto - ($valor_produto * 0.10);

        } else if ($categoria === "eletronico") {
            $valor_final = $valor_produto + ($valor_produto * 0.15);

        } else if ($categoria === "vestuario") {
            $valor_final = $valor_produto - ($valor_produto * 0.05);

        } else if ($categoria === "luxo") {
            $valor_final = $valor_produto + ($valor_produto * 0.20);

        } else {
            $valor_final = $valor_produto;
        }

        return $valor_final;
    }

    $produto = "ss";
    $valor_produto = 100;
    $categoria = "eletronico";

    $valor_final = calcular_preco_final($valor_produto, $categoria);

    echo "Produto: " . $produto . "<br>";
    echo "Categoria: " . $categoria . "<br>";
    echo "Valor original: R$ " . $valor_produto . "<br>";
    echo "Valor final: R$ " . $valor_final . "<br>";

    if ($valor_final != $valor_produto) {
        echo "Houve desconto ou taxa? Sim";
    } else {
        echo "Houve desconto ou taxa? Não";
    }

    ?>



</body>
</html>