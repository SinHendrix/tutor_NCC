<?php
    require_once("connection.php");
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE usename = '$username'";
    $query = $db->query($sql);
    if($query->num_rows != 0){
        echo "<div align='center'>Username Sudah Terdaftar! <a href='register.php'>Back</a></div>";
    }else{
        if(!$username || !$pass){
            echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
        }
        else{
            $data = "INSERT INTO user VALUES (NULL, '$username', '$pass')";
            $simpan = $db->query($data);
            if($simpan) {
                echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
            } else {
                echo "<div align='center'>Proses Gagal!</div>";
            }
        }
    }
?>