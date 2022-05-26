<?php

session_start();
echo $_SESSION['name'];
echo $_SESSION['folderName'];


if ($_POST) {
    $edit=$_POST['edit'];
    
    //Rename the directory to the new name, allowing to edit it multiple times
    rename("./root/".$_SESSION['folderName'], "./root/".$edit);
    $_SESSION['folderName'] = $edit; 

    header("Location: ./index.php");
}   

print_r($edit);