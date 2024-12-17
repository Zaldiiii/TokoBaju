<?php
// File: db.php
$host = 'localhost';
$user = 'root';
$password = ''; // Kosongkan jika tidak ada password
$dbname = 'toko_baju';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($action == 'register') {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            $message = "Registrasi berhasil! Silakan login.";
        } else {
            $message = "Error: " . $conn->error;
        }
    } elseif ($action == 'login') {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $message = "Login berhasil! <a href='index.php'>Lanjut ke Home</a>";
        } else {
            $message = "Login gagal, cek username atau password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: url('RPL.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .container h1 {
            margin-bottom: 1.5rem;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container form input {
            margin-bottom: 1rem;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            outline: none;
        }

        .container form input::placeholder {
            color: #aaa;
        }

        .container form button {
            padding: 0.75rem;
            background-color: #0078d7;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .container form button:hover {
            background-color: #005bb5;
        }

        .message {
            margin-top: 1rem;
            color: lightgreen;
        }

        .login-info {
            margin: 0.5rem 0 0.5rem 0;
            color: #ddd;
        }

        .spacer {
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login/Register</h1>
        <?php if (isset($message)) echo "<p class='message'>$message</p>"; ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="action" value="login">Login</button>
            <p class="login-info">Belum punya akun?</p>
<a href="register.php?register=true">
    <button type="button" class="btn-register">Daftar Disini</button>
</a>
        </form>
    </div>
</body>
</html>
