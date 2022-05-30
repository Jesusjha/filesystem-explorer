<?php
include('show-icon.php');

    $dirs = array_slice(scandir("./root/"), 2);
    $searchString = $_POST['search'];
    //loop through the array and print the names of the directories
    if (count($dirs) > 0) {
        foreach($dirs as $pos => $dir){
            $files = array_slice(scandir("./root/" . $dir), 2);
            foreach ($files as $pos => $file) {
                $path = "./root/" . $dir . "/" . $file;
                $fileExt = explode(".", $file);
                $fileOnlyExt = strtolower(end($fileExt));


                $result = (strpos(strtolower($file), strtolower($searchString)));
                if ($result !== false){
                    echo "<div class='main-container card shadow-none border radius-15'>
   
                    <div class='card-body'>
                         <div class='col-sm'>
                         <img src=" . getIcons($fileOnlyExt) .">
                         <h6 class='mb-0 text-primary'><a href='$path'>$file</h6></a>
                   </div>
                    </div>
                    </div>";
                }
            }
        }
    }
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./main.js" defer></script>
        <title>File Manager</title>
    </head>
    
    <body>
        
    <a href="./index.php"><button type="button" class="btn btn-info">Back</button></a>
        
    </body>
    
    </html>