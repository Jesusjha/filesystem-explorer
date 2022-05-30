<?php

include_once('./file-size.php');

$folderName = $_POST['folder'];

if ($_FILES){
    $dir = "./root/$folderName" . "/";
    $path = $dir . $_FILES['fileInFolder']['name'];
    
    if (!file_exists($dir)) {
        mkdir($dir, 0777);
    }
    
    if(move_uploaded_file($_FILES['fileInFolder']['tmp_name'], $path)) {
        //header ('Location: index.php');
        echo "<script>alert('File uploaded successfully');window.location= 'index.php'</script>";
    } 
    
}




$dirs = array_slice(scandir("./root/" . $folderName), 2);
//loop through the array and print the names of the directories
if (count($dirs) > 0) {
    foreach($dirs as $pos => $dir){
        $file = "./root/" . $folderName . "/" . $dir;
        $fileName = $dir;
        $bytes = filesize($file);
        $fileExt = explode(".", $fileName);
        $fileOnlyExt = strtolower(end($fileExt));
        $fileTimeModify = date("F d Y H:i:s.", filemtime($file));
        $fileCreationDate = date("F d Y H:i:s.", filectime($file));

       echo "<div class='main-container card shadow-none border radius-15'>
   
           <div class='card-body row'>
                <div class='col-sm'>
               <h6 class='mb-0 text-primary'><a href='./root/$folderName/$dir'>$dir</h6></a>

           <form action='delete-file.php' method='post'>
           <input type='hidden' name='parentFolder' value='$folderName'>
           <button type='submit' name='deleteFile' value='$dir' class='dropdown-item'><i class='bx bxs-trash'></i></button>
           </form>
           </div>
           <div class='col-sm'> 
           
                    <table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>Creation date</th>
                <th scope='col'>Last Modified Date</th>
                <th scope='col'>Extension</th>
                <th scope='col'>Size</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>$fileCreationDate</td>
                <td>$fileTimeModify</td>
                <td>$fileOnlyExt</td>
                <td>" . fileSizeUnit($bytes) . "</td>
                </tr>
            </tbody>
            </table>

           </div>
           </div>
   </div>";

    }
}
?>