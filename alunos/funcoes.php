<?php

function classificarAluno(array &$turma)
{
    foreach ($turma as $chave => $aluno) {
        if ($aluno["nota"] >= 50) {
            $turma[$chave]["situação"] = "Aprovado";
        } else {
            $turma[$chave]["situação"] = "Reprovado";
        }
    }
}

?>
