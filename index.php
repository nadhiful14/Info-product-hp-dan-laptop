<?php 
	session_start();

	if(!isset($_SESSION['login'])){
		echo "<script>
				alert('Silahkan login terlebih dahulu');
				document.location.href='login.php';
			</script>";
	}

  include 'Database.php';

  $queridata = mysql_query("SELECT * FROM laptop");
  $laptop = []; //membuat array kosong
  while( $hasil = mysql_fetch_assoc($queridata)){ //perulangan data
  $laptop[] = $hasil; //tambahkan data
  }

  $queridatahp = mysql_query("SELECT * FROM handphone");
  $handphone = []; //membuat array kosong
  while( $hasilhp = mysql_fetch_assoc($queridatahp)){ //perulangan data
  $handphone[] = $hasilhp; //tambahkan data
  }



  $queridataasus = mysql_query("SELECT * FROM laptop WHERE nama LIKE '%asus%'");
  $asus = []; //membuat array kosong
  while( $hasilasus = mysql_fetch_assoc($queridataasus)){ //perulangan data
  $asus[] = $hasilasus; //tambahkan data
  }

  $queridataasuss = mysql_query("SELECT * FROM handphone WHERE nama LIKE '%asus%'");
  $asuss = []; //membuat array kosong
  while( $hasilasuss = mysql_fetch_assoc($queridataasuss)){ //perulangan data
  $asuss[] = $hasilasuss; //tambahkan data
  }
  


  $queridataacer = mysql_query("SELECT * FROM laptop WHERE nama LIKE '%acer%'");
  $acer = []; //membuat array kosong
  while( $hasilacer = mysql_fetch_assoc($queridataacer)){ //perulangan data
  $acer[] = $hasilacer; //tambahkan data
  }

  $queridataacerr = mysql_query("SELECT * FROM handphone WHERE nama LIKE '%acer%'");
  $acerr = []; //membuat array kosong
  while( $hasilacerr = mysql_fetch_assoc($queridataacerr)){ //perulangan data
  $acerr[] = $hasilacerr; //tambahkan data
  }


    $queridatalenovo = mysql_query("SELECT * FROM laptop WHERE nama LIKE '%lenovo%'");
  $lenovo = []; //membuat array kosong
  while( $hasillenovo = mysql_fetch_assoc($queridatalenovo)){ //perulangan data
  $lenovo[] = $hasillenovo; //tambahkan data
  }

  $queridatalenovoo = mysql_query("SELECT * FROM handphone WHERE nama LIKE '%lenovo%'");
  $lenovoo = []; //membuat array kosong
  while( $hasillenovoo = mysql_fetch_assoc($queridatalenovoo)){ //perulangan data
  $lenovoo[] = $hasillenovoo; //tambahkan data
  }


    $queridatami = mysql_query("SELECT * FROM handphone WHERE nama LIKE '%xiaomi%'");
  $mi = []; //membuat array kosong
  while( $hasilmi = mysql_fetch_assoc($queridatami)){ //perulangan data
  $mi[] = $hasilmi; //tambahkan data
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
            <li class="active"><a href="index.php"><i class="fas fa-home men"></i>Dashboard</a></li>
            <li ><a href="laptop.php"><i class="fas fa-laptop men"></i>Laptop</a></li>
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
            <form class="navbar-form navbar-left" action="/action_page.php" style="margin-top:12px; margin-bottom:11px; margin-left: 15px;">
            <div class="input-group" >
              <input type="text" class="form-control"  placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
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
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-stats" style="margin-top: 50px" >
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-laptop hm1"></i>
                  </div>
                  <p class="card-category">Data Laptop</p>
                  <h3 class="card-title">Total <?php echo count($laptop);?>
                    <small>Item</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">Warning </i>
                    <a href="tambah_data_laptop.php"> Add More Data...</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-stats" style="margin-top: 50px">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-mobile-alt hm1 hm1" style="width:100px;width: 88px; text-align: center;"></i>
                  </div>
                  <p class="card-category">Data Handphone</p>
                  <h3 class="card-title">Total <?php echo count($handphone);?>
                  <small>Item</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">Warning </i>
                    <a href="tambah_data_hp.php"> Add More Data...</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-stats" style="margin-top: 50px">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-home hm1"></i>
                  </div>
                  <p class="card-category">Total Data</p>
                  <h3 class="card-title">Total <?php echo count($handphone) + count($laptop);?>
                  <small>Item</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked Github
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12" id="asus">
              <div class="kotakjodol" style="background: linear-gradient(0deg, #8376ff,#a6b0ff,#dcddff);">
                <img class="loggo" src="img/asus.png" >
              </div>
              <div id="tampilasus">
                  <?php foreach($asus as $a) {  ?>
              <div class="col-md-6 col-sm-6 col-sx-6 listt">
                <div class="kartu"><a href="rog_g703.php?id=<?php echo $a["id"]?> ">
                  <img class="foto"  width="100%" height="120px" src="img/<?php echo $a["gambar"]?>">
                  <h4 class="merek" ><?php echo $a["nama"]; ?></h4>
                  <table border="0" width="100%">

                    <tr>
                      <td class="font_isi">VGA</td>
                      <td class="font_isi">: <?php echo $a["cpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">GPU</td>
                      <td class="font_isi">: <?php echo $a["gpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">RAM</td>
                      <td class="font_isi">: <?php echo $a["ram"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">Harga</td>
                      <td class="font_isi">: Rp. <?php echo $a["harga"]; ?></td>
                    </tr>
                  </table>
                  </a>
                  <table border="0" width="100%">
                    <tr>
                      <td><a href="ubah_data.php?id=<?php echo $a["id"]?>"><button type="button" class="btn btn-primary ubah" style="width:100%; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a></td>
                      <td> <a href="hapus_data.php?id=<?php echo $a["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger hapus" style="width:100%; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
                    </tr>
                  </table>
                </div>       
              </div>
              <?php } ?>


               <?php foreach($asuss as $a) {  ?>
              <div class="col-md-6 col-sm-6 col-sx-6 listt">
                <div class="kartu"><a href="rog_g703.php?id=<?php echo $a["id"]?> ">
                  <img class="foto"  width="100%" height="120px" src="img/<?php echo $a["gambar"]?>">
                  <h4 class="merek" ><?php echo $a["nama"]; ?></h4>
                  <table border="0" width="100%">

                    <tr>
                      <td class="font_isi">VGA</td>
                      <td class="font_isi">: <?php echo $a["cpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">GPU</td>
                      <td class="font_isi">: <?php echo $a["gpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">RAM</td>
                      <td class="font_isi">: <?php echo $a["ram"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">Harga</td>
                      <td class="font_isi">: Rp. <?php echo $a["harga"]; ?></td>
                    </tr>
                  </table>
                  </a>
                  <table border="0" width="100%">
                    <tr>
                      <td><a href="ubah_data.php?id=<?php echo $a["id"]?>"><button type="button" class="btn btn-primary ubah" style="width:100%; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a></td>
                      <td> <a href="hapus_data.php?id=<?php echo $a["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger hapus" style="width:100%; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
                    </tr>
                  </table>
                </div>       
              </div>
              <?php } ?>


            </div> 
            </div> 


            <div class="col-md-6 col-sm-12 col-xs-12" id="acer">
              <div class="kotakjodol" style="background: linear-gradient(0deg, #49ff36,#a7ff96,#d1ffd3);">
                <img class="loggo" src="img/acer.png" >
              </div>
              <div id="tampilacer">
                  <?php foreach($acer as $a) {  ?>
              <div class="col-md-6 col-sm-6 col-sx-6 listt">
                <div class="kartu"><a href="rog_g703.php?id=<?php echo $a["id"]?> ">
                  <img class="foto"  width="100%" height="120px" src="img/<?php echo $a["gambar"]?>">
                  <h4 class="merek" ><?php echo $a["nama"]; ?></h4>
                  <table border="0" width="100%">

                    <tr>
                      <td class="font_isi">VGA</td>
                      <td class="font_isi">: <?php echo $a["cpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">GPU</td>
                      <td class="font_isi">: <?php echo $a["gpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">RAM</td>
                      <td class="font_isi">: <?php echo $a["ram"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">Harga</td>
                      <td class="font_isi">: Rp. <?php echo $a["harga"]; ?></td>
                    </tr>
                  </table>
                  </a>
                  <table border="0" width="100%">
                    <tr>
                      <td><a href="ubah_data.php?id=<?php echo $a["id"]?>"><button type="button" class="btn btn-primary ubah" style="width:100%; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a></td>
                      <td> <a href="hapus_data.php?id=<?php echo $a["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger hapus" style="width:100%; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
                    </tr>
                  </table>
                </div>       
              </div>
              <?php } ?>


               <?php foreach($acerr as $a) {  ?>
              <div class="col-md-6 col-sm-6 col-sx-6 listt">
                <div class="kartu"><a href="rog_g703.php?id=<?php echo $a["id"]?> ">
                  <img class="foto"  width="100%" height="120px" src="img/<?php echo $a["gambar"]?>">
                  <h4 class="merek" ><?php echo $a["nama"]; ?></h4>
                  <table border="0" width="100%">

                    <tr>
                      <td class="font_isi">VGA</td>
                      <td class="font_isi">: <?php echo $a["cpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">GPU</td>
                      <td class="font_isi">: <?php echo $a["gpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">RAM</td>
                      <td class="font_isi">: <?php echo $a["ram"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">Harga</td>
                      <td class="font_isi">: Rp. <?php echo $a["harga"]; ?></td>
                    </tr>
                  </table>
                  </a>
                  <table border="0" width="100%">
                    <tr>
                      <td><a href="ubah_data.php?id=<?php echo $a["id"]?>"><button type="button" class="btn btn-primary ubah" style="width:100%; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a></td>
                      <td> <a href="hapus_data.php?id=<?php echo $a["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger hapus" style="width:100%; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
                    </tr>
                  </table>
                </div>       
              </div>
              <?php } ?>
              </div>
            </div> 
            </div> 



                  <div class="col-md-6 col-sm-12 col-xs-12" id="mi">
              <div class="kotakjodol" style="background: linear-gradient(0deg, #ff7925,#ffb289,#ffe0c2); margin-left: 10px;">
                <img class="loggo" src="img/xiaomi.png"  style="margin: 18px 205px;width: 63px;">
              </div>
              <div id="tampilmi">
                  <?php foreach($mi as $a) {  ?>
              <div class="col-md-6 col-sm-6 col-sx-6 listt">
                <div class="kartu"><a href="rog_g703.php?id=<?php echo $a["id"]?> ">
                  <img class="foto"  width="100%" height="120px" src="img/<?php echo $a["gambar"]?>">
                  <h4 class="merek" ><?php echo $a["nama"]; ?></h4>
                  <table border="0" width="100%">

                    <tr>
                      <td class="font_isi">VGA</td>
                      <td class="font_isi">: <?php echo $a["cpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">GPU</td>
                      <td class="font_isi">: <?php echo $a["gpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">RAM</td>
                      <td class="font_isi">: <?php echo $a["ram"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">Harga</td>
                      <td class="font_isi">: Rp. <?php echo $a["harga"]; ?></td>
                    </tr>
                  </table>
                  </a>
                  <table border="0" width="100%">
                    <tr>
                      <td><a href="ubah_data.php?id=<?php echo $a["id"]?>"><button type="button" class="btn btn-primary ubah" style="width:100%; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a></td>
                      <td> <a href="hapus_data.php?id=<?php echo $a["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger hapus" style="width:100%; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
                    </tr>
                  </table>
                </div>       
              </div>
              <?php } ?>


            </div> 
            </div> 



            <div class="col-md-6 col-sm-12 col-xs-12" id="lenovo">
              <div class="kotakjodol" style="background: linear-gradient(0deg, #8376ff,#a6b0ff,#dcddff); width: 465px;">
                <img class="loggo" src="img/lenovo.png" style="margin: 31px 158px;width: 181px;height: 32px;">
              </div>
              <div id="tampillenovo">
                  <?php foreach($lenovo as $a) {  ?>
              <div class="col-md-6 col-sm-6 col-sx-6 listt">
                <div class="kartu"><a href="rog_g703.php?id=<?php echo $a["id"]?> ">
                  <img class="foto"  width="100%" height="120px" src="img/<?php echo $a["gambar"]?>">
                  <h4 class="merek" ><?php echo $a["nama"]; ?></h4>
                  <table border="0" width="100%">

                    <tr>
                      <td class="font_isi">VGA</td>
                      <td class="font_isi">: <?php echo $a["cpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">GPU</td>
                      <td class="font_isi">: <?php echo $a["gpu"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">RAM</td>
                      <td class="font_isi">: <?php echo $a["ram"]; ?></td>
                    </tr>
                    <tr>
                      <td class="font_isi">Harga</td>
                      <td class="font_isi">: Rp. <?php echo $a["harga"]; ?></td>
                    </tr>
                  </table>
                  </a>
                  <table border="0" width="100%">
                    <tr>
                      <td><a href="ubah_data.php?id=<?php echo $a["id"]?>"><button type="button" class="btn btn-primary ubah" style="width:100%; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a></td>
                      <td> <a href="hapus_data.php?id=<?php echo $a["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger hapus" style="width:100%; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
                    </tr>
                  </table>
                </div>       
              </div>
              <?php } ?>








          

		</div>


	</div>
</div>
</div>
<script src="script.js"></script>
</body>
</html>