<?php

require("./alunos.php");
require("./funcoes.php");

classificarAluno($alunos);



if (isset($_GET["novaNota"])) {
    $nome = $_GET["nomeAluno"];
    $nota = $_GET["novaNota"];

    alterarNota($alunos, $nome, $nota);
    classificarAluno($alunos);
}



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>
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
            ?>
                <tr onclick="showFormNota('<?=$aluno['nome'] ?>')"> 
                    <td> <?= $aluno["nome"] ?> </td>
                    <td> <?= $aluno["idade"] ?> </td>
                    <td> <?= $aluno["nota"] ?> </td>
                    <td class="<?= strtolower($aluno["situacao"]) ?>"> 
                        <?=isset($aluno["situacao"]) ?
                            $aluno["situacao"] :
                            ""
                        ?>
                    </td>
                   
                </tr>
            <?php
            }
            ?>


        </table>

    </section>

    <div class="containerFormNota">
        <form method="GET" action="">
            <input type="number" name="novaNota" placeholder="Digite a nova nota">
            <input type="hidden" id="nomeAluno" name="nomeAluno">
            <button>Alterar</button>
        </form>
    </div>

</body>

</html>