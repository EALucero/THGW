<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $ev1=$_POST["T1"];
    $ev2=$_POST["T2"];
    $ev3=$_POST["T3"];
    $sv1=$_POST["T4"];
    $sv2=$_POST["T5"];
    $sv3=$_POST["T6"];
    $av1=$_POST["T7"];
    $av2=$_POST["T8"];
    $av3=$_POST["T9"];
    $rv1=$_POST["T10"];
    $rv2=$_POST["T11"];
    $rv3=$_POST["T12"];

    $eco=$ev1+$ev2+$ev3;
    $soc=$sv1+$sv2+$sv3;
    $amb=$av1+$av2+$av3;
    $rad=$rv1+$rv2+$rv3;
    $value=$eco.$soc.$amb.$rad;

    if ($eco==5) {
      if ($soc==7) {
        if ($amb==5) {
            if ($rad==7) {
            }header ("Location: http://THGW-master/alemania.html");
            }
          }
        }

    elseif ($eco==5) {
      if ($soc==6) {
          if ($amb==0) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/australia.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==7) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/austria.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==3) {
          if ($amb==2) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/barein.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==4) {
              if ($rad==6) {
              }header ("Location: http://THGW-master/belgica.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==1) {
          if ($amb==4) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/brasil.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==1) {
          if ($amb==4) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/brunei.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==1) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/canada.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==7) {
          if ($amb==0) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/catar.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==6) {
          if ($amb==7) {
              if ($eco==3) {
              }header ("Location: http://THGW-master/corea-sur.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==5) {
              if ($rad==6) {
              }header ("Location: http://THGW-master/dinamarca.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==5) {
          if ($amb==0) {
              if ($rad==1) {
              }header ("Location: http://THGW-master/emiratos-arabes.html");
              }
            }
          }

    elseif ($eco==4) {
      if ($soc==6) {
          if ($amb==7) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/eslovaquia.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==5) {
              if ($eco==3) {
              }header ("Location: http://THGW-master/eslovenia.html");
              }
            }
          }

    elseif ($eco==1) {
      if ($soc==7) {
          if ($amb==6) {
              if ($rad==0) {
              }header ("Location: http://THGW-master/espana.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==6) {
          if ($amb==4) {
              if ($rad==2) {
              }header ("Location: http://THGW-master/estados-unidos.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==1) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/finlandia.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==4) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/francia.html");
              }
            }
          }

    elseif ($eco==4) {
      if ($soc==4) {
          if ($amb==4) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/indonesia.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==6) {
          if ($amb==4) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/irlanda.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==2) {
              if ($rad==6) {
              }header ("Location: http://THGW-master/israel.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==6) {
          if ($amb==2) {
              if ($rad==2) {
              }header ("Location: http://THGW-master/italia.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==6) {
          if ($amb==7) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/japon.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==7) {
          if ($amb==0) {
              if ($rad==1) {
              }header ("Location: http://THGW-master/kuwait.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==7) {
          if ($amb==7) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/liechtenstein.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==7) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/luxemburgo.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==3) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/noruega.html");;
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==6) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/nueva-zelanda.html");
              }
            }
          }

    if ($eco==5) {
      if ($soc==3) {
          if ($amb==5) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/paises-bajos.html");
              }
            }
          }

    elseif ($eco==6) {
      if ($soc==7) {
          if ($amb==4) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/panama.html");
              }
            }
          }

    elseif ($eco==4) {
      if ($soc==7) {
          if ($amb==5) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/polonia.html");
              }
            }
          }

    elseif ($eco==0) {
      if ($soc==7) {
          if ($amb==4) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/portugal.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==4) {
              if ($rad==2) {
              }header ("Location: http://THGW-master/reino-unido.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==6) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/republica-checa.html");
              }
            }
          }

    elseif ($eco==4) {
      if ($soc==7) {
          if ($amb==1) {
              if ($rad==6) {
              }header ("Location: http://THGW-master/rusia.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==6) {
          if ($amb==6) {
              if ($rad==2) {
              }header ("Location: http://THGW-master/san-marino.html");
              }
            }
          }

    elseif ($eco==7) {
      if ($soc==3) {
          if ($amb==4) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/singapur.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==3) {
          if ($amb==1) {
              if ($rad==7) {
              }header ("Location: http://THGW-master/suecia.html");
              }
            }
          }

    elseif ($eco==5) {
      if ($soc==7) {
          if ($amb==6) {
              if ($rad==2) {
              }header ("Location: http://THGW-master/suiza.html");
              }
            }
          }

    elseif ($eco==2) {
      if ($soc==7) {
          if ($amb==6) {
              if ($rad==3) {
              }header ("Location: http://THGW-master/turquia.html");
              }
            }
          }

    elseif ($value>=0000 && $value<=7777) {
      }echo "n°: ".$value."<br>";
      echo "Lo siento, la combinación elegida no está disponible.
      Redireccionando...";
      echo "<script> setTimeout('history.back()',5000); </script>";
             ?>

  </body>
</html>
