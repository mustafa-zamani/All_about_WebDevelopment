<?php
# ruturn will not stop execution of script while it is inside the function 
# but it will stop excecution of script if it is used in global scope of script
/*
function sum ($x , $y ){
    $z = $x + $y;
    return $z;
}

$x = sum(5,10);
echo $x;

// return;

echo '<br />';
echo 'Hello World' . '<br />';

 // declare - ticks 
 function onTick()
 {
    echo 'Tick<br />';
 }
 register_tick_function(onTick);

 $i = (int) 0;
$lenght = (int) 10;
while ($i <$lenght)
{
    echo $i++ . '<br />';
}

*/

// declare - strict_types
// it will only apply to existing file means you need to specify it to other files too if you need
// requre 'phpFileName.php'  adds the php file to another php file
declare(strict_types=1);

function sum(int $x , int $y){
    return $x + $y;
}
$sumofVar = sum(5,10);
print $sumofVar;

