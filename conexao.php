<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "PHP";

try {
    $conection = new PDO("mysql:host=$servername;dbname=$banco",$user, $pass);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $error){
    echo "Seguinte erro na conexão: ". $error->getMessage();
    exit;
}

 