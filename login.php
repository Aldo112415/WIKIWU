<?php
require "config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user['username'] == $username) {
        if ($user['password'] == $password) {
            echo "
                <script>
                    alert('Login berhasil');
                    document.location.href='homewiki.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Password salah');
                    document.location.href='login.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Username atau password salah');
                document.location.href='login.php';
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .login-form {
            max-width: 400px;
            padding: 20px;
            border-radius: 5px;
            background-color: #f1f1f1;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form form {
            display: flex;
            flex-direction: column;
        }

        .login-form label {
            margin-bottom: 10px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .login-form button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
        }

        .login-form button:hover {
            opacity: 0.8;
        }
        
        .login-form .guest-button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
        }

        .login-form .guest-button:hover {
            opacity: 0.8;
        }
    </style>
</head>


<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="pwd">Password:</label>
                <input type="password" id="pwd" name="pwd" required>

                <button type="submit" name="submit">Login</button>
                <a href="homewikiP.php" class="guest-button">Guest</a>
            </form>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const modeButton = document.getElementById('mode-button');

            modeButton.addEventListener('click', function () {
                document.body.classList.toggle('dark-mode');
                if (document.body.classList.contains('dark-mode')) {
                    modeButton.textContent = 'Light Mode';
                } else {
                    modeButton.textContent = 'Dark Mode';
                }
            });
        });
    </script>
</body>

</html>
