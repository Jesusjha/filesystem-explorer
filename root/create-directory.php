<?php

if($_POST) {
    
    $create = $_POST["create"];

    echo $create;
}


print_r($_POST);


$newFolder = "./nueva carpeta";
if(!file_exists($newFolder)) {
    mkdir($newFolder, 0777, true);
}