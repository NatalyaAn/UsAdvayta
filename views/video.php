<html>
<head>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $(".video").click(function () {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-video"),
                    videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function () {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        });
    </script>
-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons https://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
    <link rel="manifest" href="../favicons/manifest.json">
    <meta name="theme-color" content="#bdb95e">

    <title>Видео/Галлерея-usa.advayta.org</title>

    <!-- Bootstrap core CSS -->

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/js/bootstrap.min.js" rel="script">
    <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="../public/css/mystyles.css" rel="stylesheet">




</head>
<body>
<!-- Navbar -->
<?php
include("layout/nav.php");
?>


<div class="container-fluid mt-5">

    <div class=" row  ">

    <div class="col-lg-3 mb-4">
        <div class="card h-40 card-shadow ">
            <h4 class="card-header text-center ">Yoga-slet 2017</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UW04Vf1QtMA" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card h-40 card-shadow">
            <h4 class="card-header text-center ">Hiking</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3WgaHe0uC78" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>
</div>








<!-- Bootstrap core JavaScript !!!important order of striptes -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

