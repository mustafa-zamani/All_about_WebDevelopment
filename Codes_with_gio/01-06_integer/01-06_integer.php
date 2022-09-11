<?php

// https://www.phptutorial.net/php-tutorial/php-int/

echo PHP_INT_MIN;
echo PHP_INT_MAX;

#decimal
$x = 5;
echo $x."\n";

#HexaDecimal
$x = 0x2A;
echo $x."\n";

#octal

$x = 055; //out put is 45
echo $x."\n";

#binary  
$x = 0b110;
echo $x."\n"; //out put will be 6

#overflow
$x = PHP_INT_MAX +1;
echo $x;
var_dump($x); //float
(int)$x;
var_dump($x);

# type casting to integer
# https://www.phptutorial.net/php-tutorial/php-type-casting/

$x = (int)'123adfa'; //output is 123

$x = 200_000_000; // it is valid if it is not inside qoutation
