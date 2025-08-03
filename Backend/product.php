<?php

header('Content-Type: application/json');


$dsn = "mysql:host=127.0.0.1;dbname=waveaura;charset=utf8mb4";
$username = "root";  
$password = "alpha";     

try {
    $pdo = new PDO($dsn, $username, $password);

    
    $stmt = $pdo->query("SELECT * FROM product_details");

   
    $products = $stmt->fetchAll(PDO::FETCH_OBJ);

    
    echo json_encode($products);

} catch (PDOException $e) {
   
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]);
}
