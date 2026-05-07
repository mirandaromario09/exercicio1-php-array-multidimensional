<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Arrays em PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        hr { border: 1px solid #ccc; margin: 20px 0; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>

    <?php

    // ======================================================================
    // 1. O QUE É UM ARRAY?
    // Array é uma variável que pode guardar MULTIPLOS valores ao mesmo tempo.
    // ======================================================================

    echo "<h1>Estudo Completo de Arrays em PHP</h1>";

    // ======================================================================
    // 2. ARRAY SIMPLES (INDEXADO)
    // Os indices sao numericos, comecando do 0 automaticamente.
    // ======================================================================

    echo "<h2>1. Array Simples (Indexado)</h2>";

    $frutas = ["Maca", "Banana", "Laranja", "Uva"];

    echo "Array completo: ";
    echo '<pre>';
    print_r($frutas);
    echo '</pre>';

    echo "Acessando cada posicao:<br>";
    echo "Posicao 0: " . $frutas[0] . "<br>";
    echo "Posicao 1: " . $frutas[1] . "<br>";
    echo "Posicao 2: " . $frutas[2] . "<br>";
    echo "Posicao 3: " . $frutas[3] . "<br>";

    echo "Quantidade de itens: " . count($frutas) . "<br>";

    echo "<hr>";

    // ======================================================================
    // 3. ARRAY ASSOCIATIVO
    // Os indices sao nomes (strings) que voce mesmo define.
    // ======================================================================

    echo "<h2>2. Array Associativo</h2>";

    $aluno = [
        "nome" => "Ronaldo",
        "idade" => 25,
        "cidade" => "Sao Paulo",
        "curso" => "PHP"
    ];

    echo "Array completo: ";
    echo '<pre>';
    print_r($aluno);
    echo '</pre>';

    echo "Acessando cada chave:<br>";
    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Idade: " . $aluno["idade"] . "<br>";
    echo "Cidade: " . $aluno["cidade"] . "<br>";
    echo "Curso: " . $aluno["curso"] . "<br>";

    echo "<hr>";

    // ======================================================================
    // 4. ADICIONAR ITENS EM UM ARRAY
    // ======================================================================

    echo "<h2>3. Adicionar Itens</h2>";

    $numeros = [1, 2, 3];
    echo "Array original: ";
    print_r($numeros);

    $numeros[] = 4;
    echo "Depois de adicionar o 4: ";
    print_r($numeros);

    $numeros[] = 5;
    echo "Depois de adicionar o 5: ";
    print_r($numeros);

    echo "<hr>";

    // ======================================================================
    // 5. ADICIONAR ITENS EM ARRAY ASSOCIATIVO
    // ======================================================================

    echo "<h2>4. Adicionar Itens em Array Associativo</h2>";

    $produto = [
        "nome" => "Notebook",
        "preco" => 3500
    ];

    echo "Array original: ";
    print_r($produto);

    $produto["marca"] = "Dell";
    $produto["estoque"] = 15;

    echo "Depois de adicionar marca e estoque: ";
    print_r($produto);

    echo "<hr>";

    // ======================================================================
    // 6. MODIFICAR ITENS
    // ======================================================================

    echo "<h2>5. Modificar Itens</h2>";

    $cores = ["Azul", "Verde", "Vermelho"];
    echo "Array original: ";
    print_r($cores);

    $cores[1] = "Amarelo";
    echo "Depois de trocar indice 1 para Amarelo: ";
    print_r($cores);

    $associativo = ["a" => 10, "b" => 20];
    echo "Array original: ";
    print_r($associativo);

    $associativo["a"] = 99;
    echo "Depois de trocar a para 99: ";
    print_r($associativo);

    echo "<hr>";

    // ======================================================================
    // 7. REMOVER ITENS
    // ======================================================================

    echo "<h2>6. Remover Itens</h2>";

    $remover = [10, 20, 30, 40, 50];
    echo "Array original: ";
    print_r($remover);

    unset($remover[2]);
    echo "Depois de remover o indice 2 (unset): ";
    print_r($remover);

    $remover = array_values($remover);
    echo "Depois de reorganizar indices (array_values): ";
    print_r($remover);

    echo "<hr>";


    // ======================================================================
    // 9. ARRAY MULTIDIMENSIONAL (array dentro de array)
    // ======================================================================

    echo "<h2>8. Array Multidimensional</h2>";

    $turma = [
        ["nome" => "Joao", "nota" => 8.5],
        ["nome" => "Maria", "nota" => 9.0],
        ["nome" => "Pedro", "nota" => 7.5]
    ];

    echo "Estrutura do array: ";
    print_r($turma);

    echo "<br>Acessando itens:<br>";
    echo "Nome do primeiro aluno: " . $turma[0]["nome"] . "<br>";
    echo "Nota do segundo aluno: " . $turma[1]["nota"] . "<br>";

    ?>

</body>
</html>
