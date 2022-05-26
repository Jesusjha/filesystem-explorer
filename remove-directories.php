<?php

session_start();

function deleteAll($root) {
    if ($_POST) {
        foreach(glob($root . '/*') as $file) {
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


$folderName= $_POST['delete'];
$_SESSION['folderName'] = $folderName;

deleteAll("./root/$folderName");



