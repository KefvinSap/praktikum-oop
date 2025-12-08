<?php
// Menerima input
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$errors = [];

$min_username_length = 6;

if (strlen($username) < $min_username_length) {
    $errors[] = "Username minimal $min_username_length karakter.";
}

if (empty($errors)) {
    echo "Pendaftaran berhasil untuk user: " . htmlspecialchars($username);
} else {
    echo "Error: " . implode(", ", $errors);
}
?>