<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Notion Clone</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2>Loginin ngab</h2>
    <h3>Pake akun <i>admin@admin.com</i> dulu</h3>
    <form action="./backend/login.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" >
        <input type="password" name="password" placeholder="Enter your password">
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
