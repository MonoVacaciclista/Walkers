<?php
    // Connection DataBase
    try {
        $conn = new PDO("mysql:host=$host; dbname=$dbnm", $user, $pass);
        $conn->exec('set names utf8');
    } catch (PDOException $e) {
        echo "Error in connection DB: " . $e->getMessage();
    }

    /* Functions CRUD */
    // Register users
    function regUser($name, $email, $password, $conn){
        try{
            $sql = "INSERT INTO users (name, email, password)
             VALUES (:name, :email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":password", $password);
           
            if($stmt->execute()){
                return true;
            } else{
                return false;
            }
        } catch (PDOException $e){
            echo "Hola";
            echo $e->getMessage();
        }
    }

    function registerUser($fullname, $email, $username, $password, $conn) {
        try {
            $sql  = "INSERT INTO users (fullname, email, username, password) 
                     VALUES (:fullname, :email, :username, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(":fullname", $fullname);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":username", $username);
            $stmt->bindparam(":password", $password);

            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }