<?php
// Include database configuration
require_once '../config/db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Prepare SQL query
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute query
            $stmt->bind_param("sss", $name, $email, $message);
            if ($stmt->execute()) {
                // Redirect to a success page
                header("Location: ../views/apply_success.php");
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }
} else {
    // Redirect if accessed without form submission
    header("Location: ../views/contact.view.php");
    exit;
}
?>
