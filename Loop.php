<?php



// $a = 1;
// do {
//     echo "This is a " . $a."<br/>";
//     $a++;
//  } while ($a <= 10);


// for ($i = 0; $i < 10; $i++) {

//     if ($i ==5) {
//         continue;
//     }
//     echo "". $i;
// }


$a = [10, 20, 30, 40, 50];


foreach ($a as $value) {
    echo $value."<br/>";
}

$b = [
    "one" => 10,
    "two" => 20,
    "three" => 30,
    "four" => 40,
    "five" => 50,

];


foreach ($b as $key => $value) {
    echo $key . "=" . $value."<br/>";
}



?>