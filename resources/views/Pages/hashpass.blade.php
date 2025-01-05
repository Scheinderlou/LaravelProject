<?php
// Replace this with the password you want to hash
$password = 'password';

// Hash the password using bcrypt
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Echo the hashed password
echo "Hashed Password: " . $hashedPassword;

