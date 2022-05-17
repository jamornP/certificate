<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pages</title>
    <link rel="stylesheet" href="../theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../vendor/enyo/dropzone/dist/min/dropzone.min.css">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-dark bg-info ">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Upload File</span>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h3>Upload File</h3>
                    </div>
                    <div class="card-body">
                        <form action="uploader.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">ชื่อโครงการ</label>
                                <input type="text" name="project" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Upload เฉพาะไฟล์ pdf</label>
                                <input class="form-control" type="file" id="formFileMultiple" name="file[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <!-- <script src="../theme/js/script.js"></script> -->

</body>

</html>