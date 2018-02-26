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

<body class="cardBackcolor" >

<!-- Navbar -->

<?php
include("layout/nav.php");
?>






<div  class="  container-fluid mx-5 mt-1 px-5">
    <a id="top"  ></a>
    <!-- spining om -->
    <h2 class="my-4 text-center"></h2>
    <img class="img-catoon" src="../public/images/omTrans.png" >



    <!-- row of 3 cards -->

    <div class="card-deck ">
        <div class="card card-shadow1 cardBackcolor borderColor border-0" style="">
            <h4 class="card-header text-center bgc">Дхарма</h4>
            <img class="card-img-top " src="../public/images/datta1.jpg" style="width: 100%" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title text-center">Учение</h4> <hr/>
                <blockquote class="card-blockquote mx-5 color-black">
                    <p class="card-text ">О Шива! Что есть твоя истинняй природа? </p>
                    <p class="card-text ">Что есть эта чудесная вселенная? </p>
                    <p class="card-text ">Что есть исток? </p>
                    <p class="card-text ">Что есть центр колеса жизни?</p>
                    <p class="card-text ">Что есть то бесформенное, что пронизывает все формы?</p>
                    <p class="card-text ">Как можем мы слиться с тем, что вне пространства и времени, вне имен и слов? </p>
                    <p class="card-text "></p>
                    <footer class="text-right ">
                        <p><small class="text-muted"> <cite title="Source Title">"Вигьяна Бхайрава тантра"</cite></small></p>
                        <a href="#dharma"  class="link color-primary-3 text-right">Подробнее...</a>

                    </footer>
                </blockquote>

            </div>
        </div>
        <div class="card card-shadow1 cardBackcolor borderColor border-0">
            <h4 class="card-header text-center bgc">Гуру</h4>
            <img class="card-img-top" src="../public/images/guru.jpg" style="width: 100%" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title text-center">Учитель</h4><hr/>

                <blockquote class="card-blockquote mx-5 color-black">
                    <p class="card-text ">Нет ничего выше, чем Мастер, </p>
                    <p class="card-text ">Нет ничего больше, чем Мастер, </p>
                    <p class="card-text ">Нет ничего важнее, чем Мастер, </p>
                    <p class="card-text ">Нет ничего загадочнее, чем Мастер... </p>
                    <footer class="text-right ">
                        <p><small class="text-muted">Горакшанатх <cite title="Source Title">"Сиддха-сиддханта-паддхати"</cite></small></p>
                        <a href="#guru"  class="link color-primary-3 text-right">Подробнее...</a>

                    </footer>
                </blockquote>


                <!--    <p class="card-text">Нет ничего загадочнее, чем Мастер. <i class="fa fa-quote-right"></i></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->

            </div>
        </div>
        <div class="card card-shadow1 cardBackcolor borderColor border-0">
            <h4 class="card-header text-center bgc">Сангха</h4>
            <img class="card-img-top" src="../public/images/sangha1.jpg" style="width: 100%" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Община</h4><hr/>
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

<div class="jumbotron mt-4 jumbotron-fluid jumbotronGoldBackcolor card-shadow">
    <h3 class="text-center">Три драгоценности</h3>
    <p class="lead text-center"></p>
</div>
<a id="dharma"  ></a>
<!-- container Учение-->
<div  class="container  mt-5" ">

    <h4 style="padding-top: 100px; margin-top: -100px"  class="text-center">Учение !!!написать</h4>
    <p>
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
    </p>

    <p>
        <a href="#top" class="link" ><i class="fa fa-level-up fa-1x mr-2"></i>Наверх...</a>
    </p>
<hr/>
<p class="color-primary-11">/</p> <!-- previous link doesn't work without this I don't know why-->
</div><!-- /.container Учение-->

<!-- container Гуру-->
    <div  class="container mt-5">

        <h4 id="guru" style="padding-top: 100px; margin-top: -100px" class="text-center">Учитель - Свами Вишнудевананда Гири</h4>

        <p>Это называется Гуру-падашрая. Гуру - это духовный учитель, который учит Брахма-джняне - мудрости Абсолюта на основе писаний и личного опыта, учит пути мокши;
            "пада" - это его стопы,  то есть его проявление в этом мире; "ашрая" - это прибежище.</p>
        <p>
        В нашей традиции, кроме прибежища в учении Адвайты и Ануттара-тантры, ученику следует принять прибежище в наставнике по священным текстам - шикша-гуру
    (если, конечно, он есть), в коренном гуру ( мула-гуру), он же может быть и дикша-гуру, в парам-гуру, в гуру-ачарье - Шри Шанкарачарье, и в ади-гуру - изначальном учителе всех учителей - авадхуте Даттатрейе.
        Все это и есть гуру-шишья парампара.
        </p>
        <p>
        К духовному учителю вы должны приходить только когда созреете, и только как ученик, или как искренний искатель, как душа, которая ищет путь к Просветлению, свободе и свету.
        </p>
        <p>
        Вы не можете придти к нему из любопытства, или как бизнесмен, политик, ученый, писатель, специалист, художник, или чей-то друг, муж или жена и т. д. Это все бесполезно.

        Если вы придете так, то ваш ум обязательно захочет сделать из гуру кого-то вроде смеси из философа, спирита-медиума, целителя-экстрасенса, семейного психолога, участкового врача,
            "придворного мага" и советника по бизнесу в одном лице. Но это невозможно.
        </p>
        <p>
        Гуру - это только гуру. Гуру - это всегда только гуру.
        Он не может быть кем-либо еще для вас.
        Он тот, кто указывает вам на конечную истину, когда вы достаточно готовы, чтобы спрашивать о ней. Тот, кто указывает на предельный смысл бытия внутри вас самих и указывает путь к нему, когда вы созрели.
        Так действует гуру-таттва.
        </p>
        У него нет иных дел и интересов в этом мире.
        Вы можете быть готовым стать учеником какого-либо гуру, или не быть готовым, но это ничего не меняет в сути отношений гуру-ученик, которые существуют столько же, сколько сама вселенная.
        <p>
        В конечном счете, гуру указывает вам на собственного внутреннего сад-гуру, на ваш Атман, который окутан энергией неведения из пяти оболочек (панча-коша) и который вам предстоит открыть усердно
            упражняясь в шраване, манане, нидидхъясане и, которые рано или поздно приведут к вичаре (исследование), вивеке(различение) и вайрагье(отрешенность).

        Тогда васаны будут растворены, ум растворен в присутствии Брахмана, и придет Просветление (бодха), а затем Освобождение (мокша).
        </p>
        <p class="text-right"><small class="text-muted "> <cite title="Source Title">Из сатсанга Гуру Свами Вишнудевананда Гири</cite></small></p>

        <p>
            <a href="http://www.advayta.org/257" target="_blank" class="link">Более подробная информация...</a>
        </p>

        <p>
            <a href="#top"  class="link"><i class="fa fa-level-up fa-1x mr-2"></i>Наверх...</a>
        </p>
<hr/>
        <p class="color-primary-11">/</p> <!-- previous link doesn't work without this I don't know why-->


</div><!-- /.container Гуру-->
<div class="">




</div>


<!-- container Община-->
<div  class="container mt-5 mb-5">
<!--    <a name="sangha"></a>-->
    <h4 id="sangha" style="padding-top: 100px; margin-top: -100px" class="text-center">Община !!!написать</h4>
    <p> Свами Вишнудевананда Гири Джи Махарадж
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
    </p>
    <p>
    <a href="#top"  class="link"><i class="fa fa-level-up fa-1x mr-2"></i>Наверх...</a>
    </p>
</div><!-- /.container Община-->


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
