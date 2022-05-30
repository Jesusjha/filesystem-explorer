
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

                        </div>
                        <?php
                                include_once ('./print-file.php');
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