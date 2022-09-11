<?php
# read this
//  https://www.phptutorial.net/php-tutorial/php-boolean/

/*
PHP treats the following values as false:

The false keyword.
The integer 0 and -0 (zero).
The floats 0.0 and -0.0 (zero).
The empty string ("", '') and the string “0”.
The empty array (array() or []).
The null.
The SimpleXML objects created from attributeless empty elements.

the output for false is nothing 
because it is casting to string 
*/

$isComplete = true;

if($isComplete){
    echo "the condition is true\n";
}else {
    echo "the condition is false\n";
}

var_dump($isComplete);

is_bool($isComplete);


$isComplete = 'false';

if($isComplete){
    echo "the condition is true\n";
}else {
    echo "the condition is false\n";
}
# the output is true cause it is not empty string
