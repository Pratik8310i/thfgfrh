<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?php
            require_once 'credentials.php';

            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if ($username === USERNAME && $password === PASSWORD) {
                    header("Location: checker.html");
                    exit;
                } else {
                    echo "<p class='error'>Incorrect username or password join @methxcc</p>";
                }
            }
        ?>
    </div>
</body>
</html>