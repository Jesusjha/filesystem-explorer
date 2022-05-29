<?php
$folderName = $_POST['folder'];


$dir = "./root/$folderName" . "/";
print_r($dir . "<br>");
$path = $dir . $_FILES['fileInFolder']['name'];
print_r($path . "<br>");

if (!file_exists($dir)) {
    mkdir($dir, 0777);
}

if(move_uploaded_file($_FILES['fileInFolder']['tmp_name'], $path)) {
    echo "El archivo se cargo correctamente. Nombre del archivo: " . $_FILES['fileInFolder']['name'];
    //header ('Location: navigate.php');
} else {
    echo "Error al cargar el archivo";
}

// $dirs = array_slice(scandir("./root/" . $folderName), 2);
// print_r($dirs);
//FUNCIONA PERFECTAMENTE. NEXT STEP IMPRIMIR EN NAVIGATE.PHP LOS ARCHIVOS DE LA CARPETA


?>