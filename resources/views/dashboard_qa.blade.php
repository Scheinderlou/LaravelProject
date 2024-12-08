<?php
session_start();
if ($_SESSION['role'] !== 'QA') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QA Dashboard</title>
</head>
<body>
    <h1>Welcome to the QA Dashboard</h1>
</body>
</html>
