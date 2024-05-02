<?php

require_once("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $un = $_POST["username"]; 
    $email = $_POST["email"]; 
    $pass = $_POST["password"]; 

    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    try {
        $sql = "SELECT * FROM users WHERE username = '$un' OR email = '$email'";
        $result = $pdo->query($sql);

        if ($result->rowCount() > 0) {
            echo "Error: Username or email already exists!";
        } else {
            
            $sql = "INSERT INTO users (username, email, password) VALUES ('$un', '$email', '$hashedPassword')";
            $pdo->query($sql);
            echo "User registered successfully!";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
