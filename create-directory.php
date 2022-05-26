<?php


function createDirectory(){
    if ($_POST) {
    $create=$_POST['create'];

    $newFolder = "./root/".$create;
    //If the directory of $newFolder does not exist, create it. 
    if(!is_dir($newFolder)){
        mkdir($newFolder, 0777);
    } 
}   
}




