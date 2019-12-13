<!DOCTYPE html>
<html lang="en">
<head>
	<title>smkn2langsa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="portal_utama/css/bootstrap.css">
	<link rel="stylesheet" href="portal_utama/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
    #container{
      height: 100vh; background-image: url(images/background.png); background-position: center center;
    }
    @media screen and (max-width: 1000px){
      #container{
        background-position: left;
      }
    }
    @media screen and (max-width: 510px){
      #container{
        height: 810px;
        background-position: left;
      }
      #atas{
        background-color: #020028;
      }
      #atas #menuu{
        font-size: 9pt;
      }
      #kiri{width: 100%;}
      #kanann{
        width: 100%;
      }
      #logout{
        margin-left: 15px;
      }
    }
	</style>
</head>
<body>

  <div class="container-fluid" id="container">
    <div class="container" style="padding-top: 140px; ">
    	<div class="card-deck" style="text-align: center; max-width: 520px; margin: auto; padding: 20px 10px 20px 10px; background-color: #ffffff44;">
      <div class="card-deck" style="text-align: center; width: 100%; margin: auto;">
	  <div class="card">
	    <div class="card-body">
	    	<div class="card-footer">
		      <small class="text-muted"><h5 class="card-title">Form Login</h5></small>
		    </div><br>
	      
	      <p class="card-text">
	      	<?php  
				if(isset($_GET['pesan'])){
					if($_GET['pesan'] == "gagal"){
						echo "<font color='red'>Login Gagal !  Username atau Password salah!</font>";
					}else if($_GET['pesan'] == "logout"){
						echo "<font color='green'>Anda Telah Berhasil Logout</font>";
					}else if($_GET['pesan'] == "belum_login"){
						echo "<font color='orange'>Anda harus login untuk mengakses halaman admin</font>";
					}
				}
			?></p>
			<p>
				<form action="" method="post">
					<input style="padding-top: 10px; padding-bottom: 10px;" class="container" type="text" name="username" placeholder="Masukkan Username" required="required"><br><br>
					<input style="padding-top: 10px; padding-bottom: 10px;" class="container" type="password" name="password" placeholder="Masukkan Password" required="required"><br><br>
					<input class="btn btn-primary" style="width: 100%;" type="submit" value="Sigin">
			</form>
			</p>
			<?php

			if($_SERVER['REQUEST_METHOD']=='POST'){
				//VARIABEL UNTUK MENYIMPAN KIRIMAN DARI FORM
				$username = $_POST['username'];
				$password = $_POST['password'];

				if($username=='' || $password==''){
					echo "Form belum lengkap";
				}else{
					include "koneksi.php";
					$sqlLogin = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
					$jml = mysqli_num_rows($sqlLogin);
					$data = mysqli_fetch_array($sqlLogin);

					if($jml > 0){
						session_start();

						if($data['level'] == "admin"){
							$_SESSION['login'] 	= true;
							$_SESSION['id']		= $data['idadmin'];
							$_SESSION['username']=$data['username'];
							$_SESSION['level'] = "admin";

							header("location:admin/index.php");
						}
						else if($data['level'] == "user"){
							$_SESSION['login'] 	= true;
							$_SESSION['id']		= $data['idadmin'];
							$_SESSION['username']=$data['username'];
							$_SESSION['level'] = "user";

							header("location:user/index.php");
						}
						else{
							header("location:login.php?pesan=gagal");
						}
					}else{
						header("location:login.php?pesan=gagal");
					}
				}
			}

			?>
	    </div>
	</div>
	    
	  </div>
	</div>



<script src="portal_utama/js/bootstrap.bundle.js"></script>
<script src="portal_utama/js/bootstrap.bundle.min.js"></script>
<script src="portal_utama/js/bootstrap.js"></script>
<script src="portal_utama/js/bootstrap.min.js"></script>
<script src="portal_utama/js/jquery.slim.min.js"></script>
<script src="portal_utama/bootstrap/js/dist/util.js"></script>
<script src="portal_utama/bootstrap/js/dist/carousel.js"></script>

</body>
</html>