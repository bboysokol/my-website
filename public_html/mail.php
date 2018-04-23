<?php
$wiadomosc=$_POST['tresc'];
$email=$_POST['email'];
$tytul=$_POST['title'];
$headers = "From: ".$email;
if (ereg('^[a-z.-_0-9]{0,255}@[a-z 0-9]{0,255}.[a-z 0-9]{0,255}$', $email)) {
    if (mail("palmssudiio@gmail.com", $tytul, "Treść wiadomości: ".$wiadomosc." \n Od: ".$email, $headers)){
      echo "true";
      }
    else{
      echo "false";
      }
    }
else
{
    echo "zly mail";
}
?>