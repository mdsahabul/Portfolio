<?php include 'includes/header.php'; ?>
<?php
include 'db.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize them
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validation checks (can be expanded for more robust validation)
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // SQL query to insert data into contacts table
        $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";

        // Prepare statement to prevent SQL injection
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('sss', $name, $email, $message);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Thank you for contacting us! <br> Our Agent will contact you soon";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error in preparing the query.";
        }

    } else {
        echo "Please fill in all fields correctly.";
    }

    // Close the database connection
    $conn->close();
}
?>
<?php include 'includes/footer.php'; ?>