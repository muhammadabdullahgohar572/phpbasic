<?php 

//  function FunctionName($a){
//     $a = 30;
//     echo $a;
//  }

// $b = 10;
// echo $b."<br/>";
// FunctionName($b);

/////////////////////////////
// function FunctionName(&$a){
//    echo $a;
// }

// $b = "Abdullah";
// FunctionName($b);
// echo $b."<br/>";    $a = "Safdar";



// function FunctionName($a){
//     echo $a;
// }

// $Fun ="FunctionName";

// $Fun(10);


// $Test =function()  {
//   echo "Abdullah";  
// };

// $Test();


echo "Hi 😀"."<br/>";
function FunctionName( $a) {
 if ($a <= 5) {
    echo $a."<br/>";
    FunctionName($a + 1);
 }
}

FunctionName(1);
 
function Name($b) {
  if ($b <= 1) {
    return 1;
  } else {
    // Recursively call the function with the new value
    return $b * Name($b - 1);
  }
}

$c = Name(5);

echo $c . "<br/>";


 
?>