<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Wypożyczalnia Rejestracja</title>
</head>
<body>
    <div class="header">
        <p class="spacer"></p>

        <img src="img/bobolux_logo.jpg" id="bobolux_logo" onclick="main()">
        <h1 class="text" id="text_wypo" onclick="main()">Bobolux Rent a Car Oferuje bogatą gamę samochodów do wynajęcia!</h1>
        
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

    <div class="logcon">

        <button class="button" id="back_button_reg" onclick="index()">&#10094; Powrót</button>
     
        <h1 class="text">Zarejestruj się!</h1>
     
        <form action="reg.php" method="post">
            <input type="text" name="login" class="input" placeholder="Login" required>
            <input type="password" name="pass" class="input" placeholder="Hasło" required>
            <input type="mail" name="mail" class="input" placeholder="Mail" required>
            <input type="submit" value="Zarejestruj" class="button" id="button_register">
        </form>
    </div>
</body>
<script src="index.js"></script>
</html>