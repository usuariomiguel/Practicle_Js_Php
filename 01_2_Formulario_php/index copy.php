<?php
/*
echo "</br>GET: </br>";
print_r($_GET);
echo "</br>    POST: </br>";
print_r($_POST);
*/
$edad0_18 = "";
$edad18_30 = "";
$edad30_60 = "";
$nombre = "";
$apellidos = "";
$email = "";
$fecha = "";
$validar = "";

#Condiciones para campos nombre, apellidos y email
if (isset($_POST['nombre'])) {
    $nombre = ($_POST['nombre']);
    $validar = "id='correcto'";
}
if (isset($_POST['apellidos'])) {
    $apellidos = ($_POST['apellidos']);
    $validar = "id='correcto'";
}
if (isset($_POST['email'])) {
    $email = ($_POST['email']);
    $validar = "id='correcto'";
}

if (!isset($_POST['nombre'])) {
    $validar = "id='incorrecto'";
}
if (!isset($_POST['apellidos'])) {
    $validar = "id='incorrecto'";
}
if (!isset($_POST['email'])) {
    $validar = "id='incorrecto'";
}

#Condiciones para campo Edad
/*
if (!isset($_POST['joven']) && (!isset($_POST['mediano'])) && (!isset($_POST['mayor']))) {
    $validar = "id='incorrecto'";
}
*/
if (isset($_POST['joven'])) {
    $edad0_18 = "checked";
}
if (isset($_POST['mediano'])) {
    $edad18_30 = "checked";
}
if (isset($_POST['mayor'])) {
    $edad30_60 = "checked";
}
if (isset($_POST['fecha'])) {
    $fecha = ($_POST['fecha']);
}
/*
<?=$email?>
<?=$apellidos?>
<?=$nombre?>
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="cuerpo">
<form action="/index.php" method="post" id="formulario">
    <h1>Formulario</h1>
        <fieldset title="Formulario">
            <legend> Informacion personal
            </legend>
            <fieldset>
                <label> Nombre: 
                        <input type="text" name="nombre" value="<?=$nombre?>" <?=$validar?> ></input>
                </label>
                <label> Apellidos: 
                        <input type="text" name="apellidos" value="<?=$apellidos?>" <?=$validar?> ></input>
                </label>
                <label> Email: 
                        <input type="text" name="email" value="<?=$email?>" <?=$validar?> ></input>
                </label><hr>
            </fieldset>
            <fieldset>
                <legend>Edad</legend>
                <label class="checkbox"> 0-18
                    <input type="checkbox" class="input-assumpte" id="input-confidencial" tabindex='20' name="joven" value="0-18" <?=$edad0_18?> ></input>
                    <span class="check"></span>
                </label>
                <label class="checkbox"> 18-30
                    <input type="checkbox" class="input-assumpte" id="input-confidencial" tabindex='20' name="mediano" value="18-30"<?=$edad18_30?>  ></input>
                    <span class="check"></span>
                </label>
                <label class="checkbox"> 30-60
                    <input type="checkbox" class="input-assumpte" id="input-confidencial" tabindex='20' name="mayor" value="30-60"<?=$edad30_60?>  ></input>
                     <span class="check"></span>
                </label>
            </fieldset>

            <fieldset>
            <legend> Fecha nacimiento:</legend>
                <hr>
                        <input type="date" name="fecha" value="<?=$fecha?>">
                </br>
                <input type="submit" value="enviar"></input>
            </fieldset>
                        
        </fieldset>
<form>
</body>
</html>