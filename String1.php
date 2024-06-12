<?php
$a = "Hello world";
$e = "Hello world";

$b = "Hello WORLD AND";
$c = "Hi my name is abdullah";
$d = "Hi my name is abdullah 2002";


$a1=strcmp("Hello world", "Hello world  And ");
// echo $a1;

$a2 = strncmp($a,$b,10);
// echo $a2;


$a3 = strcasecmp($a, $e);

// echo $a3;



$a4 = strncasecmp($a, $b,10);

echo $a4;

?>