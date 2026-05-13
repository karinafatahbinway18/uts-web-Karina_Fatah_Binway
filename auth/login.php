<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="../assets/CSS/style.css">
    </head>

    <body>
        <div class="container">
            <div class="card">
                <h2>Login</h2>

                <form action="proses_login.php" method="POST">
                     <input type="text" name="username" placeholder="Username" required>

                     <input type="password" name="password" placeholder="Password" required>

                     <button type="submit">Login</button>

                </form>

                <br>

                <a href="register.php">Belum punya akun?</a>

            </div>
        </div>
    </body>
</html>