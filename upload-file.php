<?php

$target_dir = "./Uploads";
// echo $_FILES ;
// print_r($_FILES);

if($_FILES["file"])
{
    $path = $_FILES["file"]["name"];
    $upload_Path = "./Uploads/".$path;
    echo $path;
    move_uploaded_file($_FILES['file']["tmp_name"], $upload_Path)||die("File upload failed");
    
}
else{
    die("No file to upload");
}
?>