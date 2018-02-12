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

    <style>
        body{
            /*perspective: 1200px;*/
        }
        .img-catoon {
            display: block;
            margin: 50px auto;
            height: 150px;
            /*border: 2px solid lime;*/
            animation: ddd 25s linear infinite;
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

    <!-- spining om -->
    <h2 class="my-4 text-center"></h2>
    <img class="img-catoon" src="../public/images/om3.jpg" >



    <!-- row of 3 cards -->

    <div class="card-deck ">
        <div class="card card-shadow">
            <h4 class="card-header text-center ">Дхарма</h4>
            <img class="card-img-top " src="../public/images/datta1.jpg" style="width: 100%" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Учение</h4>
                <p class="card-text"></p>
                <a href="#dharma"  class="link">Подробнее...</a>
            </div>
        </div>
        <div class="card card-shadow">
            <h4 class="card-header text-center ">Гуру</h4>
            <img class="card-img-top" src="../public/images/Guru.jpg" style="width: 100%" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Учитель</h4>
                <p class="card-text">Для духовных искателей самая большая драгоценность - это Учитель.
                    Тот, кто может донести непостижимое, божественное Учение через словесную передачу
                    (книги, лекции,словесные инструкции), символическую (образы и символы)
                    или внемысленную, предназначенную для сверхсознания. </p>
<!--                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                <a href="#guru"  class="link">Подробнее...</a>
            </div>
        </div>
        <div class="card card-shadow">
            <h4 class="card-header text-center ">Сангха</h4>
            <img class="card-img-top" src="../public/images/sangha1.jpg" style="width: 100%" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Община</h4>
                <p class="card-text"></p>
                <a href="#sangha"  class="link">Подробнее...</a>
            </div>
        </div>
    </div>




</div><!-- /.container -->

<!--<div class="jumbotron jumbotron-fluid jumbotron-background">-->

</div>
<!-- Carousel
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
</div>-->
<!-- /.carousel -->

<div class="jumbotron mt-4 jumbotron-fluid jumbotron-background card-shadow">
    <h2 class="text-center">Три драгоценности</h2>
    <p class="lead text-center"></p>
</div>
<a id="dharma"  ></a>

<div  class="container mt-5">

    <h4 style="padding-top: 100px; margin-top: -100px"  class="text-center">Учение</h4>
    Свами Вишнудевананда Гири Джи Махарадж
    Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
    Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
    Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
    Он является автором более 90 книг, наиболее известные из которых:
    «Сияние драгоценных тайн Лайя-йоги» том 1,2,
    «Кодекс Мастера»
    «Освобождающий нектар драгоценных наставлений»
    «Лайя-йога в традиции сиддхов»
    «Песни Пробужденного»
    «Сердце йогической садханы»
    и многих других
    множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».
    Свами Вишнудевананда Гири Джи Махарадж
    Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
    Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
    Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
    Он является автором более 90 книг, наиболее известные из которых:
    «Сияние драгоценных тайн Лайя-йоги» том 1,2,
    «Кодекс Мастера»
    «Освобождающий нектар драгоценных наставлений»
    «Лайя-йога в традиции сиддхов»
    «Песни Пробужденного»
    «Сердце йогической садханы»
    и многих других
    множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».

</div>
    <div  class="container mt-5">
<!--        <a name="guru"></a>-->
        <h4 id="guru" style="padding-top: 100px; margin-top: -100px" class="text-center">Учитель</h4>
        Свами Вишнудевананда Гири Джи Махарадж
        Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
        Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
        Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
        Он является автором более 90 книг, наиболее известные из которых:
        «Сияние драгоценных тайн Лайя-йоги» том 1,2,
        «Кодекс Мастера»
        «Освобождающий нектар драгоценных наставлений»
        «Лайя-йога в традиции сиддхов»
        «Песни Пробужденного»
        «Сердце йогической садханы»
        и многих других
        множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».
        Свами Вишнудевананда Гири Джи Махарадж
        Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
        Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
        Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
        Он является автором более 90 книг, наиболее известные из которых:
        «Сияние драгоценных тайн Лайя-йоги» том 1,2,
        «Кодекс Мастера»
        «Освобождающий нектар драгоценных наставлений»
        «Лайя-йога в традиции сиддхов»
        «Песни Пробужденного»
        «Сердце йогической садханы»
        и многих других
        множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».

    </div>
<div  class="container mt-5 mb-5">
<!--    <a name="sangha"></a>-->
    <h4 id="sangha" style="padding-top: 100px; margin-top: -100px" class="text-center">Община</h4>
    Свами Вишнудевананда Гири Джи Махарадж
    Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
    Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
    Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
    Он является автором более 90 книг, наиболее известные из которых:
    «Сияние драгоценных тайн Лайя-йоги» том 1,2,
    «Кодекс Мастера»
    «Освобождающий нектар драгоценных наставлений»
    «Лайя-йога в традиции сиддхов»
    «Песни Пробужденного»
    «Сердце йогической садханы»
    и многих других
    множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».

    Свами Вишнудевананда Гири Джи Махарадж
    Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
    Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
    Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
    Он является автором более 90 книг, наиболее известные из которых:
    «Сияние драгоценных тайн Лайя-йоги» том 1,2,
    «Кодекс Мастера»
    «Освобождающий нектар драгоценных наставлений»
    «Лайя-йога в традиции сиддхов»
    «Песни Пробужденного»
    «Сердце йогической садханы»
    и многих других
    множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».
    Свами Вишнудевананда Гири Джи Махарадж
    Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
    Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
    Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
    Он является автором более 90 книг, наиболее известные из которых:
    «Сияние драгоценных тайн Лайя-йоги» том 1,2,
    «Кодекс Мастера»
    «Освобождающий нектар драгоценных наставлений»
    «Лайя-йога в традиции сиддхов»
    «Песни Пробужденного»
    «Сердце йогической садханы»
    и многих других
    множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».
    Свами Вишнудевананда Гири Джи Махарадж
    Свами Вишнудевананда Гири (Свами Вишну Дэв) русскоязычный дипломированный Мастер йоги, с 20-летним стажем духовной практики, обучавшийся в молодости более чем у десяти учителей.
    Является основателем единственного в России высшего учебного заведения йоги  – Монастыря-академии йоги «Собрание тайн» (Адвайта-йога ашрама «Собрание Тайн») с уникальной системой обучения и практики, а также  Всемирной общины Лайя-йоги, имеющей последователей в странах СНГ и за рубежом.
    Просветленный Мастер Свами Вишнудевананда Гири (Свами Вишну Дэв) длительное время (около трех лет) провел в ритритном отшельничестве.
    Он является автором более 90 книг, наиболее известные из которых:
    «Сияние драгоценных тайн Лайя-йоги» том 1,2,
    «Кодекс Мастера»
    «Освобождающий нектар драгоценных наставлений»
    «Лайя-йога в традиции сиддхов»
    «Песни Пробужденного»
    «Сердце йогической садханы»
    и многих других
    множества статей, очерков по философии теории и практике йоги и тантры в традиции «Сахаджаяны».
</div>
<!-- #footer-->
<?php
include("layout/footer.php");
?>


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
