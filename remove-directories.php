<?php


function deleteDirectory($path){
    if(is_dir($path)){
        $files = glob($path . '/*');
        foreach($files as $file){
            deleteDirectory($file);
        }
        rmdir($path);
    } else {
        unlink($path);
    }
    header("Location: ./index.php");
}

deleteDirectory("./root/".$_POST['delete']);
