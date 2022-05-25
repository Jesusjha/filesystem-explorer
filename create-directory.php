<?php


$create=$_GET['create'];


$newFolder = "./root/".$create;
if(!file_exists($newFolder)) {
    mkdir($newFolder, 0777, true);
    header ("Location: index.html");
} else {
    echo "Folder already exists";
    header ("Location: index.html");
}