<?php

require "base.php";

$login = $_POST['login'];
$pass = $_POST['pass'];

$sql = "SELECT login, haslo, mail, priviliges FROM konta where login='$login' OR mail='$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
    if ($row['priviliges'] >= 3) {
        if ($row['login'] == $login || $row['mail'] == $login && $row['haslo'] == $pass) {
            header("Location: panel_pracownika.php");
            exit();
        }    
    } elseif ($row['priviliges'] <= 2){
        if($row['login'] == $login || $row['mail'] == $login && $row['haslo'] == $pass){
            header("Location: panel_uzytkownika.php");
            exit();
        }
    }

  }
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Logowanie Panel!</title>
</head>
<body>
    <div class="logcon">
      <h1 class="text" id="login_text">Nie wykryto Loginu lub hasła!</h1>
      <h1 class="text">Sprobuj ponownie!</h1>
      <!-- <button class="button" onclick="register()">Zarejestruj</button> -->
      <button class="button" onclick="panel_logowanie()">Zaloguj do panelu</button>
    </div>
</body>
<script src="index.js" defer></script>
</html>