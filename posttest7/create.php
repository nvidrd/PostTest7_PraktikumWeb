<?php
require "./config.php";

if (isset($_POST['submit'])) {
   $nama = $_POST['nama'];
   $nama_produk = $_POST['nama_produk'];

   // Buat Uplooad Files
   $gambar = $_FILES['gambar']['name'];
   $x = explode('.', $gambar);
   $ekstensi = strtolower(end($x));
   $gambar_baru = "$nama.$ekstensi";
   $tmp = $_FILES['gambar']['tmp_name'];     //Buat nyimpan gambar sementara

   $tempat_beli = $_POST['tempat_beli'];
   // $submit_date = $_POST['submit_date'];
   $rate = $_POST['rate'];
   $konten = $_POST['konten'];


   if (move_uploaded_file($tmp, 'gambar/' . $gambar_baru)) {
      $query = "INSERT INTO db_review (nama, nama_produk, tempat_beli, submit_date, rate, konten, gambar ) 
               VALUES ('$nama', '$nama_produk', '$tempat_beli', '$submit_date', '$rate', '$konten', '$gambar_baru')";
      $result = $conn->query($query);
      if ($result) {
         echo " 
               <script> 
               alert('Data Berhasil Ditambahkan!'); 
               document.location.href = 'show.php' ;
               </script>
         ";
      } else {
         echo " 
               <script> 
               alert('Data Gagal Ditambahkan!'),
               document.location.href = 'create.php';
               </script>
         ";
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
   <title>Input Review</title>

   <!-- Connect to another file -->
   <link rel="stylesheet" href="./assets/css/sreview.css">
   <script src="./assets/js/script.js" defer></script>

   <!-- Icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>

<body>
   <!-- Navbar -->
   <div class="container_nav">
      <div class="navbar">
         <h3>Skincare Kuy</h3>
         <nav>
            <ul>
               <li><a href="./index.php">Home</a></li>
               <li><a class="active" href="#">Product</a></li>
               <li><a href="./about.php">About me</a></li>

               <!-- Icon here -->
               <li><a href="./logout.php"><i class="bi bi-box-arrow-right"></i></a></li>
            </ul>
         </nav>
      </div>

      <!-- FORM INPUT REVIEW -->
      <div class="content">
         <div>
            <!-- enctype jangan lupa buat form files -->
            <form method="post" action="" enctype="multipart/form-data">
               <fieldset>
                  <table id="Tabel_inventory">
                     <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" placeholder="Nama Kamu" id="nama" required></td>
                     </tr>
                     <tr>
                        <td>Nama Produk</td>
                        <td><input type="text" name="nama_produk" placeholder="Nama Produk" id="nama_produk" required></td>
                     </tr>
                     <tr>
                        <td>Upload Produk</td>
                        <td><input type="file" name="gambar" placeholder="Gambar Produk" id="up_foto" required></td>
                     </tr>
                     <tr>
                        <td>Tempat Beli</td>
                        <td><input type="text" name="tempat_beli" placeholder="Ex: Shopee, Tokopedia, dll." id="tempat_beli" required></td>
                     </tr>

                     <tr>
                        <td>Rating</td>
                        <td><input name="rate" type="number" min="1" max="5" placeholder="Rating (1-5)" id="rate" required></td>
                     </tr>
                     <tr>
                        <td>Review</td>
                        <td><textarea name="konten" placeholder="Tulis reviewnya di sini ya..." id="konten" required></textarea></td>
                     </tr>
                  </table>
                  <p>
                     <!-- <input type="submit" id="btn_simpan" value="Submit"> -->
                     <button id="btn_simpan" type="submit" name="submit" required>Submit</button>
                  </p>
               </fieldset>
            </form>
         </div>
      </div>
   </div>
</body>

</html>