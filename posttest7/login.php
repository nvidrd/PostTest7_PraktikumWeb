<?php
session_start();
require 'config.php';

if (isset($_POST['login'])) {
   $user = $_POST['user'];
   $password = $_POST['password'];

   $query = "SELECT * FROM akun
                WHERE username='$user' OR email='$user'";
   $result = $conn->query($query);
   $row = mysqli_fetch_array($result);
   $username = $row['username'];

   if (password_verify($password, $row['pw'])) {

      $_SESSION['login'] = true;

      echo "<script>
                    alert('Selamat Datang $username');
                    document.location.href = 'landing.php';
                </script>";
   } else {
      echo "<script>
                    alert('Username dan password salah');
                    document.location.href = 'login.php';
                </script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="./assets/css/logreg.css">
   <title>Login Page</title>
</head>

<body>
   <div>
      <a href="./index.php">
         <i class="bi bi-arrow-left-circle" style="font-size: 30px;">
         </i>
      </a>
   </div>
   <div class="input">
      <form action="" method="POST">
         <h1>LOGIN</h1>
         <input type="text" name="user" placeholder="E-mail/Username">
         <input type="password" name="password" placeholder="Password">
         <input class="submit" type="submit" name="login" value="Log-in">
      </form>
   </div>
   <div>
      <p>Belum punya akun?
         <a href="register.php">Registrasi</a>
      </p>
   </div>
</body>

</html>