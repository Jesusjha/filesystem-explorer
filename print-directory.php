<?php

    $dirs = array_slice(scandir("./root"), 2);
    //loop through the array and print the names of the directories
    if (count($dirs) > 0) {
        foreach($dirs as $pos => $dir){
            echo "<div class='col-12 col-lg-4'>
            <div class='card shadow-none border radius-15'>
                <div class='card-body'>
                    <div class='d-flex align-items-center'>
                        <div class='font-30 text-primary'><i class='bx bxs-folder'></i>
                        </div>
                        <div class='user-groups ms-auto'>
                            <img src='https://bootdey.com/img/Content/avatar/avatar1.png' width='35'
                                height='35' class='rounded-circle' alt='>
                            <img src='https://bootdey.com/img/Content/avatar/avatar2.png' width='35'
                                height='35' class='rounded-circle' alt='>
                        </div>
                        <div class='user-plus'>+</div>
                    </div>
                    <h6 class='mb-0 text-primary'>$dirs[$pos]</h6>
                    <small>15 files</small>
                </div>
            </div>
        </div>";
        }
    } 