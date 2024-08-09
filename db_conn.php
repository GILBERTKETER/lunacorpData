<?php

use Dotenv\Dotenv;
require 'vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$HOST = $_ENV['DB_HOST'];
$PORT = $_ENV['DB_PORT'];
$USERNAME = $_ENV['DB_USERNAME'];
$PASSWORD = $_ENV['DB_PASSWORD'];
$DATABASE = $_ENV['DB_DATABASE'];

$mysqli = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");