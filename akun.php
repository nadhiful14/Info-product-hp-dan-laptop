<?php 
	session_start();

	if(!isset($_SESSION['login'])){
		echo "<script>
				alert('Silahkan login terlebih dahulu');
				document.location.href='login.php';
			</script>";
	}

  include 'Database.php';

    $queridata = mysql_query("SELECT * FROM login");
  $login = []; //membuat array kosong
  while( $hasil = mysql_fetch_assoc($queridata)){ //perulangan data
  $login[] = $hasil; //tambahkan data
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
            <li ><a href="tambah_data.php"><i class="fas fa-plus-square men"></i>Tambah Data</a></li>
            <li><hr size="1px" width="100%" style="margin-top: 10px; margin-bottom: 10px;"></hr></li>
            <li class="active"><a href="akun.php"><i class="fas fa-user men"></i>Account</a></li>
          </ul>
        </div>
      </div>
    </nav>

	</div>


	<div class="col-md-9 rmvpad">	
		<nav class="navbar navbar-inverse line">
		  <div class="container-fluid clr">
		  	<p style="display:inline-block; line-height:60px; margin-bottom:0px"></i>Account : <?php echo $_SESSION ['username']; ?></a></p>
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
        <div class="col-md-12" style="margin: 44px 44px;width: 500px;">
      
              <fieldset>
                <legend>Your Account</legend>
                <table border="0">
                
                  <tr>
                    <td width="100px" style="padding: 15px 0px;">Nama</td>
                    <td><?php echo $_SESSION ['username']; ?></td>
                  </tr>
                  <tr>
                    <td width="100px">Email</td>
                    <td><?php echo $_SESSION ['email']; ?></td>
                  </tr>
                
                </table>
              </fieldset>
          </div>


      




          

		</div>


	</div>
</div>
</div>
</body>
</html>