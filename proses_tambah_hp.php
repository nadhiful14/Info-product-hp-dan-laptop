<?php
include "Database.php";

$nama = $_POST['nama'];
$cpu = $_POST['cpu'];
$gpu = $_POST['gpu'];
$storage = $_POST['storage'];
$kamera = $_POST['kamera'];
$kamera_depan = $_POST['kamera_depan'];
$os = $_POST['os'];
$rom = $_POST['rom'];
$ram = $_POST['ram'];
$layar = $_POST['layar'];
$baterai = $_POST['baterai'];
$fitur = serialize($_POST['fitur']);
$harga = $_POST['harga'];
$gambar = upload();

if($gambar === false){
	return false;
}



if(isset($_POST['tombol']) ) {



	$query = "INSERT INTO handphone VALUES
				('','$nama', '$cpu', '$gpu', '$ram', '$storage', '$kamera', '$kamera_depan', '$os', '$rom', '$gambar', 
				'$fitur', '$layar', '$baterai', '$harga');";
	$simpan = mysql_query($query);
}

	if($simpan == true){
?>
		<script type="text/javascript">
		alert('Penyimpanan data berhasil');
		</script>
<?php
	}else {
?>
		<script>
		alert('Penyimpanan data gagal');
		</script>
<?php
}


function upload(){
	$namaFile = $_FILES["gambar"]["name"];
	$ukuranFile = $_FILES["gambar"]["size"];
	$error = $_FILES["gambar"]["error"];
	$tmp = $_FILES["gambar"]["tmp_name"];

	if ($error === 4) {
		echo "<script>
		alert('Silahkan Upload Gambar Terlebih Dahulu...!!!');
		</script>";

		return false;
	}

	$ekstensiValid  = ['jpg', 'jpeg', 'png'];
	$ekstensiFoto = explode('.', $namaFile);
				// explode untuk memcah string rifqi.jpg menjadi ['rifqi', 'jpg']

	$ekstensiFoto = strtolower(end($ekstensiFoto)); 
				// Memecah File 
				// strtolower() untuk mengatasi penulisan "rifqi.JPG"
				// end untuk mengambil ekstensi paling akhir dan menghindari penulisan "rifqi.rosyidi.jpg"
				

	if ( !in_array( $ekstensiFoto, $ekstensiValid) ) {
		echo "<script>
				alert('Yang Anda Upload Bukan Gambar');
			</script>";

		return false;
	}

	if ( $ukuranFile >  5000000 ) { //satuan bit = 5mb
		echo "<script>
				alert('Ukuran Gambar Yang Anda Masukkan Terlalu Besar');
			</script>";

		return false;
	}

	// Menghidari Nama File Yang Sama
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFoto;


	// Gambar Siap Di Upload

	move_uploaded_file($tmp, 'img/'.$namaFileBaru); //direktori dari file sekarang
	return $namaFileBaru;



}



?>
<meta http-equiv="refresh" content="0;url=handphone.php"/>
