<?php

// numeros inteiros
$variavel = 13;
echo is_integer($variavel);
echo '<br>';

// float
$variavel = 13.10;
echo is_float($variavel);
echo '<br>';

//strings
$variavel = 'Alvaro Costa';
$variavel = "Alvaro Costa";
echo is_string($variavel);
echo '<br>';

//bool -boolean
$variavel = true;
$variavel = false;
echo is_bool($variavel);
echo '<br>';

//objetos
//$variavel = new Objeto();

//recursos
$variavel = mysqli_connect('localhost', 'root');
echo is_object($variavel);
echo '<br>';

//null
$variavel = null;
echo is_null($variavel);
echo '<br>';

echo gettype($variavel);