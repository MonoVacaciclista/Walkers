<?php
    // Connection DataBase
    try {
        $conn = new PDO("mysql:host=$host; dbname=$dbnm", $user, $pass);
        $conn->exec('set names utf8');
    } catch (PDOException $e) {
        echo "Error in connection DB: " . $e->getMessage();
    }

    /* Functions CRUD */
    // Register Users
    