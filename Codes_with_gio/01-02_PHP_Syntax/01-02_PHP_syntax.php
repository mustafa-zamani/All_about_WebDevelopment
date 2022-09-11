<?php
// only close your php tag if you are mixing it with html or other language
echo "hello world";
// ; forget will occur parsing error
// ; is not required in last statement with php file
// print returen 1 can work with statements 
// echo doesn't 
echo print "hello world";
// print echo "hello world"; #it doesn't work 
// echo also can append text with ,
echo 'hello', ' ', 'world';
// print 'hello', ' ', 'world'; # doen'st work
// variables can start with
//  a-z A-Z _ 
// not number or special character
// but can have in other part of var except specail char
// and can not be assigned to $this
// valid var $_abd123 or $adfa_123;
$firstName = 'Gio';
echo 'Hello $firstName'.'<br />';
echo "Hello $firstName".'<br />';
echo "Hello ${firstName}".'<br />';
echo "Hello {$firstName}".'<br />';
/*
<h1> <?php echo "hello world"; ?> </h1>
or 
<h1> <?= "hello World" ?> </h1> 
*?
# // IS SINGLE LINE COMMENT
//  $ ISN INLINE COMMENT
/* YOUR COMMENTS GOES HERE */ # IS A MULTI LINE COMMENT AND DON'T NEST MULTI LINE COMMENT