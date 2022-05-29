
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
    <div class="col-12 col-lg-9">
        <div class="card">
            <div class="card-body">

                <h5>Folder: 
                <?php
                    echo $folderName = $_POST['folder'];
                ?>
                </h5>
                <div id="folderContainer" class="row mt-3">
                    <div class="col-12 col-lg-4">
                        <div class="card shadow-none border radius-15">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="font-30 text-primary"><i class="bx bxs-folder"></i>
                                    </div>
                                    <div class="user-groups ms-auto">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="35"
                                            height="35" class="rounded-circle" alt="">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35"
                                            height="35" class="rounded-circle" alt="">
                                    </div>
                                    <div class="user-plus">+</div>
                                </div>
                                <h6 class="mb-0 text-primary">Analytics</h6>
                                <small>15 files</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card shadow-none border radius-15">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="font-30 text-primary"><i class="bx bxs-folder"></i>
                                    </div>
                                    <div class="user-groups ms-auto">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="35"
                                            height="35" class="rounded-circle" alt="">
                                    </div>
                                </div>
                                <h6 class="mb-0 text-primary">Assets</h6>
                                <small>345 files</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card shadow-none border radius-15">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="font-30 text-primary"><i class="bx bxs-folder"></i>
                                    </div>
                                    <div class="user-groups ms-auto">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35"
                                            height="35" class="rounded-circle" alt="">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="35"
                                            height="35" class="rounded-circle" alt="">
                                    </div>
                                </div>
                                <h6 class="mb-0 text-primary">Marketing</h6>
                                <small>143 files</small>
                            </div>
                        </div>
                        <?php
                                
                            ?>
                        <a href="./index.php"><button type="button" class="btn btn-info">Back</button></a>
                        <form method="POST" action="print-file.php" enctype="multipart/form-data">
                        <input type="file" name="fileInFolder">
                        <input type="hidden" name="folder" value="<?= $folderName ?>">    

                                        <button type="submit">Add file</button>
                        </form>
                    </div>
                </div>
               
</body>

</html>