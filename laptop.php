<?php 
	session_start();

  include 'Database.php';

	if(!isset($_SESSION['login'])){
		echo "<script>
				alert('Silahkan login terlebih dahulu');
				document.location.href='login.php';
			</script>";
	}

  if (isset($_POST['cari'])) {

    $katakunci = $_POST['kata'];

    $queridata = mysql_query("SELECT * FROM laptop WHERE nama LIKE '%$katakunci%'");

  $laptop = []; //membuat array kosong
  while( $hasil = mysql_fetch_assoc($queridata)){ //perulangan data
  $laptop[] = $hasil; //tambahkan data
  }
    
  }else{

  $queridata = mysql_query("SELECT * FROM laptop");

  $laptop = []; //membuat array kosong
  while( $hasil = mysql_fetch_assoc($queridata)){ //perulangan data
  $laptop[] = $hasil; //tambahkan data
  }

  }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Q-Tech Malang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="gambar">


<div class="row remove">

	<div class="col-md-3 klor" >
		<nav class="navbar navbar-inverse clor">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand merek" href="index.php" style="color: #fff">Q-Tech Malang</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-left navig">
            <li><hr size="1px" width="100%" style="margin-top: -5px; margin-bottom: 10px;"></hr></li>
            <li ><a href="index.php"><i class="fas fa-home men"></i>Dashboard</a></li>
            <li class="active"><a href="laptop.php"><i class="fas fa-laptop men"></i>Laptop</a></li>
            <li ><a href="handphone.php"><i class="fas fa-mobile-alt men"></i>Handphone</a></li>
            <li ><a href="ubah.php"><i class="far fa-edit men"></i>Ubah Data</a></li>
            <li ><a href="tambah_data.php"><i class="fas fa-plus-square men"></i>Tambah Data</a></li>
            <li><hr size="1px" width="100%" style="margin-top: 10px; margin-bottom: 10px;"></hr></li>
            <li ><a href="akun.php"><i class="fas fa-user men"></i>Account</a></li>
          </ul>
        </div>
      </div>
    </nav>

	</div>


	<div class="col-md-9 rmvpad">	
		<nav class="navbar navbar-inverse line">
		  <div class="container-fluid clr">
		  	<p style="display:inline-block; line-height:60px; margin-bottom:0px; margin-left: 20px;"></i>Account : <?php echo $_SESSION ['username']; ?></a></p>
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" action="laptop.php" method="POST" style="margin-top:12px; margin-bottom:11px; margin-left: 15px;">
            <div class="input-group" >
              <input type="text" class="form-control" name="kata" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-default" name="cari" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
            <li class="logout" style="margin-top:5px; margin-bottom:0px; margin-left: 15px "><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </ul>
		  </div>
		</nav> 


		<div class="jarak">
    <?php foreach($laptop as $lepi) {  ?>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
        <div class="kartu"><a href="rog_g703.php?id=<?php echo $lepi["id"]?> ">
          <img class="foto"  width="100%" height="120px" src="img/<?php echo $lepi["gambar"]?>">
          <h4 class="merek" ><?php echo $lepi["nama"]; ?></h4>
          <table border="0" width="100%">

            <tr>
              <td class="font_isi">VGA</td>
              <td class="font_isi">: <?php echo $lepi["cpu"]; ?></td>
            </tr>
            <tr>
              <td class="font_isi">GPU</td>
              <td class="font_isi">: <?php echo $lepi["gpu"]; ?></td>
            </tr>
            <tr>
              <td class="font_isi">RAM</td>
              <td class="font_isi">: <?php echo $lepi["ram"]; ?></td>
            </tr>
            <tr>
              <td class="font_isi">Harga</td>
              <td class="font_isi">: Rp. <?php echo $lepi["harga"]; ?></td>
            </tr>
          </table>
          </a>
          <table border="0" width="100%">
            <tr>
              <td><a href="ubah_data.php?id=<?php echo $lepi["id"]?>"><button type="button" class="btn btn-primary ubah" style="width:100%; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a></td>
              <td> <a href="hapus_data.php?id=<?php echo $lepi["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger hapus" style="width:100%; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
            </tr>
          </table>
        </div>       
      </div>
      <?php } ?>
            
          

		</div>


	</div>
</div>
</div>
</body>
</html>