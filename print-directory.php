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

                    <button type='button' data-toggle='modal' data-target='#exampleModalCenter' class='dropdown-item' href='#'><i class='bx bxs-edit'></i></button>
                    <form action='remove-directories.php' method='POST'>
                        <button type='submit' name='delete' value='$dirs[$pos]' class='dropdown-item' href='#'><i class='bx bxs-trash'></i></button>
                    </form>


                </div>
            </div>
        </div>";
        }
    } 





                