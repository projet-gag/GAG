<?php

define('DB_DSN', 'mysql:host=localhost;dbname=world2;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DEBUG', true);

function connect()
{
    $opt = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_EMULATE_PREPARES   => false
    );
    try {
      return new PDO(DB_DSN,DB_USER,DB_PASSWORD, $opt);
    } catch (PDOException $e) {
        echo "Oups ! Connexion SGBD impossible !";
        if (DEBUG) :
          echo   "<br/>" . $e->getMessage();
        endif;
        die();
    }
}
// initialisation de la variable globale $pdo
$pdo = connect();
