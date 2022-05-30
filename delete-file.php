<?php


//Delete the file from inside a parent folder
if (isset($_POST['deleteFile'])) {
    $fileName = $_POST['deleteFile'];
    $parentFolder = $_POST['parentFolder'];
    $dir = "./root/" . $parentFolder . "/". $fileName;
    unlink($dir);
    header ('Location: index.php');
}

