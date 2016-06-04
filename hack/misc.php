<?php
function conectarBase(){
  $link = new mysqli("127.0.0.1", "root", "root", "hackaton");
   if (!$link)  {
     echo "Error";
      exit();
   }
   return $link;
}

function strAleatorio($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

 ?>
