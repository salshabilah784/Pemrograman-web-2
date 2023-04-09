<?php
session_start(); // Mulai session

// Cek apakah user sudah submit form login
if (isset($_POST['login'])) {
	// Ambil data dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Validasi username dan password di sini
	// Misalnya dengan membandingkan dengan nilai hard-coded
	if ($username == "admin" && $password == "12345") {
		$_SESSION['username'] = $username; // Set session username
		header("Location: home.php"); // Redirect ke halaman dashboard
		exit();
	} else {
		$error = 'Username atau password salah'; // Redirect kembali ke halaman login
		header("Location: index.php"); 
		exit();
	}
}
?>