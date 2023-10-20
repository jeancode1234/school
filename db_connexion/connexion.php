<?php
 require_once(".././db_identifiants/identifiants.php");
 try {
    $bdd= new PDO("mysql:host=".DB_CONNECT.";dbname=".DB_NAME,DB_USER,DB_PASS);
 } catch (PDOException $e) {
    die("error". $e->getMessage());
 }