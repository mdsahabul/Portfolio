<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>

<?php

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: /portfolio/login.php'); // Redirect to login page if not logged in
    exit;
}
?>

<div class="container mt-5">
    <h2 class="text-center">Contact Messages</h2>
    <hr class="border border-primary border-3 opacity-75 container text-center" style="width:30%;">
    
    <table class="table table-bordered table-hover mt-4">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM contacts ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['message']) . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>No messages found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<a href="logout.php" class="btn btn-danger">Logout</a>


<?php include 'includes/footer.php'; ?>
