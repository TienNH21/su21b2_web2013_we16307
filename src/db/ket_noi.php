<?php

function getConnection() {
    $dbUrl = "mysql: host=localhost; dbname=we16307";
    $dbUser = "root";
    $dbPass = "";

    $connection = new PDO($dbUrl, $dbUser, $dbPass);

    return $connection;
}
