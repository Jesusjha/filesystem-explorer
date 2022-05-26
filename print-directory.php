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
                        </div>
                    </div>
                    <h6 class='mb-0 text-primary'>$dirs[$pos]</h6>
                    
                    <div class='btn-group'>
                    <button type='button' class='btn btn-success dropdown-toggle dropdown-toggle-split'data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    </button>
                    <div class='dropdown-menu'>
                    <a class='dropdown-item' href='#'>Modify</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='#'>Delete</a>
                    </div>
                    </div>

                </div>
            </div>
        </div>";
        }
    } 





                