<!DOCTYPE html>
<html lang="en">
<head>
	<title>smkn2langsa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="portal_utama/css/bootstrap.css">
	<link rel="stylesheet" href="portal_utama/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
    h5#judulbawah{margin: 0; padding: 0; color: white; font-size: 33pt; font-weight: 700;}
    #judulatas{margin: 0; padding: 0; color: white; font-size: 23pt;}
    #isimisi{color: white; font-size: 12pt;}
    .kiri{width: auto; float: left;}
    .kanann{width: auto; float: right;}
    #menuu{font-family: sans-serif; font-size: 10pt;}
    #atas{padding-top: .9%; padding-bottom: .5%; position: fixed;}
    #index{font-family: Cambria; color: #eee; font-family: sans-serif; font-size: 15pt; font-weight: 600;}
    #logout{font-family: Cambria; float: right; color: #eee; margin-left: 30px;}
    #index:hover,#logout:hover{color: white; text-decoration: underline;}
    #container{
      height: 100vh;
      background-image: url(images/background.png);
      background-position: center center;
    }
    
    @media screen and (max-width: 1000px){
      #container{background-position: left;}
    
    }

    @media screen and (max-width: 770px){
      #container{height: 100vh;}
      h5#judulbawah{margin: 0; padding: 0; color: white; font-size: 28pt; font-weight: 700;}
      #judulatas{margin: 0; padding: 0; color: white; font-size: 18pt;}
      #isimisi{color: white; font-size: 10pt;}
      .kanann #logout #menuu{font-size: 8pt; }
      .kanann #logout {margin-left: 20px;}
    }

    @media screen and (max-width: 510px){
      #container{height: 100vh;background-position: left;}
      #atas{}
      .kanann #logout #menuu{font-size: 8pt;}
      .kiri{width: 100%; margin: auto;}
      .kiri #index{text-align: center; margin: auto;}
      .kanann{width: 100%;}
      #logout{margin-left: 15px;}
      #index{font-family: sans-serif; font-size: 15pt; font-weight: 600;}
      h5#judulbawah{margin: 0; padding: 0; color: white; font-size: 23pt; font-weight: 700;}
      #judulatas{margin: 0; padding: 0; color: white; font-size: 13pt;}
      #isimisi{color: white; font-size: 8pt;}
    }
	</style>
</head>
<body>

  <div class="container-fluid" id="atas">
      <div class="container">
        <div class="kiri">
          <a class="navbar-brand" id="index" href="index.php">
            <img src="images/SMKN 2 LANGSA.png" width="30px" style="margin-right: 10px;">
            <font>SMK Negeri 2 Langsa</font>
          </a>
        </div>
        <div class="kanann">
          <a class="btn btn-primary" id="logout" href="login.php">
            <font id="menuu">LOGIN</font>
          </a>
          <a class="navbar-brand" id="logout" href="lsp/index.php">
            <font id="menuu">LSP</font>
          </a>
          <a class="navbar-brand" id="logout" href="bkk/index.php">
            <font id="menuu">BKK</font>
          </a>
          <a class="navbar-brand" id="logout" href="ppdb.php">
            <font id="menuu">PPDB</font>
          </a>
          <a class="navbar-brand" id="logout" href="kurikulum/index.php">
            <font id="menuu">KURIKULUM</font>
          </a>
          <a class="navbar-brand" id="logout" href="portal_utama/index.php">
            <font id="menuu">PORTAL UTAMA</font>
          </a>
        </div>
      </div>
    </div>

  <div class="container-fluid" id="container">
    <div class="container" style="padding-top: 140px; ">

      <div class="row">
        <div class="col-md-12">
          <p class="card-text" id="judulatas">SEKOLAH MENENGAH KEJURUAN</p>
            <h5 class="card-title" id="judulbawah">SMK NEGERI 2 LANGSA</h5>
        </div>
      </div>

    <!--   <div class="media" style="padding: 0;">
          <div class="card-body" style="margin: 0; padding: 0;">
            
              <p class="card-text" style="margin: 0; padding: 0; color: white; font-size: 15pt;"><b>Misi</b></p>
              <p style="margin: 0; color: white;">
                <ul id="isimisi">
                  <?php  
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * from tbl_misi");
                    while($data=mysqli_fetch_array($sql)){
                  ?>
                  <li><?php echo $data['misi']; ?></li>
                  <?php } ?>
                </ul>
              </p>
          </div>
      </div> -->

      <a class="btn btn-primary"href="portal_utama/index.php">
        <font>Portal Utama</font>
      </a><br><br>

      <div class="card-footer" style="padding: 0; margin: 0;">
          <small class="text-muted" >
            <font style="color: white;">Jl. Jend. A. Yani Paya Bujok Seulemak Langsa Baro, Kota Langsa</font>
          </small>
      </div>
    </div>
  </div>

  <div class="mt-4 mb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12 rounded rounded-lg d-flex justify-content-center align-items-center" style="height: 150px; background-image: url('./images/background.png');">
          <b class="text-light">Lorem Ipsum</b>
        </div>
        <div class="col-md-4 col-xs-12">
          oke
        </div>
        <div class="col-md-4 col-xs-12">
          oke
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