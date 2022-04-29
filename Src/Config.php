<?php

/*
 * Enable in developer mode
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

define( "URL_BASE", "http://localhost:4500/bis2bisTest" );

define("DATABASE_CONFIG", [
    "driver" => "mysql",
    "host" => "lamp-php72_db_1",
    "port" => "3306",
    "dbname" => "blog_bis2bis",
    "username" => "root",
    "passwd" => "root",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);