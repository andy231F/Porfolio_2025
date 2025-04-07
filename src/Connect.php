<?php

const DBHOST = "localhost";
const DBUSER = "andy";
const DBPASS = "Winxok123";

$dsn = "mysql:host=" . DBHOST;

try {
    $db = new PDO($dsn, DBUSER, DBPASS);
    $db->exec("SET NAMES utf8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//Defini le fecth par defaut en tableau assosiatif
} catch (PDOException $e) {
    die($e->getMessage());
}

?>