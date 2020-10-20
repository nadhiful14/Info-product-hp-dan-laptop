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
  while( $hasil = mysql_fetch_assoc($queridata)){ 
    $nama = $hasil['nama'];
    $cpu = $hasil['cpu'];
    $gpu = $hasil['gpu'];
    $hdd = $hasil['hdd'];
    $os = $hasil['os'];
    $ram = $hasil['ram'];
    $layar = $hasil['layar'];
    $baterai = $hasil['baterai'];
    $konek = unserialize($hasil['konektifitas']);
    $harga = $hasil['harga'];
    $gambar = $hasil['gambar'];


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
            <li class="active"><a href="#"><i class="far fa-edit men"></i>Ubah Data</a></li>
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
  			    <form class="navbar-form navbar-left" action="/action_page.php" style="margin-top:12px; margin-bottom:11px">
  				  <div class="input-group" >
  				    <input type="text" class="form-control"  placeholder="Search">
  				    <div class="input-group-btn">
  				      <button class="btn btn-default" type="submit">
  				        <i class="fas fa-search"></i>
  				      </button>
  				    </div>
  				  </div>
  				</form>
  		      <li class="logout" style="margin-top:5px; margin-bottom:5px"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
  		    </ul>
  		  </div>
  		</nav> 


  		<div class="jarak">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:20px; text-align:center;">
          <h2>Ubah Data</h2>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7">
          <div>
            <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
              
              <table border="0" style="padding-bottom:20px; margin-left: 50px;">

              <input type = "hidden" name = "id" value = '<?php echo $id; ?>'>
              <input type="hidden" name="gambarlama" value="<?php echo $gambar; ?>">

              <tr>
                <td>
                Nama Laptop    
                </td>
                <td class="bariss">:</td>
                <td> <input type="text" name="nama" size="40px" value="<?php echo $nama ?>"><br/> </td>
              </tr>
              <tr>
                <td>
                Prosesor   
                </td>
                <td class="bariss">:</td>
                <td> <input type="text" name="cpu" size="40px" value="<?php echo $cpu ?>"><br/> </td>
              </tr>
              <tr>
                <td>
                Grafis
                </td>
                <td class="bariss">:</td>
                <td> <input type="text" name="gpu" size="40px" value="<?php echo $gpu ?>"><br/> </td>
              </tr>
              <tr>
                <td>
                Storage
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="hdd" size="40px" value="<?php echo $hdd ?>"><br/></td>
              </tr>
              <tr>
                <td>
                Windows Version
                </td>
                <td class="bariss">:</td>
                <td><input type="radio" name="os" value="Windows 7"<?php if($os == 'Windows 7'){
                  echo "checked";
                  } ?> > Windows 7  
                    <input type="radio" name="os" value="Windows 8" <?php if($os == 'Windows 8'){
                      echo "checked";
                  } ?>> Windows 8  
                    <input type="radio" name="os" value="Windows 10" <?php if($os == 'Windows 10'){
                  echo "checked";
                  } ?>> Windows 10  
                </td>
              </tr>
              <tr>
                <td>
                  Memory
                </td>
               <td  class="bariss">:</td>
                <td>
                  <Select name="ram">
                  <option value="2" <?php if($ram == '2'){ echo 'selected'; } ?>>2 GB</option>
                  <option value="4" <?php if($ram == '4'){ echo 'selected'; } ?>>4 GB</option>
                  <option value="8" <?php if($ram == '8'){ echo 'selected'; } ?>>8 GB</option>
                  <option value="16" <?php if($ram == '16'){ echo 'selected'; } ?>>16 GB</option>
                  <option value="32"<?php if($ram == '32'){ echo 'selected'; } ?>>32 GB</option>
                  <option value="64" <?php if($ram == '64'){ echo 'selected'; } ?>>64 GB</option>
                  </select>
                </td>
                
              </tr>
              <tr>
                <td>
                Layar
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="layar" size="40px" value="<?php echo $layar ?>"><br/></td>
              </tr>
              <tr>
                <td>
                Baterai
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="baterai" size="40px" value="<?php echo $baterai ?>"><br/></td>
              </tr>
              <tr>
                <td style="text-align:top">
                Konektivitas
                </td>
                <td class="bariss">:</td>
                <td><input type="checkbox" name="konek[]" value="Wifi" 
                <?php foreach ($konek as $key) {
                          if ($key == 'Wifi') {
                          echo 'checked';
                        }
                    } ?>> Wifi<br/>

                    <input type="checkbox" name="konek[]" value="Bluetooth"
                    <?php foreach ($konek as $key) {
                          if ($key == 'Bluetooth') {
                          echo 'checked';
                        }
                    } ?>> Bluetooth</br>

                    <input type="checkbox" name="konek[]" value="Fingerprint" 
                    <?php foreach ($konek as $key) {
                          if ($key == 'Fingerprint') {
                          echo 'checked';
                        }
                    } ?>> Fingerprint
                </td>

              </tr>
              <tr>
                <td>
                Harga
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="harga" size="40px" value='<?php echo $harga ?>'><br/></td>
              </tr>
              <tr>
                <td>
                Gambar
                </td>
                <td class="bariss">:</td>
                <td><input type="file" name="gambar" id="fileToUpload"><br/></td>
              </tr>
            </table>

            <button type="submit" name="tombol" style="margin-left:50px; margin-top:10px; border:0; background: linear-gradient(0deg, #00085f,#0024ed,#7678ff); color:white; height: 50px ">Ubah Data</button>

        </form>
      </div>
      </div>

      <div class="col-md-5 col-sm-5 col-xs-5 konteen" >
        <img class="foto edit"  width="100%" height="300px" src="img/<?php echo $gambar; ?>">


      </div>



  		</div>

  	</div>
  </div>
</div>
</body>
</html>