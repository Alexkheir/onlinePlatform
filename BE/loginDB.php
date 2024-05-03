<?php

require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $un = $_POST["username"]; 
    $pass = $_POST["password"]; 

    try {
        $sql = "SELECT * FROM users WHERE username = '$un'";
        $result = $pdo->query($sql);

        if ($result->rowCount() > 0) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pass, $user['password'])) {
                header("location: ../FE/home.php");
            } else {
                echo "Error: Incorrect password!";
            }
        } else {
            echo "Error: User not found!";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
