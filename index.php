<?php
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Possible Child Photo</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main.js">
    <link rel="icon" type="image/png" href="favicon.ico" />
</head>
<body>
<script>
    function dropHandler() {
        var back = ["#aa5555","#55aa55","#5555aa"];
        var rand = back[Math.floor(Math.random() * back.length)];
        console.log('загрузил', rand)
        $('.result.block').css('background-color', rand);
    }
</script>

<div class="container">
    <p class="clearfix">&nbsp;</p>
    <center>
        <img src="download.png" alt="" style="width: 10em">
        <p class="clearfix">&nbsp;</p>
        <h2 class="">Get Your Possible Child Photo</h2>
    </center>
    <p class="clearfix">&nbsp;</p>
    <div class="row">
        <div class="block col col-md-3 col-sm-12 col-xs-12">
            <form id="dropzone1" class="dropzone" action="post.php" enctype="multipart/form-data" method="post" ondrop="dropHandler()">
                <div class="dz-message" data-dz-message><span>Drag here parent's photo</span></div>
            </form>
        </div>
        <div class="block col col-md-3 col-sm-12 col-xs-12">
            <form id="dropzone2" class="dropzone" action="post.php" enctype="multipart/form-data" method="post" ondrop="dropHandler()">
                <div class="dz-message" data-dz-message><span>Drag here parent's photo</span></div>
            </form>
        </div>
        <div class="result block col col-md-3 col-sm-12 col-xs-12">
            <p class="clearfix"></p>
            <div class="dz-message" data-dz-message><span>Get the Result</span></div>
        </div>
    </div>
</div>

</body>
</html>
