<?php
include 'misc.php';
$conn = conectarBase();
print $_POST["inputSubmit"].'<br>';
$username = $_POST["inputUsuario"];
print $username.'<br>';
$email = $_POST["inputEmail"];
print $email.'<br>';
$password = $_POST["inputPassword"];
print $password.'<br>';
$strAl = strAleatorio(20);
$hash = md5($password.$strAl);
print $hash.'<br>';
print "ok1<br>";
$stmt = $conn->prepare("insert into usuario(username, strAl, hash, email) values(?, ?, ?, ?)");
print "gg<b>";
$stmt->bind_param("ssss", $username, $strAl, $hash, $email);
$stmt->execute();
print '<b>Usuario ingresado.</b>';
?>
