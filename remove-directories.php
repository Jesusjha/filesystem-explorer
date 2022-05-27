<?php



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


deleteAll("./root/$folderName");



