<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


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
            $_SESSION['user_name'] = $user["name"];

            // Create JWT
            $secretKey = "your_super_secret_key";
            $issuedAt = time();
            $expirationTime = $issuedAt + (60 * 30); 

            $payload = [
                'iss' => 'http://localhost',
                'aud' => 'http://localhost',
                'iat' => $issuedAt,
                'exp' => $expirationTime,
                'data' => [
                    'id' => $user['id'],
                    'email' => $email,
                    'name' => $user['name']
                ]
            ];

            $jwt = JWT::encode($payload, $secretKey, 'HS256');
            $_SESSION['jwt'] = $jwt;




            
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
