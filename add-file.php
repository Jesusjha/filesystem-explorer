<?php

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