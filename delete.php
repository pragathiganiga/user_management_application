<?php
include 'db.php';

if (isset($_GET['id'])) {
    
    $userId = $_GET['id'];

   
    $query = "DELETE FROM users WHERE id = :id";

   
    $stmt = $pdo->prepare($query);

    
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);

    
    if ($stmt->execute()) {
        
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting data!";
    }
} else {
    echo "ID not set in the URL!";
}
?>