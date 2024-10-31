<?php
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = 'secret';
    $dbname = 'pawteori';
    $mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if ($mysqli->connect_errno) {
        die('Database connection failure');
    }