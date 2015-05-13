<?php

$texto = 'O rato roeu a roupa do rei de Roma.';

// contagem
echo strlen($texto); //quantidade de caracteres.
echo '<br>';
echo substr_count($texto, 'r'); //quantidade de vezes que o 'r' aparece.
echo '<br><hr><br>';

// localização
echo substr($texto, 2, 4); //variavel, posicao_inicial, quantidade_de_caracteres
echo '<br>';
echo strpos($texto, 'r'); //case sensitive
echo '<br>';
echo strpos($texto, 'R'); //case sensitive
echo '<br>';
echo strrpos($texto, 'r'); //case sensitive
echo '<br>';
echo strrpos($texto, 'R'); //case sensitive
echo '<br>';
echo stripos($texto, 'R'); //o 'i' significa que nao é case sensitive
echo '<br>';
echo strripos($texto, 'r'); //o 'i' significa que nao é case sensitive
echo '<br><hr><br>';

//substituição
echo str_replace(' ', '', $texto);//o que procura, pelo que substitui, onde é feito.
echo '<br>';
echo str_ireplace('r', 's', $texto);//o 'i' significa que nao é case sensitive
echo '<br>';

//modificação
echo rtrim($texto); //tira espaços em branco pela direita.
echo '<br>';
echo ltrim($texto); //tira espaços em branco pela esquerda.
echo '<br>';
echo trim($texto);  //tira espaços em branco pela direita ou esquerda.
echo '<br>';
echo strtoupper($texto); //fica tudo maiusculo
echo '<br>';
echo strtolower($texto); //fica tudo minusculo
echo '<br>';
echo ucfirst($texto); //a primeira letra fica maiuscula
