<?php 
    require 'config.php';
    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // cek username telah digunakan atau belum
        $user = $conn->query("SELECT * FROM akun WHERE username='$username'");

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('Username telah digunakan, silahkan gunakan username lain');
                </script>";
        }else{

            // konfirmasi password udah bener atau belum?
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (email,username,pw)
                            VALUES ('$email','$username','$password')";
                $result = $conn->query($query);

                if($result){
                    echo "<script>
                            alert('Registrasi Berhasil');
                        </script>";
                }else{
                    echo "<script>
                            alert('Registrasi Gagal');
                        </script>";
                }
            }else{
                echo "<script>
                            alert('Konfirmasi password salah!');
                        </script>";
            }
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
         <input type="text" name="email" placeholder="E-mail">
         <input type="text" name="username" placeholder="Username">
         <input type="password" name="password" placeholder="Password">
         <input type="password" name="konfirmasi" placeholder="Konfirmasi Pass">
         <input class="submit" type="submit" name="regis" value="Registrasi">
      </form>
   </div>
   <div>
      <p>Sudah punya akun?
         <a href="./login.php">Login</a>
      </p>
   </div>
</body>

</html>