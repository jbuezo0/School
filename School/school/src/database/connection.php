<?php

$username = 'root';
$password = '53009480';
$database = 'schooldb';
$host = 'localhost';

try {

    $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
    $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch (PDOException $e){
   header('Location: ../../student/list.php');

    echo $e->getMessage();

 }
