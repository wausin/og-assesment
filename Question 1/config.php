<?php
require_once 'idiorm.php';
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "offgamers";

ORM::configure('mysql:host=' . $servername . ';dbname=' . $db);
ORM::configure('username', $username);
ORM::configure('password', $password);
