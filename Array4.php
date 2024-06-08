<!-- <?php
$color = ["a" => "Red", "b" => "Green", "c" => "Yellow"];
// print_r($a['a']);


// extract($a);

// print_r($a);
// print_r($b);
// print_r($c);



// $color = ["a" => "Red", "b" => "Green", "c" => "Yellow"];
// $c = 10;
// extract($color, EXTR_PREFIX_SAME,"name");

// echo 'This is a Array '.$a . "<br/>";
// echo 'This is a Array '.$b . "<br/>";
// echo 'This is a Array '.$name_c . "<br/>";
// echo 'This is a '.$c . "<br/>";




// $color = ["a" => "Red", "b" => "Green", "c" => "Yellow"];
// $c = 10;
// extract($color, EXTR_PREFIX_ALL, "name");

// echo 'This is a Array ' . $name_a . "<br/>";
// echo 'This is a Array ' . $name_b . "<br/>";
// echo 'This is a Array ' . $name_c . "<br/>";
// echo 'This is a ' . $c . "<br/>";



// $name = "John Doe";
// $father_name = "Richard Roe";
// $roll_number = 12345;
// $class = "10th Grade";
// $gender = "Male";
// $new= compact("name", "father_name","roll_number","class","gender");

// echo "<pre>";
// print_r( $new );

// echo "</pre>";
?> -->

<?php



$new= range(1, 10);

echo "<pre>";

print_r( $new );

echo "</pre>";


foreach(range("a","z")as $letter){
    echo $letter . "<br/>";
}

?>