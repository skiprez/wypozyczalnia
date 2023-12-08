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
        
        <p class="line_wypo"></p>
        <h1 class="text" id="main_text">Nasza baza samochodów: </h1>
        
        <a class="arrow l" id="prevBtn" onclick="currentSlide(-1)">&#10094;</a>
        
        <div class="bigbox">
            <div class="box" id="image_1" value="1">
                <img src="img/astra.jpg" class="img">
                <p class="smalltext">
                    <?php
                        
                        $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                echo "Model samochodu: "." ".$row["model"]."<br//>";
                                echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                            }
                        }
                        ?>
                    </p>
                
                    <button class="button" id="button_wypo" onclick="astra()">Sprawdź ofertę</button>
            </div>
            
            <div class="box" id="image_2" value="2">
            <img src="img/clk.jpg" class="img">
                <p class="smalltext">
                    <?php
                        
                        $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=2";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                echo "Model samochodu: "." ".$row["model"]."<br//>";
                                echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                            }
                        }
                    ?>
                </p>

                    <button class="button" id="button_wypo" onclick="clk()">Sprawdź ofertę</button>
                </div>
                
                <div class="box" id="image_3" value="3">
                    <img src="img/a4.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=3";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="a4()">Sprawdź ofertę</button>
                </div>
            </div>
            
            <div class="bigbox">
                <div class="box" id="image_2" value="2">
                    <img src="img/clk.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=2";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="clk()">Sprawdź ofertę</button>
                </div>
            
                <div class="box" id="image_3" value="3">
                    <img src="img/a4.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=3";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="a4()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_4" value="4">
                    <img src="img/civic.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=4";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="civic()">Sprawdź ofertę</button>
                </div>
            </div>

            <div class="bigbox">
                <div class="box" id="image_3" value="3">
                    <img src="img/a4.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=3";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="a4()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_4" value="4">
                    <img src="img/civic.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=4";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="civic()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_5" value="5">
                    <img src="img/clio.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=5";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="clio()">Sprawdź ofertę</button>
                </div>
            </div>

            <div class="bigbox">
                <div class="box" id="image_4" value="4">
                    <img src="img/civic.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=4";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="civic()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_5" value="5">
                    <img src="img/clio.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=5";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="clio()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_6" value="6">
                    <img src="img/corsa.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=6";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="corsa()">Sprawdź ofertę</button>
                </div>
            </div>

            <div class="bigbox">
                <div class="box" id="image_5" value="5">
                    <img src="img/clio.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=5";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="clio()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_6" value="6">
                    <img src="img/corsa.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=6";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="clio()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_7" value="7">
                    <img src="img/s.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=7";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="mercs()">Sprawdź ofertę</button>
                </div>
            </div>

            <div class="bigbox">
                <div class="box" id="image_6" value="6">
                    <img src="img/corsa.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=6";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="corsa()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_7" value="7">
                    <img src="img/s.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=7";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="merc_s()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_8" value="8">
                    <img src="img/a8.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=8";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="a8()">Sprawdź ofertę</button>
                </div>
            </div>

            <div class="bigbox">
                <div class="box" id="image_7" value="7">
                    <img src="img/s.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=7";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="merc_s()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_8" value="8">
                    <img src="img/a8.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=8";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="a8()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_1" value="1">
                    <img src="img/astra.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="astra()">Sprawdź ofertę</button>
                </div>
            </div>

            <div class="bigbox">
                <div class="box" id="image_8" value="8">
                    <img src="img/a8.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=8";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="a8()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_1" value="1">
                    <img src="img/astra.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="astra()">Sprawdź ofertę</button>
                </div>

                <div class="box" id="image_2" value="2">
                    <img src="img/clk.jpg" class="img">
                    <p class="smalltext">
                        <?php
                    
                            $sql = "SELECT `marka`, `model`, `data_prod`, `dostepnosc` FROM `samochody` WHERE id_samochodu=2";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Marka samochodu: "." ".$row["marka"]."<br//>";
                                    echo "Model samochodu: "." ".$row["model"]."<br//>";
                                    echo "Data produkcji: "." ".$row["data_prod"]."<br//>";
                                    echo "Dostępność : "." ".$row["dostepnosc"]."<br//>";
                                }
                            }
                        ?>
                    </p>
                    
                    <button class="button" id="button_wypo" onclick="clk()">Sprawdź ofertę</button>
                </div>
            </div>
                <a class="arrow r" id="nextBtn" onclick="currentSlide(1)">&#10095;</a>
        
    </div>
</body>
<script src="index.js" defer></script>
</html>