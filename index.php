<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 

        $alunos = [
        ["nome" => "João", "nota1" => 8, "nota2" => 7, "curso" => "PHP"],
        ["nome" => "Maria", "nota1" => 8, "nota2" => 10, "curso" => "JavaScript"],
        ["nome" => "Pedro", "nota1" => 5, "nota2" => 6, "curso" => "PHP"],
        ["nome" => "Ana", "nota1" => 7, "nota2" => 8, "curso" => "HTML/CSS"]
        ];
    
        echo "Aluno 1: ". "<br>";
        echo "Nome: " . $alunos[0]["nome"] . "<br>";
        echo "Curso: " . $alunos[0]["curso"] . "<br>";
        echo "Nota1: " . $alunos[0]["nota1"] . "<br>";
        echo "Nota2: " . $alunos[0]["nota2"] . "<br>";
        
        $media1 = (($alunos[0]["nota1"] ) +  ($alunos[0]["nota2"] ))/2;

        echo "Media: " . $media1 . "<br>";
        echo "Situação: ";
        if ($media1 >= 7){
                echo "Aprovado";
            } else {
                echo "Reprovado";
            }
        echo "<hr>";

        echo "Aluno 2: ". "<br>";
        echo "Nome: " . $alunos[1]["nome"] . "<br>";
        echo "Curso: " . $alunos[1]["curso"] . "<br>";
        echo "Nota1: " . $alunos[1]["nota1"] . "<br>";
        echo "Nota2: " . $alunos[1]["nota2"] . "<br>";
        
        $media2 = (($alunos[1]["nota1"] ) +  ($alunos[1]["nota2"] ))/2;
        
        echo "Media: " . $media2 . "<br>";
        echo "Situação: ";
        if ($media2 >= 7){
                echo "Aprovado";
            } else {
                echo "Reprovado";
            }
        echo "<hr>";

        echo "Aluno 3: ". "<br>";
        echo "Nome: " . $alunos[2]["nome"] . "<br>";
        echo "Curso: " . $alunos[2]["curso"] . "<br>";
        echo "Nota1: " . $alunos[2]["nota1"] . "<br>";
        echo "Nota2: " . $alunos[2]["nota2"] . "<br>";

        $media3 = (($alunos[2]["nota1"] ) +  ($alunos[2]["nota2"] ))/2;

        echo "Media: " . $media3 . "<br>";
        echo "Situação: ";
        if ($media3 >= 7){
                echo "Aprovado";
            } else {
                echo "Reprovado";
            }
        echo "<hr>";
    
        echo "Aluno 4: ". "<br>";
        echo "Nome: " . $alunos[3]["nome"] . "<br>";
        echo "Curso: " . $alunos[3]["curso"] . "<br>";
        echo "Nota1: " . $alunos[3]["nota1"] . "<br>";
        echo "Nota2: " . $alunos[3]["nota2"] . "<br>";
        
        $media4 = (($alunos[3]["nota1"] ) +  ($alunos[3]["nota2"] ))/2;
        
        echo "Media: " . $media4 . "<br>";
        echo "Situação: ";
        if ($media4 >= 7){
                echo "Aprovado";
            } else {
                echo "Reprovado";
            }
        echo "<hr>";
    
    ?>


</body>
</html>