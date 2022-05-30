<?php
$icons = "./src/img/icons";

function getIcons($extension) {

    switch($extension) {
    
        case "doc":
            return "./src/img/icons/doc.png";
            break;

        case "exe":
            return "./src/img/icons/exe.png";
            break;

        case "jpg":
            return "./src/img/icons/jpg.png";
            break;

        case "mp3":
            return "./src/img/icons/mp3.png";
            break;

        case "mp4":
            return "./src/img/icons/mp4.png";
            break;

        case "odt":
            return "./src/img/icons/odt.png";
            break;

        case "pdf":
            return "./src/img/icons/pdf.png";
            break;

        case "png":
            return "./src/img/icons/png.png";
            break;

        case "ppt":
            return "./src/img/icons/ppt.png";
            break;

        case "rar":
            return "./src/img/icons/rar.png";
            break;

        case "txt":
            return "./src/img/icons/txt.png";
            break;

        default:
            return "./src/img/icons/zip.png";
    
    }
}