<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    if (isset($_POST['add_user'])) {
        

        $query = "INSERT INTO users (first_name, last_name, phone_number, email, address) 
                VALUES (:first_name, :last_name, :phone_number, :email, :address)";


    
        $stmt = $pdo->prepare($query);

    
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);


        if ($stmt->execute()) {
            
            header('Location: index.php');
            exit;
        } else {
            echo "Error inserting data!";
        }

    }

    if (isset($_POST['update_user'])) {


        $query = "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`phone_number`='$phone_number',`email`='$email',`address`='$address' WHERE `id`='$id'";

        $stmt = $pdo->prepare($query);
        if ($stmt->execute()) {
            // Redirect to index.php with success message
            header("location: index.php");
            exit();
        } else {
            echo "Error: " . $pdo->error;
        }

    }
}
?>