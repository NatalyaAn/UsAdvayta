<!DOCTYPE html>
<html lang="en">

<head>

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

    <title>Учение-usa.advayta.org</title>

    <!-- Bootstrap core CSS -->

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/js/bootstrap.min.js" rel="script">
    <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="../public/css/mystyles.css" rel="stylesheet">
    <link href="../js/carousel.js" rel="stylesheet">

    <style>
        body{
            /*perspective: 1200px;*/
        }
        .img-catoon {
            display: block;
            margin: 50px auto;
            height: 150px;
            border: 2px solid lime;
            animation: ddd 15s linear infinite;
        }
        @keyframes  ddd {
            0%{transform: rotateY(0deg);}
            100%{transform: rotateY(360deg);}
        }
    </style>

</head>

<body >

<!-- Navbar -->

<?php
include("layout/nav.php");
?>






<div class="  container ">
    <img class="img-catoon" src="../public/images/Datta.png" >

    <h4 class="my-4 text-center">Три драгоценности</h4>

    <!-- row of 3 cards -->
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 card-shadow ">
                <h4 class="card-header text-center ">Дхарма</h4>
                <a href="#"><img class="card-img-top " src="../public/images/om.jpg" alt=""></a>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>

                </div>
                <div class="card-footer">
                    <a href="https://youtu.be/N6ENnaRotmo" class="card-link">Details...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 card-shadow">
                <h4 class="card-header text-center ">Гуру</h4>
                <a href="#"><img class="card-img-top hm-zoom"  src="../public/images/Datta.png" alt=""></a>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>

                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Details...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 card-shadow">
                <h4 class="card-header text-center ">Сангха</h4>
                <a href="#"><img class="card-img-top" src="../public/images/brand.png" alt=""></a>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>

                </div>
                <div class="card-footer">
                    <a href="#" class=" card-link">Learn More</a>
                </div>
            </div>
        </div>
    </div><!-- /.row -->

</div><!-- /.container -->

<div class="jumbotron jumbotron-fluid jumbotron-background">

</div>
<!-- Carousel -->
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-4 active">
                <img class="img-fluid mx-auto d-block" src="../public/images/Datta.png" alt="slide 1">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="../public/images/brand.png" alt="slide 2">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="../public/images/Datta.png" alt="slide 3">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="../public/images/brand.png" alt="slide 4">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="../public/images/Datta.png" alt="slide 5">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="../public/images/brand.png" alt="slide 6">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="../public/images/Datta.png" alt="slide 7">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="../public/images/brand.png" alt="slide 7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- /.carousel -->



<!-- #footer -->
<?php
include("layout/footer.php");
?>


<!-- Bootstrap core JavaScript !!!important order of striptes -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>









</body>

</html>
