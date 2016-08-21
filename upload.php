<?php

if (!empty($_FILES)) {
    $uploaded = $_FILES['userfile'];
    if ($uploaded['error']==0){
        move_uploaded_file($uploaded['tmp_name'], __DIR__.'/images/temp.png');
     header('Location: http://php1.local/');
    }
}

?>