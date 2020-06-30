<?php
// membuat koneksi 
include 'koneksi.php';

// Deklarasi variable
$username = $_POST['username'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$submit =$_POST['submit'];

if(isset($submit)){
	if(!empty($username && $password && $phone_number)){
		$ins = mysqli_query($koneksi,"insert into login (username,password,phone_number) values ('$username','$password','$phone_number')");
		echo "<script>window.location=('../login.php');</script>";
	}else{
		echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('../register.php') </script>";
	}
}
?>