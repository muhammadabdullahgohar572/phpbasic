<!-- <?php

        $a1 = ["a" => "red", "b" => "Green", "c" => "Blue", "d" => "Yellow", "e" => "Black", "f" => "White", "g" => "Cyan"];
        $a2 = ["h" => "Magenta", "g" => "Cyan", "k" => "Lime", "c" => "Green", "z" => "Teal", "e" => "Gray", "j" => "Yellow", "a" => "Purple"];



        function DataTest($a, $b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }

        function DataTest1($a, $b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }

        $new2 = array_uintersect_uassoc($a1, $a2, "DataTest", "DataTest1");

        echo "<pre>";

        print_r($new2);

        echo "</pre>";

        ?>
 -->






<?php

// $new =array_intersect($a1, $a2);
// echo implode("", $new), "<br />";
// echo "<br />";



// $new1 = array_intersect_key($a1, $a2);

// echo "<pre>";

// print_r($new1);

// echo "</pre>";


// $new2 = array_intersect_assoc($a1, $a2);

// echo "<pre>";

// print_r($new2);

// echo "</pre>";


?>








<!-- <?php
        $a1 = ["a" => "red", "b" => "Green", "c" => "Blue", "d" => "Yellow", "e" => "Black", "f" => "White", "g" => "Cyan"];
        $a2 = ["h" => "Magenta", "g" => "Cyan", "k" => "Lime", "c" => "Green", "z" => "Teal", "e" => "Gray", "j" => "Yellow", "a" => "Purple"];


        $newArray = array_diff($a1, $a2);

        echo "<pre>";

        print_r($newArray);

        echo "</pre>";


        $newArray1 = array_diff_key($a1, $a2);

        echo "<pre>";

        print_r($newArray);

        echo "</pre>";


        $newArray = array_diff_assoc($a1, $a2);

        echo "<pre>";

        print_r($newArray);

        echo "</pre>";


        ?> -->

<!-- <?php

$countries = ['United States', 'Canada', 'Canada', 'United Kingdom', 'Australia', 'Germany'];
$fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango', "Test"];


$newArray = array_values($fruits);

echo "<pre>";

print_r($newArray);

echo "</pre>";


$newArray2 = array_unique($countries);

echo "<pre>";

print_r($newArray2);

echo "</pre>";

$students = [
    [
        "Name" => "Ali",
        "FatherName" => "Ahmed",
        "RollNumber" => 101,
        "AttendanceTotal" => 90
    ],
    [
        "Name" => "Sara",
        "FatherName" => "Omar",
        "RollNumber" => 102,
        "AttendanceTotal" => 85
    ],
    [
        "Name" => "Zain",
        "FatherName" => "Khalid",
        "RollNumber" => 103,
        "AttendanceTotal" => 95
    ],
    [
        "Name" => "Aisha",
        "FatherName" => "Hamza",
        "RollNumber" => 104,
        "AttendanceTotal" => 80
    ],
    [
        "Name" => "Bilal",
        "FatherName" => "Mustafa",
        "RollNumber" => 105,
        "AttendanceTotal" => 88
    ],
    [
        "Name" => "Fatima",
        "FatherName" => "Yasir",
        "RollNumber" => 106,
        "AttendanceTotal" => 92
    ],
    [
        "Name" => "Hassan",
        "FatherName" => "Imran",
        "RollNumber" => 107,
        "AttendanceTotal" => 86
    ],
    [
        "Name" => "Noor",
        "FatherName" => "Zafar",
        "RollNumber" => 108,
        "AttendanceTotal" => 89
    ],
    [
        "Name" => "Usman",
        "FatherName" => "Farooq",
        "RollNumber" => 109,
        "AttendanceTotal" => 94
    ],
    [
        "Name" => "Maryam",
        "FatherName" => "Jamal",
        "RollNumber" => 110,
        "AttendanceTotal" => 87
    ]
];

$newArray3 = array_column($students, "Name", "RollNumber");

echo "<pre>";

print_r($newArray3);

echo "</pre>";





$newArray4 = array_chunk($countries, 2);

echo "<pre>";

print_r($newArray4);

echo "</pre>";



?> -->

<!-- <?php

$a=[10,20,30,40,50,40,60,40];

echo "sum".array_sum($a);


echo "<br/>";

echo "max".max($a);

