<?php

use php\User;

require_once "../User.php";

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);

    $user->setUserName($username);
    $user->setPassword($password);
    $user->setEmail($email);

    echo "Data processed successfully!";
}