<?php
session_start();

if (isset($_POST['passw'])){
    if ( $_POST['passw'] == "31337" ){
        $_SESSION['EXAMENIAW2022'] = "aprobado";
        header('location: priv1.php');
        exit;
    } else {
        $_SESSION['EXAMENIAW2022'] == "abortado";
        header('location: login.php');
        exit;
    }
}

print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="cuerpo">
    <h1>Incio de sesion</h1>
    <form method="post">
        <label>Contraseña</input>
        <input type="number" name="passw" value=" "></input>
        <input type="submit" name="submit"></input>

    </form>
</body>
</html>