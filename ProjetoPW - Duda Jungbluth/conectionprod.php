<?php

$host = "localhost";
$user = "root";
$password = "duda2006";
$database = "Cadatrodeprodutos";
$port = 80;
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];
$conn = new PDO(
    "mysql:host=$host;dbname=$database;port=$port",
    $user,
    $password,          // ?
    $options
);



