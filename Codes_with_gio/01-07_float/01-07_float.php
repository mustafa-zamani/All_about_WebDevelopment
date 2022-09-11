<?php


# important
# https://www.phptutorial.net/php-tutorial/php-float/
# https://floating-point-gui.de/

$x = floor((0.1+0.7)*10);
echo $x; //out put is 7 cause the representation is not percise in binary 

$x = ceil((0.1+0.2)*10);
echo $x; // output is 4

$x = 0.23;
$y = 1-0.77;
var_dump($x, $y);
if($x == $y){
    echo 'yes';
}else {
    echo 'No'; // this line will execute
}

echo log(-1); #the result is NAN (not a number)
$x = PHP_FLOAT_MAX*2; # the result is INF (infinity)
echo $x;
var_dump(is_nan($x));
var_dump(is_finit($x));
var_dump(is_finit($x)); #check if it is finit 


$amount = (float)100;
echo $amount; // 100
var_dump(floatval($amount));
var_dump((float)$amount);

$x = 'adfa';
var_dump((float)$x); #result is float (0)


$x = '15.5adfa';
var_dump((float)$x); #result is float (15.5)