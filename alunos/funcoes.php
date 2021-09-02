<?php

function classificarAluno(array &$turma)
{
    foreach ($turma as $chave => $aluno) {
        if ($aluno["nota"] >= 50) {
            $turma[$chave]["situacao"] = "Aprovado";
        } else {
            $turma[$chave]["situacao"] = "Reprovado";
        }
    }
}

function alterarNota(array &$turma, $nome, $novaNota){

    foreach ($turma as $chave => $aluno) {
        if ($aluno["nome"] == $nome) {
            $turma[$chave]["nota"] = $novaNota;
            return;
        }
    }
}



?>
