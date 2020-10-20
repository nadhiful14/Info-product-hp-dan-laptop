<?php 
	session_start();

	if(!isset($_SESSION['login'])){
		echo "<script>
				alert('Silahkan login terlebih dahulu');
				document.location.href='login.php';
			</script>";
	}

  include 'Database.php';

  $id = $_GET['id'];

  
  $queridata = mysql_query(" SELECT * FROM laptop WHERE id = '$id' ");
 
  $laptop = []; //membuat array kosong
  while( $hasil = mysql_fetch_assoc($queridata)){ //perulangan data
  $laptop[] = $hasil; //tambahkan data
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
			<div class="col-md-12 col-sm-12 jdul" style="margin-top:15px; margin-bottom:20px; text-align:center;">
      <?php foreach ($laptop as $lepi) : ?>
				
        <h2><?php echo $lepi['nama']; ?></h2>

			</div>

			<div class="col-md-7 col-sm-7 col-xs-7 konteen">

          <div>
            <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
              
              <table id="tabel" border="1" style="padding-bottom:20px; margin-left: 20px; ">

              <tr width="100%" style="background:#54a5ff; padding:10px">
                <td class="baris" colspan="3" style="border: 1px solid #54a5ff; color:white; padding:12px 18px">SPESIFIKASI</td>
              </tr>

              <tr>
                <td>
                Nama Laptop    
                </td>
                <td class="baris" ><?php echo $lepi['nama']; ?><br/> </td>
              </tr>

              <tr>

                <td>
                Prosesor   
                </td>
                <td class="baris"><?php echo $lepi['cpu']; ?><br/></td>
              </tr>
              <tr>
                <td>
                Grafis
                </td>
                <td class="baris"> <?php echo $lepi['gpu']; ?></td>
              </tr>
              <tr>
                <td>
                Storage
                </td>
                <td class="baris"><?php echo $lepi['hdd']; ?></td>
              </tr>
              <tr>
                <td>
                Windows Version
                </td>
                <td class="baris"><?php echo $lepi['os']; ?></td>
              </tr>
              <tr>
                <td>
                  Memory
                </td>
               <td  class="baris"><?php echo $lepi['ram']; ?> GB</td>
                
              </tr>

              <tr>
                <td>
                Layar
                </td>
                <td class="baris"><?php echo $lepi['layar']; ?></td>
              </tr>

              <tr>
                <td>
                Baterai
                </td>
                <td class="baris"><?php echo $lepi['baterai']; ?></td>
              </tr>
              <tr>
                <td style="text-align:top">
                Konektivitas
                </td>
                <td class="baris"><?php $chk = unserialize($lepi['konektifitas']);
                    foreach ($chk as $key) { 
                    echo "$key".", ";
                  }
                ?></td>
              </tr>
              <tr>
                <td>
                Harga
                </td>
                <td class="baris"><?php echo $lepi['harga']; ?></td>
              </tr>

            </table>

        </form>
      </div>


			</div>

			<div class="col-md-5 col-sm-5 col-xs-5 konteen" >
				<<img class="foto"  width="100%" height="300px" src="img/<?php echo $lepi["gambar"]?>">


			</div>


          

		</div>
    <?php endforeach; ?>


	</div>
</div>
</div>
</body>
</html>