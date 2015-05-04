<?php

//$var = echo 'Coisa doida';
//Não dá para guardar o echo em uma variável.

//$var = print 'Coisa doida';
//É possível colocar o print em uma variável pois ela retorna true(1)
//Quando a mensagem é imprimida com sucesso.

/*
 * Uso da aspas simples e duplas
 */

$numero = 13;
$exclamacao = '!!';

echo '<br><pre>';
//o mais indicado é a concatenação com aspas simples
echo 'Oi' . "\n" . '\'Oi\'' . $numero . $exclamacao;
echo '</pre>';
//nao é indicado o uso de aspas duplas
echo "Oi, numero $numero $exclamacao";


