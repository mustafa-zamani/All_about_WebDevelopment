<?php

function foo()
{
    echo 'Hello world';
}
foo();


function foo1()
{
    return 'Hello world';
}

echo foo1();
// or
$x = foo1();
echo $x;
