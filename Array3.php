<!-- <?php
        //array(): Creates an array

        $array = array("apple", "banana", "cherry");

        ?> -->



<?php
//array_change_key_case(): Changes the case of all keys in an array.

$array = array("First" => 1, "Second" => 2);
$array = array_change_key_case($array, CASE_UPPER);

?>



<?php
//array_chunk(): Splits an array into chunks.
$array = array("a", "b", "c", "d");
$chunks = array_chunk($array, 2);


?>






<?php
//array_column(): Returns the values from a single column in the input array.
$records = array(
    array("id" => 1, "name" => "John"),
    array("id" => 2, "name" => "Jane")
);
$names = array_column($records, "name");

?>









<?php
//array_combine(): Creates an array by using one array for keys and another for its values.
$keys = array("a", "b", "c");
$values = array(1, 2, 3);
$combined = array_combine($keys, $values);

?>








<?php

//array_count_values(): Counts all the values of an array.
$array = array(1, "hello", 1, "world", "hello");
$counts = array_count_values($array);

?>




<?php

//array_diff(): Computes the difference of arrays.
$array1 = array("a", "b", "c");
$array2 = array("a", "c", "d");
$diff = array_diff($array1, $array2);

?>






<?php

///array_diff_key(): Computes the difference of arrays using keys for comparison.
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("a" => "apple", "c" => "cherry");
$diff = array_diff_key($array1, $array2);


?>








<?php

//array_filter(): Filters elements of an array using a callback function.
$array = array(1, 2, 3, 4, 5);
$even = array_filter($array, function ($value) {
    return $value % 2 == 0;
});

echo $even;
?>







<?php

///array_flip(): Exchanges all keys with their associated values in an array.
$array = array("a" => 1, "b" => 2);
$flipped = array_flip($array);


?>






array_key_exists(): Checks if the given key or index exists in the array.
$array = array("a" => 1, "b" => 2);
$exists = array_key_exists("a", $array);


array_keys(): Returns all the keys or a subset of the keys of an array.
$array = array("a" => 1, "b" => 2);
$keys = array_keys($array);


array_map(): Applies the callback to the elements of the given arrays.
$array = array(1, 2, 3, 4, 5);
$squared = array_map(function($value) {
return $value * $value;
}, $array);



array_merge(): Merges one or more arrays.
$array1 = array("a", "b");
$array2 = array("c", "d");
$merged = array_merge($array1, $array2);



array_pop(): Pops the element off the end of the array.
$array = array("a", "b", "c");
$last = array_pop($array);



array_push(): Pushes one or more elements onto the end of the array.
$array = array("a", "b");
array_push($array, "c", "d");



array_rand(): Picks one or more random keys out of an array.
$array = array("a" => 1, "b" => 2, "c" => 3);
$randomKey = array_rand($array);




array_reverse(): Returns an array with elements in reverse order.
$array = array("a", "b", "c");
$reversed = array_reverse($array);



array_search(): Searches the array for a given value and returns the first corresponding key if successful.
$array = array("a", "b", "c");
$key = array_search("b", $array);



array_shift(): Shifts an element off the beginning of the array.
$array = array("a", "b", "c");
$first = array_shift($array);



array_slice(): Extracts a slice of the array.
$array = array("a", "b", "c", "d");
$slice = array_slice($array, 1, 2);



array_sum(): Calculates the sum of values in an array.
$array = array(1, 2, 3, 4);
$sum = array_sum($array);


array_unique(): Removes duplicate values from an array.
$array = array("a", "b", "a", "c", "b");
$unique = array_unique($array);


array_values(): Returns all the values of an array.
$array = array("a" => 1, "b" => 2, "c" => 3);
$values = array_values($array);


array_walk(): Applies a user-defined function to every element of an array.
$array = array(1, 2, 3, 4);
array_walk($array, function(&$value, $key) {
$value *= 2;
});