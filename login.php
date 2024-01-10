<?php 
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #eee;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 50px;
            width: 300px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Login Admin</h1>
        <label for="username">Username</label>
        <input name="username" type="text" required>
        
        <label for="password">Password</label>
        <input name="password" type="password" required>
        
        <button name="login">Login</button>
    </form>
</body>
</html>


<?php 
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
    $akun = $ambil->num_rows;

    if($akun == 1) {
        $_SESSION['login_admin'] = $ambil->fetch_assoc();
        echo "<script>alert('Login successful')</script>";
        echo "<script>location='index.php';</script>";
        mysqli_error($koneksi);
    } else {
        echo "<script>alert('Login gagal')</script>";
        echo "<script>location='login.php';</script>";
        mysqli_error($koneksi);
    }
}
?>
s