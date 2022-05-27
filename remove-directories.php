<?php

session_start();

function deleteAll($root, $delFile) {
    if ($_POST) {
        foreach(glob($delFile) as $file) {
        if(is_dir($file)){
            deleteAll($file);
        }
        else
        unlink($file);
        }
        rmdir($root);
    }
    header("Location: ./index.php");
}

$delFile = './root/ati-cachorro.jpg';

$folderName= $_POST['delete'];
$fileDelName = $_POST['delete'];
$_SESSION['folderName'] = $folderName;

deleteAll("./root/$folderName", "./root/$fileDelName");



