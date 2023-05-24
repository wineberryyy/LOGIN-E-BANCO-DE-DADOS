<?php

require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validation = $conection->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $validation->bindParam(':username', $username);
    $validation->bindParam(':password', $password);
    $validation->execute();

    $validation->fetch(PDO::FETCH_ASSOC);

    if ($validation) {
        header("Location: site.php");
    } else {
        echo "Senha ou Login incorretos, tente novamente.";
    }
}
