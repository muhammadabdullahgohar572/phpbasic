<?php
// if (!empty($_GET)) {
//     foreach ($_GET as $key => $value) {
//         echo htmlspecialchars($key) . ": " . htmlspecialchars($value) . "<br>";
//     }
// } else {
//     echo "No data received.";
// }


if (!empty($_GET)) {
    foreach ($_GET as $key => $value) {
    
        echo htmlspecialchars($key).": ".htmlspecialchars($value)."<br>";
    }
}
else{
    echo "No data received.";
}
?>