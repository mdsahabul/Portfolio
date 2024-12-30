<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../includes/header.php';
include '../db.php';
?>

<div class="container mt-5">
    <h1>Add New Project</h1>
    <form action="store_project.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Project</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        // Keep the session alive by calling refresh_session.php every 5 minutes
        setInterval(function() {
            $.get('admin/refresh_session.php'); // Ensure this path is correct
        }, 300000); // 300000 milliseconds = 5 minutes

        // Your existing form submission code
        $('#projectForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            $.ajax({
                url: 'store_project.php',
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#message').html(response); // Display success/error message
                    $('#projectForm')[0].reset(); // Reset the form
                },
                error: function() {
                    $('#message').html('An error occurred.'); // Handle AJAX error
                }
            });
        });
    });
</script>
<br><br>
<a href="logout.php" class="btn btn-danger">Logout</a>


<?php include '../includes/footer.php'; ?>
