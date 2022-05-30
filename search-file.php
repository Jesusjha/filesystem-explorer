<?php

$dirs = array_slice(scandir("./root/"), 2);
$searchString = $_POST['search'];


//loop through the array and print the names of the directories
if (count($dirs) > 0) {
    foreach($dirs as $pos => $dir){
        $files = array_slice(scandir("./root/" . $dir), 2);
        foreach ($files as $pos => $file) {
            // don't take into account if the names are in lowercase or uppercase (case-insensitive)
            $result = (strpos(strtolower($file), strtolower($searchString)));
            if ($result !== false){
                print_r($file);
            }
        }
    }
}