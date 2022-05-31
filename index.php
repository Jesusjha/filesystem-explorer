<?php

require_once("./create-directory.php");
include("./main-file-size.php");
include_once('./file-size.php');
createDirectory();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>File Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./main.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid">
                                <button id="newFolderBtn" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    New folder
                                </button>

                                    <form method="POST" action="add-file.php" enctype="multipart/form-data">
                                    <label for="files" class="btn btn-primary">Add file</label>
                                    <input id="files" style="visibility:hidden;" type="file" name="file" onchange="this.form.submit()">
                                    </form>
                               
                                


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New folder</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>


                                        
										<div class="modal-body">
											
											<form class="modal-body" action="" method="post"> <!-- todo -->
											<input id="folderName" type="text" name="create">
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
												<button id="createFolderBtn" type="submit" class="btn btn-primary">Create
											</div>
											</form> <!-- todo -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">New name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="./rename-directory.php" method="post">
                                    <input type="text" name="newName"> 
                                    <input type="hidden" name="oldName" value="" id="inputOldName">    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>

                        <h5 class="my-3">My Drive</h5>
                        <div class="fm-menu">
                            <div class="list-group list-group-flush"> <a href="javascript:;"
                                    class="list-group-item py-1"><i class="bx bx-folder me-2"></i><span>All
                                        Files</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-devices me-2"></i><span>My Devices</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-analyse me-2"></i><span>Recents</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-plug me-2"></i><span>Important</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-trash-alt me-2"></i><span>Deleted Files</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i class="bx bx-file me-2"></i>
                                    <span>Documents</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-image me-2"></i><span>Images</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-video me-2"></i><span>Videos</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-music me-2"></i><span>Audio</span></a>
                                <a href="javascript:;" class="list-group-item py-1"><i
                                        class="bx bx-beer me-2"></i><span>Zip Files</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-0 text-primary font-weight-bold">45.5 GB <span class="float-end text-secondary">50
                                GB</span></h5>
                        <p class="mb-0 mt-2"><span class="text-secondary">Used</span><span
                                class="float-end text-primary">Upgrade</span>
                        </p>
                        <div class="progress mt-3" style="height:7px;">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"></div>
                        <div class="d-flex align-items-center">
                            <div class="fm-file-box bg-light-primary text-primary"><i class="bx bx-image"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Images</h6>
                                <p class="mb-0 text-secondary">1,756 files</p>
                            </div>
                            <h6 class="text-primary mb-0">15.3 GB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-success text-success"><i class="bx bxs-file-doc"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Documents</h6>
                                <p class="mb-0 text-secondary">123 files</p>
                            </div>
                            <h6 class="text-primary mb-0">256 MB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-danger text-danger"><i class="bx bx-video"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Media Files</h6>
                                <p class="mb-0 text-secondary">24 files</p>
                            </div>
                            <h6 class="text-primary mb-0">3.4 GB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-warning text-warning"><i class="bx bx-image"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Other Files</h6>
                                <p class="mb-0 text-secondary">458 files</p>
                            </div>
                            <h6 class="text-primary mb-0">3 GB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-info text-info"><i class="bx bx-image"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Unknown Files</h6>
                                <p class="mb-0 text-secondary">57 files</p>
                            </div>
                            <h6 class="text-primary mb-0">178 GB</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="fm-search">
                            <div class="mb-0">
                                <form name="myForm" action="search-file.php" method="post">
                                <div class="input-group input-group-lg"> <span
                                        class="input-group-text bg-transparent" onclick="myForm.submit()"><i class="fa fa-search"></i></span>
                                    <input type="text" name="search" class="form-control" placeholder="Search the files">
                                </div>
                                </form>
                            </div>
                        </div>

                        <h5>Folders</h5>
                        <div id="folderContainer" class="row mt-3">
                            <?php
                                include_once("./print-directory.php");
                            ?>
                            
                            
                            
                        </div>
                        <!--end row-->
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Folders info</h5>
                            </div>
                            <div class="ms-auto"><a href="javascript:;" class="btn btn-sm btn-outline-secondary">View
                                    all</a>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped table-hover table-sm mb-0">
                                
                                <thead>
                                    <tr>
                                        <th class="col-3">Name <i class="bx bx-up-arrow-alt ms-2"></i>
                                        </th>
                                        <th class="col-3">Creation date</th>
                                        <th class="col-4">Last Modified</th>
                                        <th class="col-3">Size</th>
                                    </tr>
                                </thead>
                            </table>

                                <?php
                                
                                $directories = array_slice(scandir("./root/"), 2);
                                if(count($directories) > 0) {
                                    foreach($directories as $direct) {
                                        $totalSize = 0;
                                        $directory = "./root/" . $direct;
                                        $directorySize = filesize($directory);
                                        $directoryTimeModify = date("F d Y H:i:s.", filemtime($directory));
                                        $directoryCreationDate = date("F d Y", filectime($directory));

                                        $files = array_slice(scandir("./root/" . "/" . $direct), 2);
                                        foreach($files as $pos => $file) {
                                            $rootSize = "./root/" . $direct . "/" . $file;
                                            $showSize = filesize($rootSize);
                                            $totalSize += $showSize;
                                        }
                                        echo "<table  class='table table-striped table-hover table-sm mb-0'>
                                            <tbody>
        
                                            <tr>
                                                <td class='col-3'>$direct</td>
                                                <td class='col-3'>$directoryCreationDate</td>
                                                <td class='col-4'>$directoryTimeModify</td>
                                                <td class='col-3'>" . fileSizeUnit($totalSize) . "</td>
                                            </tr>
                    
        
                                        </tbody>
                                    </table>";

                                    
                                
                                
                                

                        }
                    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>