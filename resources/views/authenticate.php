<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login_system");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = md5($_POST['password']); // Using MD5 for simplicity; consider using password_hash() for better security.

    // Query user
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        if ($user['role'] === 'HR') {
            header("Location: dashboard_hr.php");
        } elseif ($user['role'] === 'QA') {
            header("Location: dashboard_qa.php");
        }
        exit();
    } else {
        echo "<p>Invalid username or password.</p>";
    }
}
?>
