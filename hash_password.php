<?php
// Change this to your new password
$new_password = 'devsahabul#addproject'; 

// Hash the password
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

echo $hashed_password;
?>
