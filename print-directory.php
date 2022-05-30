<?php


    $dirs = array_slice(scandir("./root"), 2);
    //loop through the array and print the names of the directories
    if (count($dirs) > 0) {
        foreach($dirs as $pos => $dir){
            if (is_dir("./root/$dir")){
                echo "<div class='col-12 col-lg-4'>
                    <div class='card shadow-none border radius-15'>
                        <div class='card-body'>
                        <form id='navigateForm' action='navigate.php' method='post' >
                    
                            <div class='d-flex align-items-center'>
                                <div class='font-30 text-primary'><i class='bx bxs-folder'></i>
                                </div>
                                <div class='user-groups ms-auto'>
                                </div>
                                </div>

                            <input class='btn btn-light mb-0 text-primary' type='submit' name='folder' value='$dirs[$pos]'>
                            </form>

                            <button type='button' onclick='openEditFolderModal(\"$dirs[$pos]\")' class='dropdown-item''><i class='bx bxs-edit'></i></button>

                            <form action='remove-directories.php' method='post'>
                                <button type='submit' name='delete' value='$dirs[$pos]' class='dropdown-item' href='#'><i class='bx bxs-trash'></i></button>
                            </form>
                        </div>
                    </div>
                </div>";
            } else {
                echo "<div class='col-12 col-lg-4'>
                <div class='card shadow-none border radius-15'>
                    <div class='card-body'>
                    <form id='navigateForm' action='navigate.php' method='post' >
                
                        <div class='d-flex align-items-center'>
                            <div class='font-30 text-primary'><i class='bx bxs-folder'></i>
                            </div>
                            <div class='user-groups ms-auto'>
                            </div>
                            </div>

                          
                        <div class='btn btn-light text-primary'><a href='./root/$dir'>$dir</div></a>
                        </form>

                        <button type='button' onclick='openEditFolderModal(\"$dirs[$pos]\")' class='dropdown-item''><i class='bx bxs-edit'></i></button>

                        <form action='remove-directories.php' method='post'>
                            <button type='submit' name='delete' value='$dirs[$pos]' class='dropdown-item' href='#'><i class='bx bxs-trash'></i></button>
                        </form>


                    </div>
                </div>
            </div>";
            }


            
        }
    } 





                