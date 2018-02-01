<?php
//recibir user y password
$email = $RECUEST['email'];
$contrasenya = $RECUEST['contrasenya'];

$cnx = new PDO("mysql:localhost=localhost;dbname=winman","root","");
//localhost  //root (nombreUser) //"" (password)

$res  = $cnx->query("select * from usuarios where email = '$email' and password = '$contrasenya'");
//Si user y password enviados desde el movil existe $res = 1, sino $res = 0

$datos = array();

foreach ($res as $row){
    $datos []  = $row ; //una fila porque los user no pueden tener la mismos datos
}

echo json_decode($row);