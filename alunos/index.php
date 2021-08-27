<?php

require("./alunos.php");
require("./funcoes.php");

classificarAluno($alunos);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Notas dos alunos</title>
</head>

<body>
    <section>
        <h1>Tabela de notas</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>

            <?php
            foreach ($alunos as $aluno) {
                if ($aluno["nota"] >= 50) {
                    $class = "aprovado";
                } else {
                    $class = "reprovado";
                }
            ?>
                <tr class="<?$class?>">
                <th> <?=$aluno["nome"]?> </th>
                <th> <?=$aluno["idade"]?> </th>
                <th> <?=$aluno["nota"]?> </th>
                <th> <?=$aluno["situação"]?> </th>
                </tr>
            <?php
            }
            ?>


        </table>

    </section>

</body>

</html>