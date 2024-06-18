<?php
// $a = $_POST;
// echo $a['password'];
// if (!empty($_POST)) {
//     echo "hello";
//     $a = $_POST;
//     echo $a['password'];
//     echo $a['email'];
//     echo $a['postalcode'];
//     echo $a['firstname'];
//     echo $a['lastname'];
//     echo $a['address'];
//     echo $a['city'];
//     echo $a['state'];
//     echo $a['country'];
//     echo $a['phone'];
//     echo $a['gender'];
//     echo $a['dob'];
//     echo $a['username'];
//     echo $a['password'];
//     echo $a['confirmpassword'];
//     echo $a['terms'];
//     echo $a['newsletter'];
//     echo $a['submit'];
// }

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
} else {
  echo "empty";
}

?>