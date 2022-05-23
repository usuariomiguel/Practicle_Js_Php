<?php
try {
    $conexion_bd = new PDO(
                    'mysql:host=192.168.1.166;dbname=registro_centro',
                    'miguel',
                    'usuario'
                );
    $conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>