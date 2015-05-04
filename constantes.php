<?php

define('CONSTANTE', 'Oi, mundo.', true);

//Para melhor segurança use o terceiro argumento do define como true. Por padrão ele é false.

echo CONSTANTE;
echo constante;

echo '<br>';
echo '<hr>';
echo '<br>';

echo __FILE__;
echo ':';
echo __LINE__;

/*
 * __FUNCTION__
 * __CLASS__
 * __METHOD__
 */
