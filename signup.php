<?php

    include "db.php";

    echo "hey";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>

<style>
    body {
        background-color: #e6ecf0; /* Soft blue background for the whole page */
        font-family: Arial, sans-serif; /* Modern, readable font */
    }
    .contain_form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        border: none; /* Remove border */
        padding: 40px;
        background-color: #ffffff; /* White background for contrast */
        box-shadow: 0 4px 15px rgba(0,0,0,0.2); /* Deeper shadow for a floating effect */
        border-radius: 15px; /* Rounded corners for the form */
        width: 400px;
    }
    label {
        display: block;
        margin: 15px auto 5px;
        width: 90%;
        background-color: #f0f4f8; /* Light grey for labels */
        color: #333; /* Dark grey text for better readability */
        padding: 10px;
        border-radius: 20px; /* Highly rounded labels */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Subtle shadow for labels */
    }
    input, button {
        display: block;
        margin: 5px auto 15px;
        width: 90%;
        padding: 12px;
        border: none; /* Border removed for a cleaner look */
        border-radius: 25px; /* Highly rounded inputs and button */
    }
    input {
        background-color: #f8f9fa; /* Very light grey for inputs */
    }
    button {
        background-color: #4CAF50; /* Vivid green background for button */
        color: #ffffff; /* White text for button */
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s; /* Smooth transition for hover effect */
    }

</style>
    <div class="contain_form">
        <form action="BE/signupDB.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit">signUp</button>
            <a href="login.php">Already a user ?Click here</a>
        </form>
    </div>

    
</body>
</html>