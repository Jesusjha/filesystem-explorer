<?php

session_start();

function deleteAll($root, $dFile) {
    if ($_POST) {
        foreach(glob($dFile) as $file) {
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

$dFile = './root/ati-cachorro.jpg';

$folderName= $_POST['delete'];
$_SESSION['folderName'] = $folderName;

deleteAll("./root/$folderName", "./root/ati-cachorro.jpg");



