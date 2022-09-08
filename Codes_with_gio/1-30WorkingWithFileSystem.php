<?php
//working with filesystems

$dir = scandir(__DIR__);
var_dump(is_file($dir[1]));
// loops

mkdir('dir_name');
rmdir('dir_name');
mkdir('dir_name', recursive: true);
rmdir('foo/bar'); #delete bar dir

if(file_exists()){
    echo "affsdds";
    file_put_contents('foo.txt', 'hello world');
    clearstatcache();
    $file = fopen('foo.txt', 'r'); # r is read fopen is a ref to external resources
}else{
    echo "sdfafa";
}

while( ($line = fgets($file) !== false){
    echo $line . '<br />';
}

while( ($line = fgetcsv($file) !=== false){     #check by comma soperator 
    echo $line . '<br />';
}

fclose($file);


$content = file_get_contents('file name', offset: 3 , length:2);

file_put_contents('foo.txt', 'Hello', FILE_APPEND); 
# if the file doesn't exist it will create the file nad replace the txt but if 3rd arg is present it will add
unlink('foo.txt'); #remove file
copy('foo.txt','bar.txt'); # copye foo to bar
#usefull links