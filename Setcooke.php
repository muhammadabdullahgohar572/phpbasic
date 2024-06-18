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







<?php



if (!empty($_POST)) {
          foreach ($_POST as $key => $value) {
        if ($_POST['password'] == $value && $_POST['username']) {
            $password = $_POST['password'];
            $password=bin2hex($password);

            $username = $_POST['username'];
            $username  = bin2hex($username);

            // echo $username."<br/>";
            // echo $password . "<br/>";

            setcookie($username,$password,time()+60,"/");
            // header("Location: " . $_SERVER['PHP_SELF']);
            // exit;
        }
    }
}
if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        echo "Cookie for " . hex2bin($key) . ": " . hex2bin($value) . "<br/>";
    }
}
?>
