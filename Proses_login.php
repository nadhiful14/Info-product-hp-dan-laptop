<?php
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		
		include 'Database.php';
	
	$result=mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'", $db);
		//melihat apakah username dan password yang dimasukkan benar
$rowCheck = mysql_num_rows($result);

//jika benar maka
if($rowCheck > 0){
	while($row = mysql_fetch_array($result)){

	$_SESSION ['username'] = $row ['username'];
	$_SESSION ['email'] = $row ['email'];
	$_SESSION ['login'] = true;

	//Memberitahu jika login sukses
	echo 'login berhasil..!!';

	//redirect ke halaman lain untuk lebih memastikan
	header( "Location: http://localhost/TugasUAS/index.php" );
	}
}else{
	header( "Location: http://localhost/TugasUAS/login.php" );

}
?>
