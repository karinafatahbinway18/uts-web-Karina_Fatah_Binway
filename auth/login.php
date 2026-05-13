<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link rel="stylesheet"
href="../assets/CSS/style.css">

</head>

<body class="login-body">

<div class="login-overlay">

    <div class="login-card">

        <h2>Login</h2>

        <form action="proses_login.php"
        method="POST">

            <input type="text"
            name="username"
            placeholder="Username"
            required>

            <input type="password"
            name="password"
            placeholder="Password"
            required>

            <button type="submit">
                Login
            </button>

        </form>

        <br>

        <center>

        <a href="register.php">
            Belum punya akun?
        </a>

        </center>

    </div>

</div>

</body>
</html>