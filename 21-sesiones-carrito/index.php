<?php
/*
Crea un formulario con un texto, un número y un botón. Cada vez que pulses el botón se enviará el formulario y se metera el valor en la sesión.

La paǵina mostrara en una lista HTML la lista de elementos de la sesión

(Será un carrito de la compra)
*/
session_start();

if (!isset($_POST['enviar'])){
    $_SESSION['carrito'] = array();
    $_SESSION['cuenta'] = 1;
    //print("uno");
} else {
    $_SESSION['carrito'][$_SESSION['cuenta']] = array($_POST['producto'],$_POST['numero']);
    $_SESSION['cuenta'] = $_SESSION['cuenta'] + 1;
    //print($_SESSION['cuenta']);
    //print_r($_SESSION['carrito']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones - Carrito</title>
    <style>
        h1 {
            text-align: center;
        }
        #centrador {width: 80%; margin: 0 auto;}
        form {margin-left: 10%; margin-top: 20px;}
        label {margin-left: 50px;}
        table, td, th {border: 1px solid black; margin: 0 auto; border-collapse: collapse; text-align: center;}
        td,th {padding: 5px}
    </style>
</head>
<body>
    <div id="centrador">
        <h1>Carrito de compra</h1>
            <hr>
            <div id="form" >
        <form action="index.php" method="post">
                <label for="producto">Producto: &nbsp;&nbsp;&nbsp;</label>
                <input name="producto" id="producto" type="text" tabindex="1" />  
                <label for="numero">Cantidad: &nbsp;&nbsp;&nbsp;</label>
                <input name="numero" id="numero" type="numero" tabindex="2" />    
                <input type="submit" name="enviar" value="Enviar" >
            </form>
            <br><hr><br>
        </div>
        <div id="tabla">
            <table>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                </tr>
                <?php for($i=1;$i<$_SESSION['cuenta'];$i++) { ?>
                    <tr>
                        <td><?=$_SESSION['carrito'][$i][0]?></td>
                        <td><?=$_SESSION['carrito'][$i][1]?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>