<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}


$result = mysqli_query($conn,
"DELETE FROM db_review WHERE id = '$id'");

if($result){
   echo " 
       <script> 
       alert('Data Berhasil Dihapus!'); 
       document.location.href = 'show.php' ;
       </script>
   ";
} else {
   echo " 
       <script> 
       alert('Data Gagal Dihapus!'),
       </script>
   ";
}
?>