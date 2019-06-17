<?php 

if(isset($_POST['submit'])){
    $newFileName = $_POST['filename'];
    if(empty($_POST['filename'])){
        $newFileName = "gallery";
    }
    else{
      $newFileName =strtolower(str_replace(" ", "-", $newFileName));   
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];
    
    $file = $_FILES['file'];
    
    print_r($file);
    
    
}