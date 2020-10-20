<?php 
	session_start();

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
            <li ><a href="ubah.php"><i class="far fa-edit men"></i>Ubah Data</a></li>
            <li class="active"><a href="tambah_data.php"><i class="fas fa-plus-square men"></i>Tambah Data</a></li>
            <li><hr size="1px" width="100%" style="margin-top: 10px; margin-bottom: 10px;"></hr></li>
            <li ><a href="akun.php" style="margin-bottom: 10px;"><i class="fas fa-user men"></i>Account</a></li>
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
        <div class="col-md-12" style="margin-top:15px; margin-bottom:20px; text-align:center;">
          <h2>Tambah Data</h2>
        </div>
          <div>
            <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
              
              <table border="0" style="padding-bottom:20px; margin-left: 50px;">

              <tr>
                <td>
                Nama Laptop    
                </td>
                <td class="bariss">:</td>
                <td> <input type="text" name="nama" size="40px"><br/> </td>
              </tr>
              <tr>
                <td>
                Prosesor   
                </td>
                <td class="bariss">:</td>
                <td> <input type="text" name="cpu" size="40px"><br/> </td>
              </tr>
              <tr>
                <td>
                Grafis
                </td>
                <td class="bariss">:</td>
                <td> <input type="text" name="gpu" size="40px"><br/> </td>
              </tr>
              <tr>
                <td>
                Storage
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="hdd" size="40px"><br/></td>
              </tr>
              <tr>
                <td>
                Windows Version
                </td>
                <td class="bariss">:</td>
                <td><input type="radio" name="os" value="Windows 7" checked> Windows 7  
                    <input type="radio" name="os" value="Windows 8"> Windows 8  
                    <input type="radio" name="os" value="Windows 10"> Windows 10  
                </td>
              </tr>
              <tr>
                <td>
                  Memory
                </td>
               <td  class="bariss">:</td>
                <td>
                  <Select name="ram">
                  <option value="2 GB" selected>2 GB</option>
                  <option value="4 GB">4 GB</option>
                  <option value="8 GB">8 GB</option>
                  <option value="16 GB">16 GB</option>
                  <option value="32 GB">32 GB</option>
                  <option value="64 GB">64 GB</option>
                  </select>
                </td>
                
              </tr>
              <tr>
                <td>
                Layar
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="layar" size="40px"><br/></td>
              </tr>
              <tr>
                <td>
                Baterai
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="baterai" size="40px"><br/></td>
              </tr>
              <tr>
                <td style="text-align:top">
                Konektivitas
                </td>
                <td class="bariss">:</td>
                <td><input type="checkbox" name="konek[]" value="Wifi"> Wifi<br/>
                    <input type="checkbox" name="konek[]" value="Bluetooth"> Bluetooth</br>
                    <input type="checkbox" name="konek[]" value="fingerprint"> Fingerprint
                </td>
              </tr>
              <tr>
                <td>
                Harga
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="harga" size="40px"><br/></td>
              </tr>
              <tr>
                <td>
                Gambar
                </td>
                <td class="bariss">:</td>
                <td><input type="file" name="gambar" id="fileToUpload"><br/></td>
              </tr>
            </table>
            <button type="submit" name="tombol" style="margin-left:50px; margin-top:10px; border:0; background: linear-gradient(0deg, #00085f,#0024ed,#7678ff); color:white; height: 50px ">Tambah Data</button>

        </form>
      </div>



  		</div>

  	</div>
  </div>
</div>
</body>
</html>