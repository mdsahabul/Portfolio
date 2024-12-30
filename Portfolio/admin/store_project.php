<?php
include '../db.php';

$title = htmlspecialchars($_POST['title']);
$description = htmlspecialchars($_POST['description']);
$image = $_FILES['image']['name'];
$target_dir = "../assets/images/";
$target_file = $target_dir . basename($image);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Validate image file type
$allowed_types = ['jpg', 'jpeg', 'png', 'gif' , 'mp4'];
if (!in_array($imageFileType, $allowed_types)) {
    die("Error: Only JPG, JPEG, PNG & GIF files are allowed.");
}

// Move uploaded image to assets/images folder
if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    // Insert project data into database
    $sql = "INSERT INTO projects (title, description, image) VALUES ('$title', '$description', '$image')";
    if ($conn->query($sql) === TRUE) {
        header("Location:/portfolio/admin/add_project.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if ($stmt->execute()) {
        echo "Testimonial added successfully!";
    } else {
        echo "Error: " . $stmt->error; // Improved error reporting
    }
} else {
    echo "Error uploading the image.";
}
?>
