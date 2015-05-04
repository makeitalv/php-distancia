<?php

/*
 * Para problemas com acentuação:
 * Ative o comando header('Content-Type: text/html; charset=utf-8')
 */

$nome = 'Álvaro Costa';

    $texto = <<<QQC
    Téstê Acentuação $nome Impossível.<br>
    $nome $nome $nome
QQC;

// Se identar a chave final do heredoc, ele dará erro.
       
echo $texto;