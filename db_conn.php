<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "lunacorpdata";

$mysqli = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
// Set connection character set to prevent character encoding issues
$mysqli->set_charset("utf8mb4");

// Optionally, enable SSL/TLS for the connection if available
// $mysqli->ssl_set('/path/to/client-key.pem', '/path/to/client-cert.pem', '/path/to/ca-cert.pem', NULL, NULL);

// Optionally, enable strict mode to enforce data integrity
// $mysqli->query("SET SESSION sql_mode='STRICT_ALL_TABLES'");
