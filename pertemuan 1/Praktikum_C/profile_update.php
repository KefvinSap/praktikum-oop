<?php

$username = $_POST['new_username'] ?? '';
$errors = [];

$min_username_length = 6;

if (strlen($username) < $min_username_length) {
    $errors[] = "Username minimal $min_username_length karakter.";
}

if (empty($errors)) {
    echo "Update profil berhasil untuk username baru: " . htmlspecialchars($username);
} else {
    echo "Error: " . implode(", ", $errors);
}
?>