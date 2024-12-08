<?php
session_start();
if ($_SESSION['role'] !== 'HR') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HR Dashboard</title>
</head>
<body>
    <h1>Welcome to the HR Dashboard</h1>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
