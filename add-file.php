<?php
    
    // $file = $_FILES['file'];
    // print_r($file);
    // $fileName = $_FILES['file']['name'];
    // $fileTmp = $_FILES['file']['tmp_name'];
    // $fileSize = $_FILES['file']['size'];
    // $fileError = $_FILES['file']['error'];
    // $fileType = $_FILES['file']['type'];

    // $fileExt = explode(".", $fileName);
    // $fileOnlyExt = strtolower(end($fileExt));

    session_start();

    $dir = "./root/";
    $path = $dir . $_FILES['file']['name'];

    if (!file_exists($dir)) {
        mkdir($dir, 0777);
    }

    if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
        echo "El archivo se cargo correctamente";
        header ('Location: index.php');
    } else {
        echo "Error al cargar el archivo";
    }