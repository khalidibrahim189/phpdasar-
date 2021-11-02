<?php
include_once "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// echo $username,$password;

//ambil dari database

$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '$username' and password='$password' ");

$cek_data = mysqli_num_rows($data);


if($cek_data > 0){
    session_start();
    $_SESSION['username']=($username);
    $_SESSION['password']=($password);
    echo "Selamat ,   <b>$username</b> anda berhasil login"."<br/>";
    echo "Silahkan logout <a href=logout.php>Logout</a>";
}else{
    echo "username dan password anda salah bro";
    echo "Silahkan login kembali <a href=index.php> Login</a>";
}




?>