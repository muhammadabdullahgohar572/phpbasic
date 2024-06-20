<?php




if (!empty($_FILES['file'])) {
    $Filetype = $_FILES['file']['tmp_name'];
    $Filename = $_FILES['file']['name'];

    move_uploaded_file($Filetype,"./test/".$Filename);
    
}

?>