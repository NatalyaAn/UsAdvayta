<?php
if(isset($_POST['submit'])){

    $to = 'nata.an@gmail.com, lvsharova@yahoo.com'; //'nata.an@gmail.com';
    $subject = 'Contact mail from website';
    $msg = 'Name: ' .$_POST['name'] ."\n"
        .'Email: ' .$_POST['email'] ."\n"
        .'Comment: ' .$_POST['comment'] ;

    mail($to, $subject, $msg);

    header('location:contactUsThanks.php');
}else {
   header('location: errorPage.php');

    exit(0);
}



?>