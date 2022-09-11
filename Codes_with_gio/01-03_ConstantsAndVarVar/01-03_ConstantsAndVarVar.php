<?php
# read this document
// https://www.phptutorial.net/php-tutorial/php-constants/
# for more
# https://www.php.net/manual/en/language.constants.magic.php

define('STATUS_PAID', "paid");
echo STATUS_PAID."\n";

#CONSTANTS CAN'T BE OVERWRITE

echo defined('STATUS_PAID');
echo "\n";

const STATUS_PAID1 = 'paid';
echo STATUS_PAID1 ."\n";

#const with const keyword define at compile time 
#while with define it defines at runtime
#we can use define with conditional statements while we cant' do it with const key word


if(true){
    define('STATUS_PAID2', 'paid2');
}
echo STATUS_PAID2."\n";

$paid3 = 'PAID3';
define ('STATUS_'.$paid3, $paid3);
echo STATUS_PAID3."\n";
#pre defined constant like
echo PHP_VERSION;
#MAGIC CONST
echo __DIR__;

#var var
$foo = 'bar';
$$foo = 'baz';
echo $foo , $bar;
echo $foo , $$foo;
echo "$foo , {$$foo}";
echo "$foo , ${$foo}";