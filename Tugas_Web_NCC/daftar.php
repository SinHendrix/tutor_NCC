<?php 
// koneksi database
include 'connection.php';
 
// menangkap data yang di kirim dari form
$user_register = $_POST['user_register'];
$nama_register = $_POST['nama_register'];
$pass_register = $_POST['pass_register'];
$mail_register = $_POST['mail_register'];
 
$user_check_query = "SELECT * FROM user WHERE username='$user_register'";
$result = mysqli_query($koneksi, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
    ?>
    <script type="text/javascript">
        alert("Register gagal. Gunakan username lain");
        window.location = "register.php";
    </script>
    <?php
}

else if($user_register=='' || $nama_register=='' || $pass_register=='' || $mail_register=='')
{
    ?>
    <script type="text/javascript">
        alert("Data tidak boleh kosong");
        window.location = "register.php";
    </script>
    <?php
}
  
else
{
    mysqli_query($koneksi,"insert into user values(NULL,'$user_register','$nama_register','$pass_register','$mail_register')");
    ?>
    <script type="text/javascript">
        alert("Register berhasil");
        window.location = "index.php";
    </script>
    <?php
 
}
?>