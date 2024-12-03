<?php
require '../config/db.php'; // Ensure the database connection is included

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $service = $_POST['service'] ?? '';
    $details = $_POST['details'] ?? '';

    // Validate input
    if (!empty($name) && !empty($email) && !empty($service)) {
        try {
            // Prepare and execute SQL query
            $stmt = $pdo->prepare('INSERT INTO applications (name, email, service, details) VALUES (?, ?, ?, ?)');
            $stmt->execute([$name, $email, $service, $details]);

            // Redirects to a success page
            header("Location: /proTechDevelopments/src/views/apply_success.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request method.";
}
?>
