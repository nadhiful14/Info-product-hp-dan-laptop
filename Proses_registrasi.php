<?php
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$repeat_pass = $_POST['repeat_pass'];

		
		include 'Database.php';

	if($_POST['submit']){
		$cekuser = mysql_query("SELECT username FROM login WHERE username='$username' ");

		if( mysql_fetch_assoc($cekuser) ){
			echo "<script>
					alert('Username Sudah Terdaftar');
					document.location.href='login.php';
				</script>";
				return false;
			}

		if($password !== $repeat_pass){
			echo "<script>
					alert('Password tidak sesuai');
					document.location.href='login.php';
				</script>";
			return false;
		}else{
			echo "<script>
					alert('Registrasi Anda Berhasil');
				</script>";
		}

		mysql_query("INSERT INTO login VALUES('', '$username','$password', '$email')");
	}
	

?>

<meta http-equiv="refresh" content="0;url=login.php"/>