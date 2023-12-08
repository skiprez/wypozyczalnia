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
        <h1 class="text" id="text_wypo" onclick="main()">Bobolux Rent a Car Oferuje bogatą gamę samochodów do wynajęcia!</h1>
        
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
        
        <button class="button" id="back_button_off" onclick="main()">&#10094; Powrót</button>

        <div class="box" id="box_off">
            <img src="img/astra.jpg" class="img" id="img_off">
        </div>
        <div class="off_info">
            <h1 class="text">Dane na temat auta:</h1>
            <p>
                <ul class="offsmall_text">
                <?php    
                    $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li>Marka samochodu: "." ".$row["marka"]."</li>";
                            echo "<li>Model samochodu: "." ".$row["model"]."</li>";
                            echo "<li>Data produkcji: "." ".$row["data_prod"]."</li>";
                            echo "<li>Dostępność: "." ".$row["dostepnosc"]."</li>";
                            echo "<li>Cena za 24h: 200zł"."</li>";
                        }
                    }
                ?>
                </ul>
            </p>
            <div class="date_con">
                <form action="rent.php" method="post">
                    
                    <input type="text" name="id" value="1" hidden>
                    <input type="text" name="price" value="200" hidden>

                    <h1 class="smalltext">Podaj ilość dni wypożyczenia: </h1>
                    <input type="number" name="days" class="input rent_inp" required max="7">
                    <h1 class="smalltext">Podaj mail na który mamy wysłać</h1>
                    <h1 class="smalltext" style="margin-top: -16px;">informacje dotyczące wypożyczenia: </h1>
                    <input type="text" name="mail" class="input rent_inp" placeholder="Email" required>

                    <input type="submit" value="Zamów" class="button" id="button_date" style="margin-left: 30px;">
                
                </form>
            </div>
        </div>
    </div>
</body>
<script src="index.js" defer></script>
</html>