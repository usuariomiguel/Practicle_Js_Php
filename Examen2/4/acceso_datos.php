<?php
try {
    $conexion_bd = new PDO(
                    'mysql:host=172.26.110.202;dbname=countries',
                    'miguel',
                    'miguel'
                );
    $conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>