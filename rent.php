<?php
    require "base.php";

    // FIRST $SQL
    $car_id = $_POST['id'];
    $price = $_POST['price'];
    $days = $_POST['days'];
    
    // Second SQL & Date Format
    $mail = $_POST['mail'];
    $format = " days";
    $date = $days.$format;
    $current_date = date_create(date('Y-m-d'));
    $after_date = date_add($current_date, date_interval_create_from_date_string("$date"));
    $new_date = $after_date->format('Y-m-d');

    // $sql = "SELECT `id` FROM `klienci` WHERE mail=$mail";
    $sql = "INSERT INTO `dane_wypozyczen`(`id_samochodu`, `cena_doba`, `ilosc_dob`) VALUES ('$car_id','$price','$days')";
    // $sql = "INSERT INTO `wypozyczenia`(`data_wyp`, `data_zwr`, `id_klienta`, `id_pracownika`) VALUES ('$current_date','2023-12-12','$id','1')";
    
    if ($conn->multi_query($sql) === TRUE) {
        echo "git";
    } else {
        echo "nie git";
    }
    // $id = $row['id'];

    ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
    <title>Wypożyczalnia samochodów</title>
</head>
<body>
    <h1 class="text">WORK IN PROGRESS</h1>
</body>
</html>