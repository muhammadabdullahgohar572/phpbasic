<?php
// $A="Hello world";
// $a = str_split($A);
// print_r($a);
// echo "<br/>";
// $c = chunk_split($A,2,"-");
// echo $c



// $A = "Hello world";
// $a = strtolower($A);
// $b = strtoupper($A);
// $c =ucwords($A);
// $d = lcfirst($A);


// echo $a." ","This is strtolower case";
// echo "<br/>";
// echo $b." "  . "This is strtoupper case";
// echo "<br/>";

// echo $c . " "  . "This is ucwords case";
// echo "<br/>";
// echo $d . " "  . "This is lcfirst case";
// echo "<br/>";
?>


<?php

$A = "Hello world:";

$a = strlen($A);

$b = str_word_count($A);
$c = substr_count($A,"o");

$d = str_word_count($A, 2);


echo $a;
echo "<br/>";
echo $b;

echo "<br/>";
echo $c;


echo "<br/>";

echo implode($d);
?>