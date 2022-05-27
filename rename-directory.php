<?php

session_start();
echo $_SESSION['name'];
echo $_SESSION['folderName'];


if ($_POST) {
    $edit=$_POST['edit'];
    
    // Rename the directory to the new name, allowing to edit it multiple times
    rename("./root/".$_SESSION['folderName'], "./root/".$edit);
    $_SESSION['folderName'] = $edit; 

    // $oldName = "./root/".$_SESSION['folderName'];
    // $newName = "./root/".$edit;

    // if(rename($oldName, $newName)) {
    //     echo "se ha cambiado";
    // } else {
    //     echo "no se ha cambiado";
    // }


    
    header("Location: ./index.php");
}   

print_r($edit);






// copy("./root/".$_SESSION['folderName'], "./root/".$edit['folderName']);
// unlink("./root/".$_SESSION['folderName']);