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

    <!-- Bootstrap core CSS
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/js/bootstrap.min.js" rel="script">
    <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">-->

    <!-- Bootstrap 4 alpha CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="../public/css/mystyles.css" rel="stylesheet">
    <link href="../js/carousel.js" rel="stylesheet">
    <link href="../js/navbar.js" rel="stylesheet">



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







<!-- jQuery first, then Tether, then Bootstrap JS. with bootstrap 4 alpha -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>

</body>
</html>

