<!-- <?php
        $fruits = array("apple", "banana", "orange");

        if (in_array("banana", $fruits)) {
            echo "Banana is in the array.";
        } else {
            echo "Banana is not in the array.";
        }
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



        $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango'];
        $countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];


        sort($countries);

        echo implode($countries);

        echo "<br/>";


        $a = ["b" => "Orange", "g" => "Mango", "i" => "Apple", "a" => "Grapes"];
        arsort($a);

        echo "<pre>";

        print_r($a);

        echo "</pre>";







        $b = ["b" => "Orange", "g" => "Mango", "i" => "Apple", "a" => "Grapes"];
        ksort($b);
        //revice
        //krsort($b);

        echo "<pre>";

        print_r($b);

        echo "</pre>";


        $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango'];
        $countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];


        array_multisort($fruits, $countries);

        echo "<pre>";

        print_r($fruits);

        echo "</pre>";

        echo "<pre>";

        print_r($countries);

        echo "</pre>";
        ?> -->








<!-- 


<?php
$array = ["a" => "Apple", "b" => "Banana", "c" => "Cherry", "d" => "Date"];

// reset: Sets the internal pointer to the first element
reset($array);
echo "First element: " . current($array) . "\n"; // Output: Apple

// next: Moves the pointer to the next element
next($array);
echo "Next element: " . current($array) . "\n"; // Output: Banana

// key: Gets the key of the current element
echo "Current key: " . key($array) . "\n"; // Output: b

// next: Moves the pointer to the next element
next($array);
echo "Next element: " . current($array) . "\n"; // Output: Cherry

// prev: Moves the pointer to the previous element
prev($array);
echo "Previous element: " . current($array) . "\n"; // Output: Banana

// end: Moves the pointer to the last element
end($array);
echo "Last element: " . current($array) . "\n"; // Output: Date

// pos: Alias of current, shows the current element
echo "Current element using pos: " . pos($array) . "\n"; // Output: Date

?> -->

<?php
$fruits = array("Apple", "Banana", "Cherry");


list($fruit1, $fruit2, $fruit3) = $fruits;

echo $fruit1; // Output: Apple
echo $fruit2; // Output: Banana
echo $fruit3; // Output: Cherry

?>