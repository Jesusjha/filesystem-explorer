<?php

if ($_POST) {
    $oldName=$_POST['oldName'];
    $newName=$_POST['newName'];
    
    //Rename the directory to the new name, allowing to edit it multiple times
    rename("./root/".$oldName, "./root/".$newName);

    header("Location: ./index.php");
}
