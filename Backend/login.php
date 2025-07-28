<?php

// Show errors in browser for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database credentials
$host = "127.0.0.1"; 
$user = "root";
$pass = "alpha";
$db   = "waveaura";

try {
    // Create DB connection
    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        throw new Exception("❌ Connection Failed: " . $conn->connect_error);
    }

    // Fetch email & password from POST
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if email exists
    $checkSql = "SELECT * FROM users_data WHERE email = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows === 0) {
        echo "❌ Wrong email or password";
    } else {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            $cookieExpire = time() + 60 * 30; 
            $isSecure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';

            setcookie("user_email", $email, $cookieExpire, "/", "", $isSecure, true);
            setcookie("user_name", $user["name"], $cookieExpire, "/", "", $isSecure, false);


            
            echo "✅ Login successful";
        } else {
            echo "❌ Wrong email or password";
        }
    }

    $checkStmt->close();
    $conn->close();

} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}

?>
