<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel = "stylesheet" href="../assets/CSS/style.css">
    </head>
    <body>
        <div class="container">
            <div class="card">
                <h2>Register</h2>

                <form action="proses_register.php" method="POST">
                    <input type="text" name="nama" placeholder="Nama" required>

                    <input type="text" name="username" placeholder="username" required>

                    <input type="text" name="password" placeholder="password" required>

                    <button type="submit">Register</button>
                </form>

                <br>

                <a href="login.php">Sudah punya akun?</a>

            </div>
        </div>
    </body>
</html>