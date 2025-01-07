<?php
include 'config.php';

function registrasi($data){
    global $mysqli;
    $username = $data['username'];
    $password = $data['password'];
    $password2 = $data['password2'];
    $role = $data['role'];

    if ($password != $password2) {
        echo "
            <script>
                alert('Password konfirmasi yang anda masukkan salah!');
            </script>
        ";
        die;
    }

    $query = "INSERT INTO users VALUES('', '$username', '$password', '$role')";
    mysqli_query($mysqli, $query);
    return mysqli_affected_rows($mysqli);
}

if (isset($_POST['submit'])) {
    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('Anda berhasil registrasi');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Anda tidak berhasil registrasi');
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .register-form {
            margin-top: 20px;
            text-align: center;
        }

        .register-form h2 {
            margin-bottom: 20px;
        }

        .register-form label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        .register-form input[type="text"],
        .register-form input[type="password"] {
            width: 100%;
            padding: 6px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .register-form button[type="submit"] {
            width: 100%;
            padding: 6px 12px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-form button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="register-form">
            <h2>Registrasi</h2>
            <form action="" method="post">
                <input type="hidden" name="role" value="user">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="password2">Konfirmasi Password:</label>
                <input type="password" id="password2" name="password2" required>

                <button type="submit" name="submit">Daftar</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const modeButton = document.getElementById('mode-button');

            modeButton.addEventListener('click', function() {
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
