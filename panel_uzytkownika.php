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
        <h1 class="text" id="text_wypo" onclick="main()">Panel Użytkownika!</h1>
        
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
        <div class="account_info">
            <h1 class="text">Zmień dane Logowania: </h1><p class="smalltext hyperlink" onclick="show_login_change()">Zmień login</p>
            <div class="hidden_login">
                
                <form action="panel_update.php" method="post">
                    <input type="text" class="input" name="old_login" placeholder="Stary Loign" required>
                    <input type="text" class="input" name="new_login" placeholder="Nowy Loign" required>
                    <input type="submit" value="Zmień login" class="button" required>
                </form>
                <div class="x close_login" onclick="login_close()"><img src="img/close.jpg" class="close_img"></div>
            
            </div>
            
            <p class="smalltext hyperlink" onclick="show_pass_change()">Zmień hasło</p>
            <div class="hidden_pass">
                
                <form action="panel_update.php" method="post">
                    <input type="text" class="input" name="old_pass" placeholder="Stare Hasło" required>
                    <input type="text" class="input" name="new_pass"placeholder="Nowe hasło" required>
                    <input type="submit" value="Zmień hasło" class="button">
                </form>
                <div class="x close_pass" onclick="pass_close()"><img src="img/close.jpg" class="close_img"></div>
            
            </div>
        </div>
        
        <div class="rental_info">
            <!-- <div class="rental_data">
                <?php
                    // $log = "<p id='log' class='hidden'></p>";
                    // $pas = "<p id='pas' class='hidden'></p>";

                    // $sql = "SELECT login, haslo, mail FROM konta where login='$log' OR mail='$log'";
                    // $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    //   while($row = $result->fetch_assoc()) {
                    //     if($row['login'] == $log || $row['mail'] == $log && $row['haslo']==$pas){
                    //         echo "ok";
                    //     }else{
                    //         echo "nie ok";
                    //     }
                    //   }
                    // }
                ?>
            </div> -->
            
            <div class="rental_show">

                    <input type="text" class="input" id="login" placeholder="Login lub Mail">
                    <input type="password" class="input" id="pass" placeholder="Hasło">
                    <input type="submit" class="button" id="button_panel_uztk" value="Pokaż wypożyczenia" onclick="save_data()">

            </div>
            
        </div>
    </div>
</body>
<script src="index.js"></script>
</html>