echo "<br/>";

echo "min".min($a);


echo "<br/>";

echo "Product" . array_product($a);


?> -->




<!-- <?php

$students = [
    [
        "Name" => "Ali",
        "FatherName" => "Ahmed",
        "RollNumber" => 101,
        "AttendanceTotal" => 90
    ],
    [
        "Name" => "Sara",
        "FatherName" => "Omar",
        "RollNumber" => 102,
        "AttendanceTotal" => 85
    ],
    [
        "Name" => "Zain",
        "FatherName" => "Khalid",
        "RollNumber" => 103,
        "AttendanceTotal" => 95
    ],
    [
        "Name" => "Aisha",
        "FatherName" => "Hamza",
        "RollNumber" => 104,
        "AttendanceTotal" => 80
    ],
    [
        "Name" => "Bilal",
        "FatherName" => "Mustafa",
        "RollNumber" => 105,
        "AttendanceTotal" => 88
    ],
    [
        "Name" => "Fatima",
        "FatherName" => "Yasir",
        "RollNumber" => 106,
        "AttendanceTotal" => 92
    ],
    [
        "Name" => "Hassan",
        "FatherName" => "Imran",
        "RollNumber" => 107,
        "AttendanceTotal" => 86
    ],
    [
        "Name" => "Noor",
        "FatherName" => "Zafar",
        "RollNumber" => 108,
        "AttendanceTotal" => 89
    ],
    [
        "Name" => "Usman",
        "FatherName" => "Farooq",
        "RollNumber" => 109,
        "AttendanceTotal" => 94
    ],
    [
        "Name" => "Maryam",
        "FatherName" => "Jamal",
        "RollNumber" => 110,
        "AttendanceTotal" => 87
    ]
];

// $newArray = array_column($students, "Name", "RollNumber");

// // Extract values from the associative array for imploding
// $names = array_values($newArray);

// echo implode(", ", $names);

// echo "<br/>";
// echo "<br/>";
// echo "<br/>";


$test = array(
    "Name"=>"Abdullah",
    "FatherName"=>"Ali",
    "RollNumber"=>101,
    "AttendanceTotal"=>90);

    $flipddata= array_flip($students);
    echo implode(", ", $flipddata);
    
// $newdata = array_change_key_case($test,CASE_UPPER);
// echo implode(", ", $newdata);
        
?> -->

<!-- <?php
$students = [
    [
        "Name" => "Ali",
        "FatherName" => "Ahmed",
        "RollNumber" => 101,
        "AttendanceTotal" => 90
    ],
    [
        "Name" => "Sara",
        "FatherName" => "Omar",
        "RollNumber" => 102,
        "AttendanceTotal" => 85
    ],
    [
        "Name" => "Zain",
        "FatherName" => "Khalid",
        "RollNumber" => 103,
        "AttendanceTotal" => 95
    ],
    [
        "Name" => "Aisha",
        "FatherName" => "Hamza",
        "RollNumber" => 104,
        "AttendanceTotal" => 80
    ],
    [
        "Name" => "Bilal",
        "FatherName" => "Mustafa",
        "RollNumber" => 105,
        "AttendanceTotal" => 88
    ],
    [
        "Name" => "Fatima",
        "FatherName" => "Yasir",
        "RollNumber" => 106,
        "AttendanceTotal" => 92
    ],
    [
        "Name" => "Hassan",
        "FatherName" => "Imran",
        "RollNumber" => 107,
        "AttendanceTotal" => 86
    ],
    [
        "Name" => "Noor",
        "FatherName" => "Zafar",
        "RollNumber" => 108,
        "AttendanceTotal" => 89
    ],
    [
        "Name" => "Usman",
        "FatherName" => "Farooq",
        "RollNumber" => 109,
        "AttendanceTotal" => 94
    ],
    [
        "Name" => "Maryam",
        "FatherName" => "Jamal",
        "RollNumber" => 110,
        "AttendanceTotal" => 87
    ]
];

$datacolum =array_column($students, 'Name',"RollNumber" );

$newdata=array_flip($datacolum);
echo "<pre>";

print_r($datacolum);

echo "</pre>";
?> -->



<?php

$fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango'];
$countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];

$newArray=array_rand($fruits);

echo $fruits[$newArray];


 shuffle($countries);


echo implode($countries);



?>