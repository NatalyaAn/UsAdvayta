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

    <title>Контакты-usa.advayta.org</title>

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
<header>
    <div class="jumbotron jumbotron-fluid bgc card-shadow " >
        <h3 class="text-center"></h3>
        <p class="lead text-center"></p>
        <p class="lead text-center"></p>
    </div>

</header>


<div id="main">
    <!-- #nav bar-->
    <?php
    include("layout/nav.php");
    ?>



    <!-- #content-->
    <div class="d-flex flex-sm-row justify-content-center " >


        <div class="card p-2 card-shadow color-primary-14">
            <div class="card-block ">
                <small class="text">
                    <h4 class="card-title">Наши контакты в США:</h4>
                    <h6 class="card-title">(732)309-5256 - Людмила</h6>
                    <h6 class="card-title">(646)645-1544 - Бадри</h6>
                    <h6 class="card-title"></h6>

                    <p class="card-text"></p>
                    <p class="card-text"></p>
                    <p class="card-text"></p>
                    <p class="card-text font-weight-bold"></p>
                    <footer>
                        <a href="#" class="card-link"></a>
                    </footer>
                </small>
            </div>


            <?php
            $to = "somebody@example.com";
            $subject = "My subject";
            $txt = "Hello world!";
            $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";
           // mail($to,$subject,$txt,$headers);




            // the message
            $msg = "First line of text\nSecond line of text";

            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);

            // send email  function mail(to,subject,message,headers,parameters);
           // mail("someone@example.com","My subject",$msg);
            ?>






        </div><!-- /.card -->
        </div><!-- /.card -->
    <!-- #footer-->
<!--    --><?php
//    include("layout/footer.php");
//    ?>
</div><!-- #main -->


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
