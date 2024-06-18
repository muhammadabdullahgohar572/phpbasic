<?php



if (!empty($_POST)) {
        
    foreach ($_POST as $key => $value) {


        if ($_POST['password'] == $value && $_POST['username']) {
            $password = $_POST['password'];
            $password=bin2hex($password);

            $username = $_POST['username'];
            $username  = bin2hex($username);

            echo $username."<br/>";
            echo $password . "<br/>";


        }
 
    }
}

?>