<!DOCTYPE html>
<html lang="en">
<head>
	<title>smkn2langsa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
		.smallnavbarr{
			background-color: #39AE41;
			width: 100%;
			overflow: hidden;
			margin-bottom: 21px;
			font-family: Lato;
			font-weight: bold;
			float: left;
		}
		.smallnavbarr .left_menuu{
			width: auto;
			height: auto;
			margin-left: 109px;
			float: left;
		}
		.smallnavbarr .left_menuu ul {
			list-style: none;
			padding: 0;
			font-size: 10pt;
			margin: 0;
		}
		.smallnavbarr .left_menuu li a{
			text-decoration: none;
			color: white;
		}
		.smallnavbarr .left_menuu li{
			float: left;
			padding-right: 5px;
			padding-left: 5px;
			padding-top: 12px;
			padding-bottom: 12px;
		}
		.smallnavbarr .left_menuu li:hover{
			background-color: #1fafff;
		}
		/* [SLIDER] */
#slider,  #slider .slidee{
  max-width: 1148px;
  height: 250px;
  text-align: center;
}
#slider {
  overflow: hidden;
  margin: 0 auto;
  font-size: 1.2em;
  background: #fff;
}
#slider .containerr {
  position: relative;
  bottom: 0;
  right: 0;
  animation: slide-animation 30s infinite;
}
#slider .slidee {
  position: relative;
  box-sizing: border-box;
  padding: 10px 20px;
}

/* [ANIMATION] */
@keyframes slide-animation {
  0% { 
    opacity: 0;
    bottom: 0;
  }
  11% {
    opacity: 1;
    bottom: 0; 
  }
  22% { bottom: 100%; }
  33% { bottom: 100%; }
  44% { bottom: 200%; }
  55% { bottom: 200%; }
  66% { bottom: 300%; }
  77% { bottom: 300%; }
  88% {
    opacity: 1;
    bottom: 400%; 
  }
  100% {
    opacity: 0;
    bottom: 400%;
  }
}
	</style>
</head>
<body>

<?php include "header.php"; ?>

<div class="smallnavbarr">
		<div class="left_menuu">
			<ul>	
				<li>
					<a href="../index.php">Halaman Utama</a>
				</li>
				<li>
					<a href="#profil">Profil</a>
				</li>
				<li>
					<a href="#kompetensi">Kompetensi Keahlian</a>
				</li>
				<li>
					<a href="#visimisi">Visi Misi</a>
				</li>
				<li>
					<a href="#struktur">Struktur Organisasi</a>
				</li>
			</ul>
		</div>
	</div>

<div class="container" style="margin-top: 40px;">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide4.png" alt="First slide" style="max-width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="img/slide5.png" alt="Second slide" style="max-width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="img/slide1.png" alt="Third slide" style="max-width: 100%;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>

<br><br><br>
<div class="p-3 mb-2 bg-warning text-dark">Pengumuman....</div>

