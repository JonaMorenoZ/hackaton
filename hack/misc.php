<?php
function conectarBase(){
  $link = new mysqli("127.0.0.1", "root", "root", "hackaton");
   if (!$link)  {
     echo "Error";
      exit();
   }
   return $link;
}

function existeUsuario($username){
  $conn = conectarBase();
  $stmt = "select * from usuario where username = lower('".$username."') limit 1";
  $result = $conn->query($stmt);
  if($result->num_rows > 0) {
    return 1;
  }
  return 0;
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
