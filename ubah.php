<?php 
	session_start();

  include 'Database.php';

	if(!isset($_SESSION['login'])){
		echo "<script>
				alert('Silahkan login terlebih dahulu');
				document.location.href='login.php';
			</script>";
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
            <li ><a href="laptop.php"><i class="fas fa-laptop men"></i>Laptop</a></li>
            <li ><a href="handphone.php"><i class="fas fa-mobile-alt men"></i>Handphone</a></li>
            <li class="active"><a href="ubah.php"><i class="far fa-edit men"></i>Ubah Data</a></li>
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="kartuu">
          <table id="tabell" border="0" cellspacing="0" cellpadding="7">

            <tr bgcolor='#ccc' style="background:#499fff;"">
              <th class="font_isii">Nama</th>
              <th class="font_isii">VGA</th>
              <th class="font_isii">GPU</th>
              <th class="font_isii">RAM</th>
              <th class="font_isii">Harga</th>
              <th class="font_isii">Action</th>
             
            </tr>
            <?php
              $queridata = mysql_query("SELECT * FROM laptop");
              $no=1;
              while( $hasil = mysql_fetch_assoc($queridata)){ //perulangan data
              ?>
            <tr>
              <td class="font_isii"><?php echo $hasil["nama"]; ?></td>
              <td class="font_isii"><?php echo $hasil["cpu"]; ?></td>
              <td class="font_isii"><?php echo $hasil["gpu"]; ?></td>
              <td class="font_isii"><?php echo $hasil["ram"]; ?></td>
              <td class="font_isii">Rp. <?php echo $hasil["harga"]; ?></td>
              <td ><a href="ubah_data.php?id=<?php echo $hasil["id"]?>"><button type="button" class="btn btn-primary" style="width:95px; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a>
                <a href="hapus_data.php?id=<?php echo $hasil["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger" style="width:95px; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
            </tr>
            <?php
            $no++;
            }?>

            <?php
              $queridataa = mysql_query("SELECT * FROM handphone");
              $no=1;
              while( $hasill = mysql_fetch_assoc($queridataa)){ //perulangan data
              ?>
            <tr>
              <td class="font_isii"><?php echo $hasill["nama"]; ?></td>
              <td class="font_isii"><?php echo $hasill["cpu"]; ?></td>
              <td class="font_isii"><?php echo $hasill["gpu"]; ?></td>
              <td class="font_isii"><?php echo $hasill["ram"]; ?></td>
              <td class="font_isii">Rp. <?php echo $hasill["harga"]; ?></td>
              <td ><a href="ubah_data.php?id=<?php echo $hasill["id"]?>"><button type="button" class="btn btn-primary" style="width:95px; margin-top:5px"><i class="fas fa-edit" style="width: 20px;"></i>Ubah</button></a>
                <a href="hapus_data.php?id=<?php echo $hasill["id"]?>"> <button onclick="return confirm('hapus?');" type="button" class="btn btn-danger" style="width:95px; margin-top:5px"><i class="fas fa-trash-alt" style="width: 20px;"></i>Hapus</button></a></td>
            </tr>
            <?php
            $no++;
            }?>


          </table>
          </a>

        </div>       
      </div>
            
          

		</div>


	</div>
</div>
</div>
</body>
</html>