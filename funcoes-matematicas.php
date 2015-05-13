<?php

echo mt_rand(0,9); //retorna um numero qualquer de 0 a 9.
echo '<br>';
echo floor(5.9); //arredonda para baixo;
echo '<br>';
echo ceil(5.1);  //arredonda para cima;
echo '<br>';
echo round(5.1); //arredonda para o mais proximo
echo '<br>';
echo round(5.9); //arredonda para o mais proximo
echo '<br>';

$valor = 1254.3;
echo 'R$' . number_format($valor, 2, ',' , '.'); //valor formatado
echo '<br>';
echo abs(-20);
echo '<br>';
echo pow(2,3);
echo '<br>';
echo max(1, 3, 5, 7, 9, 11, 10);
echo '<br>';
echo min(1, 3, 5, 7, 9, 11, 12);
echo '<br>';
echo dechex(255);//converte para hexadecimal
echo '<br>';
echo hexdec(100);//converte para decimal
echo '<br>';
echo decbin(2);//converte para binario
echo '<br>';
echo bindec(10);//converte para decimal

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

