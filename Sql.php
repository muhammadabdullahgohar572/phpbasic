<!-- <?php


        $str = 'My name is "Abdullah" ';

        echo $str . "<br/>";

        $newdata = addslashes($str);

        echo $newdata;


        echo "<br/>";

        $newdataa = stripslashes($newdata);

        echo $newdataa;





        echo "<br/>";

        $str1 = "My name is abdullah";
        $newdataaa = addcslashes($str1, "A..b");

        echo $newdataaa;

        ?> -->

<!-- <?php
        // $str = 'Hi my name is <b>"Abdullah"</b>';


        // echo $str."<br/>";

        // echo htmlentities($str1,ENT_QUOTES);
        // echo "<br/>";
        // echo htmlentities($str1, ENT_NOQUOTES);

        $str = 'Hi my name is <b>"Abdullah"</b>';

        echo $str . "<br/>";


        $a = md5($str);
        echo $a;


        echo "<br/>";


        $a1 = md5($str, true);
        echo $a1;
        echo "<br/>";

        $A = sha1($str1, true);
        echo $A;
        echo "<br/>";


        $A1 = sha1($str1);
        echo $A1;
        ?> -->

<?php

// Original data
$original_string = "My name is Abdullah";

// Encode the data
$encoded_string = convert_uuencode($original_string);

// Output the encoded string
echo "Encoded: " . $encoded_string . "<br/>";

// Decode the data
$decoded_string = convert_uudecode($encoded_string);

// Output the decoded string
echo "Decoded: " . $decoded_string . "<br/>";

?>