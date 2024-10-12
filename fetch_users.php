    <?php
    include 'db.php';

    try {
       
        $query = "SELECT * FROM users";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
       
        echo "Error fetching users: " . $e->getMessage();
    }
    ?>

