<?php
include('show-icon.php');

$folderName = $_POST['folder'];

if ($_FILES){
    $dir = "./root/$folderName" . "/";
    $path = $dir . $_FILES['fileInFolder']['name'];
        
    if (!file_exists($dir)) {
        mkdir($dir, 0777);
    }
    
    if(move_uploaded_file($_FILES['fileInFolder']['tmp_name'], $path)) {
        #header ('Location: index.php');
    } 
    
}


$dirs = array_slice(scandir("./root/" . $folderName), 2);
//loop through the array and print the names of the directories
if (count($dirs) > 0) {
    foreach($dirs as $pos => $dir){
    $name = $dir;
    $fileExt = explode('.',$name);
    $fileActExt = strtolower(end($fileExt));
        // $src = getIcons($fileActExt);
    echo "<div class='container-fluid'>
    <div class='card shadow-none border radius-15'>
        <div class='card-body'>
            <div class='d-flex'>
                <div class='font-30 text-primary'>
                <img src=" . getIcons($fileActExt) .">
                </div>
                <div class='user-plus'></div>
            </div>
            <h6 class='mb-0 text-primary'>$dir</h6>
        </div>
        <form action='delete-file.php' method='post'>
        <input type='hidden' name='parentFolder' value='$folderName'>
        <button type='submit' name='deleteFile' value='$dir' class='dropdown-item' href='#'><i class='bx bxs-trash'></i></button>
        </form>
    </div>
</div>";
    }
}
?>