<?php

// $file = $_FILES['file'];
// $file_name = $_FILES['file']['name'];
// $file_temp = $_FILES['file']['tmp_name'];
// $file_destination = "uploads/".$file_name;

// move_uploaded_file($file_temp,$file_destination);
// echo "Upload Done";

include('file-upload-system.php');
echo imageUpload($_FILES['file']);





// print_r($file_name);
// echo "<br/>";
// print_r($file_name);

?>