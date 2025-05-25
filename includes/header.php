<?php
session_start();
// var_dump($_SESSION);
if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@admin.com') {
    header("Location: /login.php");
}
