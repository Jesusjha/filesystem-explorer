<?php

if ($_POST) {
    $folderName=$_POST['oldName'];
    $newName=$_POST['newName'];
    
    //Rename the directory to the new name, allowing to edit it multiple times
    rename("./root/".$folderName, "./root/".$newName);

    header("Location: ./index.php");
}   

print_r($edit);