<?php
try {
    $conexion_bdsession = new PDO(
                    'mysql:host=192.168.1.166;dbname=DB_session',
                    'miguel',
                    'usuario'
                );
    $conexion_bdsession->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>