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
    $queridata = mysql_query(" SELECT * FROM handphone WHERE id = '$id' ");
    while( $hasil = mysql_fetch_assoc($queridata)){ 
    $nama = $hasil['nama'];
    $cpu = $hasil['cpu'];
    $gpu = $hasil['gpu'];
    $storage = $hasil['storage'];
    $kamera = $hasil['kamera'];
    $kamera_depan = $hasil['kamera_depan'];
    $os = $hasil['os'];
    $rom = $hasil['rom'];
    $ram = $hasil['ram'];
    $layar = $hasil['layar'];
    $baterai = $hasil['baterai'];
    $fitur = unserialize($hasil['fitur']);
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
            <li ><a href="#"><i class="far fa-edit men"></i>Ubah Data</a></li>
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
            <form action="proses_ubah_hp.php" method="post" enctype="multipart/form-data">
              
              <table border="0" style="padding-bottom:20px; margin-left: 50px;">

              <input type = "hidden" name = "id" value = '<?php echo $id; ?>'>
              <input type="hidden" name="gambarlama" value="<?php echo $gambar; ?>">

              <tr>
                <td>
                Nama Smartphone    
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
                GPU
                </td>
                <td class="bariss">:</td>
                <td> <input type="text" name="gpu" size="40px" value="<?php echo $gpu ?>"><br/> </td>
              </tr>
              <tr>
                <td>
                Kamera Belakang
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="kamera" size="40px" value="<?php echo $kamera ?>"><br/></td>
              </tr>
              <tr>
                <td>
                Kamera Depan
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="kamera_depan" size="40px" value="<?php echo $kamera_depan ?>"><br/></td>
              </tr>
              <tr>
                <td>
                  Memory
                </td>
               <td  class="bariss">:</td>
                <td>
                  <Select name="ram">
                  <option value="1 GB" <?php if($ram == '1 GB'){ echo 'selected'; } ?>>1 GB</option>
                  <option value="2 GB" <?php if($ram == '2 GB'){ echo 'selected'; } ?>>2 GB</option>
                  <option value="3 GB" <?php if($ram == '3 GB'){ echo 'selected'; } ?>>3 GB</option>
                  <option value="4 GB" <?php if($ram == '4 GB'){ echo 'selected'; } ?>>4 GB</option>
                  <option value="6 GB" <?php if($ram == '6 GB'){ echo 'selected'; } ?>>6 GB</option>
                  </select>
                </td>
                
              </tr>

              <tr>
                <td>
                  Storage
                </td>
               <td  class="bariss">:</td>
                <td>
                  <Select name="storage">
                  <option value="8 GB" <?php if($storage == '8 GB'){ echo 'selected'; } ?>>8 GB</option>
                  <option value="16 GB" <?php if($storage == '16 GB'){ echo 'selected'; } ?>>16 GB</option>
                  <option value="32 GB" <?php if($storage == '32 GB'){ echo 'selected'; } ?>>32 GB</option>
                  <option value="64 GB" <?php if($storage == '64 GB'){ echo 'selected'; } ?>>64 GB</option>
                  </select>
                </td>
                
              </tr>
              <tr>
                <td>
                Android Version
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="os" size="40px" value="<?php echo $os ?>"><br/></td>
              </tr>
              <tr>
                <td>
                ROM
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="rom" size="40px" value="<?php echo $rom ?>"><br/></td>
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
                Fitur
                </td>
                <td class="bariss">:</td>
                <td><input type="checkbox" name="fitur[]" value="Fingerprint"
                    <?php foreach ($fitur as $key) {
                          if ($key == 'Fingerprint') {
                          echo 'checked';
                        }
                    } ?>
                > Fingerprint</br>
                    <input type="checkbox" name="fitur[]" value="Accelerometer"
                    <?php foreach ($fitur as $key) {
                          if ($key == 'Accelerometer') {
                          echo 'checked';
                        }
                    } ?>
                    > Accelerometer</br>
                    <input type="checkbox" name="fitur[]" value="Gyroscop"
                    <?php foreach ($fitur as $key) {
                          if ($key == 'Gyroscop') {
                          echo 'checked';
                        }
                    } ?>
                    > Gyroscop</br>
                    <input type="checkbox" name="fitur[]" value="Proximity"
                    <?php foreach ($fitur as $key) {
                          if ($key == 'Proximity') {
                          echo 'checked';
                        }
                    } ?>
                    > Proximity</br>
                    <input type="checkbox" name="fitur[]" value="Compass"
                    <?php foreach ($fitur as $key) {
                          if ($key == 'Compass') {
                          echo 'checked';
                        }
                    } ?>
                    > Compass</br>
                </td>
              </tr>
              <tr>
                <td>
                Harga
                </td>
                <td class="bariss">:</td>
                <td><input type="text" name="harga" size="40px" value="<?php echo $harga ?>"><br/></td>
              </tr>
              <tr>
                <td>
                Gambar
                </td>
                <td class="bariss">:</td>
                <td><input type="file" name="gambar" id="fileToUpload"><br/></td>
              </tr>
              <tr>
                <td colspan="3" align="center" ><button type="submit" name="tombol" style="margin-left:50px; margin-top:15px; margin-bottom:15px; border:0; background: linear-gradient(0deg, #00085f,#0024ed,#7678ff); color:white; height: 50px ">Ubah Data</button></td>
              </tr>
            </table>

        </form>
      </div>



      </div>

    </div>
  </div>
</div>
</body>
</html>