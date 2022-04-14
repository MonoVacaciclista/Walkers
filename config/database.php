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
function regUser($name, $email, $password, $conn)
{
    try {
        $sql = "INSERT INTO users (name, email, password)
             VALUES (:name, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindparam(":name", $name);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":password", $password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function logUser($email, $password, $conn)
{
    try {
        $sql  = "SELECT * FROM users 
                 WHERE email = :email 
                 AND password = :password
                 LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt-> bindparam(":email", $email);
        $stmt-> bindparam(":password", $password);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['ss-id'] = $data['id'];
            $_SESSION['ss-rol'] = $data['rol_id'];
            $_SESSION['ss-name'] = $data['name'];
            $_SESSION['ss-email'] = $data['email'];
            return true;
        } else {
            return false;
        }
    } catch (PDOException  $e) {
        echo $e->getMessage();
    }
}
