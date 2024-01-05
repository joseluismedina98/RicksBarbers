<?php
try {
    $db = new PDO("pgsql:host=localhost;dbname=barberia", "postgres", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    define('CONEXION',    $db);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}

define('OK__',    1);
define('DEFAULT__',    0);
define('ERR__',    -1);
