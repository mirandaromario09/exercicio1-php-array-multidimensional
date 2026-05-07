<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    // ==================== 1. FUNÇÕES NATIVAS DO PHP ====================

    $texto = "Curso completo de PHP";

    echo "<h3>1. Funções Nativas (strings)</h3>";
    echo "Original: " . $texto . "<br>";
    echo "Minúsculo: " . strtolower($texto) . "<br>";
    echo "Maiúsculo: " . strtoupper($texto) . "<br>";
    echo "Primeira letra maiúscula: " . ucfirst($texto) . "<br>";
    echo "Quantidade de caracteres: " . strlen($texto) . "<br>";
    echo "Trocar PHP por JavaScript: " . str_replace("PHP", "JavaScript", $texto) . "<br>";

    echo "<hr>";
    echo "<h3>Funções Nativas (matemática)</h3>";
    echo "Valor absoluto de -10: " . abs(-10) . "<br>";
    echo "Arredondar 4.7: " . round(4.7) . "<br>";
    echo "Número aleatório entre 1 e 10: " . rand(1, 10) . "<br>";
    echo "Raiz quadrada de 25: " . sqrt(25) . "<br>";
    echo "Potência 2³: " . pow(2, 3) . "<br>";

    echo "<hr>";

    // ==================== 2. FUNÇÕES DEFINIDAS PELO USUÁRIO ====================

    echo "<h3>2. Função Definida pelo Usuário</h3>";

    function saudacao($nome) {
        return "Olá, " . $nome . "! Bem-vindo!";
    }

    echo saudacao("Ronaldo") . "<br>";
    echo saudacao("Maria") . "<br>";

    echo "<hr>";

    // ==================== 3. FUNÇÃO COM PARÂMETRO OPCIONAL ====================

    echo "<h3>3. Função com Parâmetro Opcional</h3>";

    function desconto($valor, $porcentagem = 10) {
        return $valor - ($valor * $porcentagem / 100);
    }

    echo "Desconto padrão (10%) em R$ 200: R$ " . desconto(200) . "<br>";
    echo "Desconto personalizado (25%) em R$ 200: R$ " . desconto(200, 25) . "<br>";

    echo "<hr>";

    // ==================== 4. FUNÇÃO COM MÚLTIPLOS PARÂMETROS ====================

    echo "<h3>4. Função com Múltiplos Parâmetros</h3>";

    function calcular_media($n1, $n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }

    echo "Média de 7, 8 e 9: " . calcular_media(7, 8, 9) . "<br>";

    echo "<hr>";

    // ==================== 5. FUNÇÃO COM RETORNO BOOLEANO ====================

    echo "<h3>5. Função com Retorno Booleano</h3>";

    function eh_par($numero) {
        if ($numero % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    if (eh_par(10)) {
        echo "10 é par! <br>";
    } else {
        echo "10 é ímpar! <br>";
    }

    if (eh_par(7)) {
        echo "7 é par! <br>";
    } else {
        echo "7 é ímpar! <br>";
    }

    echo "<hr>";

    // ==================== 6. FUNÇÃO CHAMANDO OUTRA FUNÇÃO ====================

    echo "<h3>6. Função Chamando Outra Função</h3>";

    function calcular_dobro($num) {
        return $num * 2;
    }

    function calcular_quadruplo($num) {
        return calcular_dobro($num) * 2;
    }

    echo "O dobro de 5 é: " . calcular_dobro(5) . "<br>";
    echo "O quádruplo de 5 é: " . calcular_quadruplo(5) . "<br>";

    ?>

</body>
</html>
