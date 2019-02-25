<?php
/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 15/02/2019
 * Time: 14:20
 */


$host = 'localhost';
$user = 'root';
$password = '';
$database = 'reservation';

//Connect to MySQL using PDO.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);