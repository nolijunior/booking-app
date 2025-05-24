<?php
require_once("../config/db.php");

$user_id = intval($_GET['id'] ?? 0);

if ($user_id > 0) {
    $sql = "DELETE FROM users WHERE user_id = $user_id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('User deleted successfully!');
            window.location.href = 'users.php';
        </script>";
        exit;
    } else {
        echo "<script>
            alert('Error deleting user: " . addslashes($conn->error) . "');
            window.location.href = 'users.php';
        </script>";
        exit;
    }
} else {
    echo "<script>
        alert('Invalid user ID.');
        window.location.href = 'users.php';
    </script>";
    exit;
}
