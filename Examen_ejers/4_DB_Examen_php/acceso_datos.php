<?php
try {
    $conexion_bd = new PDO(
                    'mysql:host=127.0.0.1;dbname=foro',
                    'miguel',
                    'miguel'
                );
    $conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>