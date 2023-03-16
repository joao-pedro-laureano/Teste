<?php
$servername = 'localhost:3306';
$database = 'usuario';
$username = 'root';
$password = null;
$pdo = new PDO("mysql:dbname=".$database.";host=".$servername,$username,$password);