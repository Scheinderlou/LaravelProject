<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="authenticate.php" method="POST">
            <div class="input-group">
                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