<div class="container" style="margin-top: 100px; border-top: 2px solid red; padding-top: 50px;">
	<h2 style="font-family: Cambria; font-size: 20pt; color: red;" >Berita Unggulan</h2>
	<hr>

	<div class="card-deck">
		<?php
			include "../koneksi.php";
			$produk =mysqli_query($koneksi, "SELECT * FROM tbl_beritaunggulan where kategori='aktif'");
			while ($hasil = mysqli_fetch_array($produk)){
		?>
	  <div class="card">
	    <img src="../images/<?php echo $hasil['foto']; ?>" class="card-img-top" />
	    <div class="card-body">
	      <h5 class="card-title"><?php echo $hasil['judul']; ?></h5>
	      <p class="card-text"><?php echo $hasil['nama']; ?></p>
	      <a href="berita_unggulan.php" class="btn btn-primary">Selengkapnya</a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted"><?php echo $hasil['tanggal']; ?></small>
	    </div>
	  </div>
	  <?php } ?>
	</div>
	<br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div class="container" style="margin-top: 30px; border-top: 2px solid green; padding-top: 50px;">
	<h2 style="font-family: Cambria; font-size: 20pt; color: green;" >Konten Terbaru</h2>
	<hr>

	<div class="card-deck">
		<?php
			include "../koneksi.php";
			$produk =mysqli_query($koneksi, "SELECT * FROM tbl_konten_terbaru where kategori='aktif'");
			while ($hasil = mysqli_fetch_array($produk)){
		?>
	  <div class="card">
	    <img src="../images/<?php echo $hasil['foto']; ?>" class="card-img-top" />
	    <div class="card-body">
	      <h5 class="card-title"><?php echo $hasil['judul']; ?></h5>
	      <p class="card-text"><?php echo $hasil['nama']; ?></p>
	      <a href="konten_terbaru.php" class="btn btn-primary">Selengkapnya</a>
	    </div>
	    <div class="card-footer">
	      <small class="text-muted"><?php echo $hasil['tanggal']; ?></small>
	    </div>
	  </div>
	  <?php } ?>
	</div>
	
	<br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div class="container" style="margin-top: 30px; border-top: 2px solid indigo; padding-top: 50px;">
	<div class="row">
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	      	<img src="img/toa.png">
	        <h5 class="card-title" style="color:indigo;">Pengumuman</h5>
	        <?php  
	  			include "../koneksi.php";
	  			$sql = mysqli_query($koneksi, "SELECT * from tbl_pengumuman");
	  			$no=1;
	  			while($data = mysqli_fetch_array($sql)){
	  		?>
	        <div class="card-body" >
	        	<p class="card-text">
		        	<font style="color: indigo; font-size: 40pt; font-family: sans-serif; float: left; margin-right: 16px;"><?php echo $no; ?></font>
		        	<p>
		        		<?php echo $data['pengumuman']; ?>
		        	</p>
		        </p>
	        </div>
	        <?php $no++; } ?>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	      	<img src="img/pesan.png">
	        <h5 class="card-title" style="color:orange;">Media Sosial</h5>
	        <a href="">
	        <div class="card-body">
	        	<p class="card-text">
		        	<font style="color: indigo; font-size: 40pt; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/twitter-box.png"></font>
		        	<p>
		        		Twitter SMk Negeri 2 Langsa.
		        	</p>
		        </p>
	        </div>
	        </a>
	        <a href="">
	        <div class="card-body">
	        	<p class="card-text">
		        	<font style="color: indigo; font-size: 40pt; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/facebook.png"></font>
		        	<p>
		        		Facebook SMK Negeri 2 Langsa.
		        	</p>
		        </p>
	        </div>
	        </a>
	        <a href="">
	        <div class="card-body">
	        	<p class="card-text">
		        	<font style="color: indigo; font-size: 40pt; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/ig.png"></font>
		        	<p class="text-secondary">
		        		Instagram SMK Negeri 2 Langsa.
		        	</p>
		        </p>
	        </div>
	        </a>
	        <a href="">
	        <div class="card-body">
	        	<p class="card-text">
		        	<font style="color: indigo; font-size: 40pt; font-family: sans-serif; float: left; margin-right: 16px;"><img src="img/yt.png"></font>
		        	<p class="text-danger">
		        		Youtube SMk Negeri 2 Langsa.
		        	</p>
		        </p>
	        </div>
	        </a>
	      </div>
	    </div>
	  </div>
	</div>
	<br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div class="container" style="margin-top: 30px; border-top: 2px solid indigo; padding-top: 50px;">
    <div class="card">
      <div class="card-body">
      	<img src="img/photo.png">
        <h5 class="card-title" style="color:#1144ff;">Gallery Foto</h5>

        <div class="card-deck">
			<?php
				include "../koneksi.php";
				$produk =mysqli_query($koneksi, "SELECT * FROM tbl_galery where kategori='aktif'");
				while ($hasil = mysqli_fetch_array($produk)){
			?>
		  <div class="card">
		    <img src="../images/<?php echo $hasil['foto']; ?>" class="card-img-top" />
		    <div class="card-body">
		      <h5 class="card-title"><?php echo $hasil['judul']; ?></h5>
		      <p class="card-text"><?php echo $hasil['nama']; ?></p>
		      <a href="galery.php" class="btn btn-primary">Selengkapnya</a>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted"><?php echo $hasil['tanggal']; ?></small>
		    </div>
		  </div>
		  <?php } ?>
		</div>
      </div>
    </div>
    <br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div class="container" style="margin-top: 30px; border-top: 2px solid gray; padding-top: 50px;" id="profil">
	<div class="container" style="background-image: url(img/smk2.jpg); width: 100%; height: 200px; background-size: 100%; background-position: top-center; ">
	</div>
    <div class="card-body">
      <h5 class="card-title">Profil SMK Negeri 2 Langsa</h5>
      <hr>
      <p class="card-text">
      	Sekolah ini didirikan pada tahun 1971 sebelumnya masih berstatus dibawah yayasan pemerintah Kabupaten Aceh Timur yang dipimpin oleh kepala sekolah Bapak Idris, kemudian status sekolah tersebut pada tahun 1975 berubah status menjadi sekolah Teknologi Menengah Filial Banda Aceh dibawah pimpinan Bapak Machran Rangkuti. BEC, di tahun 1976 status Filial ditingkatkan menjadi STM Negeri Langsa yang berlokasi di Jln. Ade Irma suryani hingga tahun 1978.
      </p>
      <p class="card-text">
      	Pada tahun 1979 sekolah tersebut pindah lokasi di Jln. Ahmad Yani, Paya Bujok Seulemak, Langsa yang diresmikan oleh mentri Pendidikan dan Kebudayaan Prof.Dr. Syarif Thajeb, sekolah tersebut diberi nama STM 80.
      </p>
      <p>
      	<ul>
      		<li>Bapak Ir. Sofian menjadi kepala sekolah dari tahun 1978 s/d 1992 dibawah pimpinan beliau sekolah tersebut mendapat peringkat 5 Nasional.</li>
      		<li>Bapak Drs. Abd. Razak menjadi kepala sekolah dari tahun 1992 hingga tahun 1997.</li>
      		<li>Drs. Ahmad As’adi dari tahun 1997 s/d tahun 2000.</li>
      		<li>Bapak Makmur L. S.Pd pada tahun 2000 sampai dengan tahun 2013, selama kepemimpinannya terdiri 5 bidang keahlian dengan 10 program keahlian sebelumnya, terjadi peningkatan dari tahun ke tahun menjadi 9 bidang keahlian dengan 20 program keahlian serta mengukir prestasi dari peringkat 5 Nasional sebelum kepemimpinannya menjadi peringkat 4 pada tahun 2002 hingga bertahan sampai tahun 2004.</li>
      	</ul>
      </p>
      <p class="card-text">
      	Selanjutnya di tahun 2005-2006 SMK Negeri 2 Langsa mengukir prestasi di LKS tingkat Nasional menjadi peringakat 1 Nasional dan telah berhasil menembus tingkat Internasional untuk skala Asia Tenggara dan Eropa (jepang dan jerman) dalam hal di rekrutnya siswa yang berperstasi untuk mengikuti pendidikan dari hasil LKS tingkat Nasional, untuk tingakt Provinsi masih tetap menjadi juara umum.
      </p>
      <p class="card-text">
      	Dari kepemimpinan beliau SMK Negeri 2 Langsa laju perkembangan dan didukung oleh personal hingga sekolah tersebut menjadi sekolah program besar dengan mengadopsi prinsip-prinsip manajemen mutu ISO 9001:2000 untuk tingkat Nanggroe Aceh Darussalam.
      </p>
      <p class="card-text">
      	Saat ini Negeri 2 Langsa di lanjutkan kepemimpinanya oleh Bapak Razali, S.Pd, MT berdasarkan SK Walikota No. Peg. 8211. 2/361/2013 pada tanggal 22 Oktober 2013 yang terdiri dari 14 kompetensi keahlian.
      </p>
    </div>
    <br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div class="container" style="margin-top: 30px; border-top: 2px solid gray; padding-top: 50px;" id="kompetensi">
	<div class="container" style="background-image: url(img/smk1.jpg); width: 100%; height: 200px; background-size: 100%; background-position: top-center; ">
	</div>
    <div class="card-body">
      <h5 class="card-title">Kompetensi Keahlian di SMK Negeri 2 Langsa</h5>
      <hr>
      <p class="card-text">
      	15 Kompetensi Keahlian di SMK Negeri 2 Langsa
      </p>
      <p>
      	<div class="table table-striped table-light">
						<table class="alt">
							<tr>
								<th>No</th>
								<th>Bidang Keahlian</th>
								<th>Program Keahlian</th>
								<th>Kompetensi Keahlian</th>
								<th>Keterangan</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Teknologi dan Rekayasa</td>
								<td>Teknologi Konstruksi dan Properti</td>
								<td>Konstruksi Gedung, Sanitasi dan Perawatan.</td>
								<td>4 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Bisnis Konstruksi dan Properti.</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Desain Pemodelan dan Informasi Bangunan.</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Teknik Ketenagalistrikan</td>
								<td>Teknik Instalasi Tenaga Listrik</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Teknik Pendingin dan Tata Udara</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Teknik Mesin</td>
								<td>Teknik Pemesinan</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Teknik Pengelasan</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Teknik Otomotif</td>
								<td>Teknik Kendaaraan Ringan</td>
								<td>3 Tahun</td>
							</tr>	
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Teknik dan Bisnis Sepeda Motor</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Teknik Elektronika</td>
								<td>Teknik Audio Video</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Teknik Elektronika Industri</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Teknik Mekatronika</td>
								<td>4 Tahun</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Teknologi Informasi dan Komunikasi</td>
								<td>Teknik Komputer dan Informatika</td>
								<td>Rekayasa Perangkat Lunak</td>
								<td>3 Tahun</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>Teknik Komputer dan Jaringan</td>
								<td>3 tahun</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Seni daan Industri Kreatif</td>
								<td>Seni Rupa</td>
								<td>Desain Interior dan Teknik Furnitur</td>
								<td>4 Tahun</td>
							</tr>
						</table>
      </p>
    </div>
    <br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div class="container" style="margin-top: 30px; border-top: 2px solid gray; padding-top: 50px;" id="visimisi">
	<div class="container" style="background-image: url(img/smk3.jpg); width: 100%; height: 200px; background-size: 100%; background-position: top-center; ">
	</div>
    <div class="card-body">
      <h5 class="card-title">Visi dan Misi SMK Negeri 2 Langsa</h5>
      <hr>
      	<p>
			<b>Visi</b> <br><br>
			<?php  
				include "../koneksi.php";
				$sql = mysqli_query($koneksi, "SELECT * from tbl_visi");
				$data = mysqlI_fetch_array($sql);
			?>
			<?php echo $data['visi']; ?>
		</p>
		<p>
			<b>Misi</b>
			<ul>
				<?php  
					include "../koneksi.php";
					$sql = mysqli_query($koneksi, "SELECT * from tbl_misi");
					while($data=mysqli_fetch_array($sql)){
				?>
				<li><?php echo $data['misi']; ?></li>
				<?php } ?>
			</ul>
		</p>
    </div>
    <br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div class="container" style="margin-top: 30px; border-top: 2px solid gray; padding-top: 50px;" id="struktur">
	<div class="container" style="background-image: url(img/struktur.jpg); width: 100%; height: 200px; background-size: 100%; background-position: top-center; ">
	</div>
    <div class="card-body">
      <h5 class="card-title">Struktur Organisasi SMK Negeri 2 Langsa 2018-2019</h5>
      <hr>
      	<?php
			$produk =mysqli_query($koneksi, "SELECT * FROM tbl_struktur");
			$data = mysqli_fetch_array($produk);
		?>
      <img width="100%" src="../images/<?php echo $data['foto'] ?>"/>
    </div>
    <br><a href="#"><button type="button" class="btn btn-outline-info">Kembali Ke Atas</button></a>
