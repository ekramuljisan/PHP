<?php

function imageUpload($file_form_name){
    $file_name = $file_form_name['name'];
    $file_temp = $file_form_name['tmp_name'];
    $file_destination = "uploads/".$file_name;

    move_uploaded_file($file_temp,$file_destination);
    return "Upload Done";
}



?>