<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/dropzone.css">
    <link rel="stylesheet" href="../css/upload.css">


    <script src="../js/dropzone.js"></script>
    <script src="../js/upload.js"></script>
    <!-- script files -->
</head>

<body>

                <form action="addimages.php" method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone"
                      style="min-height: 350px; border: dotted;">

                    <div class="fallback" style="position: relative">
                        <input name="file" type="file" multiple />
                    </div>

                </form>

            <div class="col-md-8 col-md-offset-2 text-center">
                <button class="btn btn-large" id="submit-all">Upload Photos</button>
            </div>

</body>
</html>