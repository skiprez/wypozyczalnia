<?php

require "base.php";

$login = $_POST['login'];
$pass = $_POST['pass'];

$sql = "SELECT login, haslo, mail FROM konta where login='$login' OR mail='$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($row['login'] == $login || $row['mail'] == $login && $row['haslo']==$pass){
        header("Location: wypozyczalnia.php");
        exit();
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
    <title>Logowanie</title>
</head>
<body>
    <div class="logcon">
      <h1 class="text" id="login_text">Nie wykryto Loginu lub hasła!</h1>
      <h1 class="smalltext">Czy chciałbyś się zarejestrować?</h1>
      <button class="button" onclick="register()">Zarejestruj</button>
      <button class="button" onclick="index()">Strona Główna</button>
    </div>
</body>
<script src="index.js" defer></script>
</html>