<?php 
include 'connection.php';
$id=$_GET['id'];  // id yang gambarnya mo ditampilkakn

$query = "select gambar,type from artikel where id_artikel=$id";
$data = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($data);


$content = $data[0];
$type = $data[1];

header("Content-type: $type");   // parsing ke mime tipe


echo $content;
?>