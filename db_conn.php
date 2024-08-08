<?php

use Dotenv\Dotenv;
require 'vendor/autoload.php';
// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Retrieve database credentials from environment variables
$HOST = $_ENV['DB_HOST'];
$USERNAME = $_ENV['DB_USERNAME'];
$PASSWORD = $_ENV['DB_PASSWORD'];
$DATABASE = $_ENV['DB_DATABASE'];

// Create a new MySQLi instance
$mysqli = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");