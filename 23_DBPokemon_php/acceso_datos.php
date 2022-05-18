<?php
try {
    $conexion_bd = new PDO(
                    'mysql:host=172.26.110.199;dbname=DB_Pokemon',
                    'miguel',
                    'miguel'
                );
    $conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>