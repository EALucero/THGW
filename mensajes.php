<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $name=$_POST["name"];
    $from=$_POST["email"];
    $message=$_POST["message"];
    $to="ea.lucero@outlook.com.ar";
    $headers="From:".$from;
    mail($to,$name,$message,$headers);
    echo "The email message was sent.";

     ?>

  </body>
</html>
