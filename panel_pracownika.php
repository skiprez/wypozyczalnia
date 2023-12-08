<?php
    require "base.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Wypożyczalnia smaochodów</title>
</head>
<body>
    
    <div class="header">
        <p class="spacer"></p>

        <img src="img/bobolux_logo.jpg" id="bobolux_logo" onclick="main()">
        <h1 class="text" id="text_wypo" onclick="main()">Panel Pracownika!</h1>
        
        <!-- Był button i buttona nie ma -->
        <!-- <div class="button info" onclick="link()">
            <h6>Informacje</h6> 
            <img src="img/info.jpg" id="imginfo"> 
        </div> -->

        <div class="nav_bar" onclick="nav_show()"><img src="img/hamburger.jpg" class="hamburger" id="nav"></div>
        <div class="nav_box">
            <div class="close" onclick="nav_close()"><img src="img/close.jpg" class="close_img"></div>
            <h1 class="text links" id="text_1" onclick="main()">Strona Główna</h1>
            <h1 class="text links" id="text_2" onclick="info()">O nas</h1>
            <h1 class="text links" id="text_3" onclick="panel_logowanie()">Panel użytkownika</h1>
        </div>

        <div class="pin" onclick="pin()">
            <img src="img/pin.jpg" id="imgpin"> 
            <div class="display">
                <p class="smalltext2">Odwiedź nas!</p>
                <p class="smalltextextra">53.9525504, 16.5896424</p>
            </div>
        </div>

        <div class="contact" onclick="contact()">
            <img src="img/contact.jpg" id="imgcontact">
            <div class="display">
                <p class="smalltext2">Kontakt!</p>
                <p class="smalltextextra">+48 675 054 473</p>
                <p class="smalltextextra">bobolux-cars@mail.com</p>
            </div>
        </div>
        
    </div>

    <div class="main">
      
    </div>
</body>
<script src="index.js" defer></script>
</html>