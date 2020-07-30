<?php 

$hostname = "localhost";
$database = "db_pwd";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$connect = mysqli_connect($hostname, $username, $password, $database);
// mengecek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else{
	echo "dadatabase terhubung.";
}

?>