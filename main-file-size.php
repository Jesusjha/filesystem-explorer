<?php

function showFileSize($direct){
    foreach($direct as $pos => $file) {
        $rootSize = "./root/" . $direct . "/" . $file;
        $showSize = filesize($rootSize);
    }
}