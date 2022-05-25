<?php
    
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode(".", $fileName);
    $fileOnlyExt = strtolower(end($fileExt));