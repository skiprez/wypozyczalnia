<?php

    require "base.php";

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];

    $sql = "INSERT INTO `konta`(`login`, `haslo`, `mail`) VALUES ('$login','$pass','$mail')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    }
    $conn->close();
?>