</div>

<div id="slider" style="margin-top: 40px; border-top: 1px solid red; ">
      <div class="containerr">
        <div class="slidee">
          <h3 style="color: #777; font-size: 12pt; font-weight: 600;">Petuah-Petuah</h3>
          <p style="font-size: 17pt; font-family: Cambria; color: #F08080;"><i>
            Siap lebih baik daripada sempurna.</i>
          </p>
        </div>
        <div class="slidee">
          <h3 style="color: #777; font-size: 12pt; font-weight: 600;">Berkata Al-Allamah Abdurrahman bin Nashir as-Sadiy rahimahullah :</h3>
          <p style="font-size: 17pt; font-family: Cambria; color: #F08080;"><i>
            Kemalasan adalah sumber kegagalan dan kerugian. Maka orang yang malas tidak akan mendapatkan kebaikan dan tidak memperoleh kemuliaan, serta tidak mendapat bagian di Akhirat dan tidak pula bagian di dunia.</i>
          </p>
        </div>
        <div class="slidee">
          <h3 style="color: #777; font-size: 12pt; font-weight: 600;">Petuah-Petuah</h3>
          <p style="font-size: 17pt; font-family: Cambria; color: #F08080;"><i>
            Selagi masih diberi kesempatan, berdoalah untuk kedua orang tua anda..... Sebelum mereka tidak bisa lagi mendoakan anda.</i>
          </p>
        </div>
        <div class="slidee">
          <h3 style="color: #777; font-size: 12pt; font-weight: 600;">Petuah-Petuah</h3>
          <p style="font-size: 17pt; font-family: Cambria; color: #F08080;"><i>
            Manfaatkan masa mudamu dengan baik, agar tidak menyesal dikemudian harinya..</i>
          </p>
        </div>
        <div class="slidee">
          <h3 style="color: #777; font-size: 12pt; font-weight: 600;">Petuah-Petuah</h3>
          <p style="font-size: 17pt; font-family: Cambria; color: #F08080;"><i>
            Jangan bangga hanya dengan memiliki banyak ilmu, karena ilmu lebih rendah dari akhlak, yang memiliki akhlak baik akan baik pula ilmunya.</i>
          </p>
        </div>
      </div>
    </div>
</div>

<?php include "footer.php"; ?>

<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slim.min.js"></script>
<script src="bootstrap/js/dist/util.js"></script>
<script src="bootstrap/js/dist/carousel.js"></script>

<script>
  $(function() {
    var t0, t1;

    // Test to show that the carousel doesn't slide when the current tab isn't visible
    // Test to show that transition-duration can be changed with css
    $('#carousel-example-generic').on('slid.bs.carousel', function(event) {
      t1 = performance.now()
      console.log('transition-duration took' + (t1 - t0) + 'ms, slid at ', event.timeStamp)
    }).on('slide.bs.carousel', function() {
      t0 = performance.now()
    })
  })
</script>

</body>
</html>