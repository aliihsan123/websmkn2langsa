<!DOCTYPE html>
<html  lang="en">
<head>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-52115242-13');
    </script>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A robust suite of app and landing page templates by Medium Rare">

	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/socicon.css">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/theme.css">
	<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/entypo.css">
	
	<title>Proses Jadwal</title>
</head>
<body>

    <?php include "navbar.php"; ?>

    <div class="container-fluid p-3 mb-2 bg-light text-white">
        <div class="col-12 p-3 mb-2 bg-white text-dark">
            <div class="row">
                <div class="col-6">
                    <h3 class="text-primary">Proses Penjadwalan</h1>
                </div>
                <div class="col6">
                    <a href="TambahJadwal.php" class="btn btn-success">Tambah Jadwal</a>
                </div>
            </div><br>

            <div>
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tahun Ajaran</th>
                        <th>Kode Mata Pelajaran</th>
                        <th>Kode Kelas</th>
                        <th>Nama Kelas</th>
                        <th>ID Waktu</th>
                        <th>Hari</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Aksi</th>
                    </tr>  
                    <?php  
                        /*SELECT siswa.nis,siswa.namasiswa,nilai.na FROM siswa,nilai WHERE siswa.nis=nilai.nis;*/

                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT guru.nm_guru,mengajar.thn_ajar,mengajar.kd_mapel,punya.kd_kelas,waktu.id_waktu,waktu.hari,waktu.jam_masuk,waktu.jam_keluar,kelas.nm_kelas FROM kelas,waktu,guru,mengajar,punya where guru.id_guru = mengajar.id_guru AND mengajar.id_guru = punya.id_guru AND waktu.id_waktu = punya.id_waktu AND kelas.kd_kelas = punya.kd_kelas");
                        $no=1;
                        while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nm_guru']; ?></td>
                        <td><?php echo $data['thn_ajar']; ?></td>
                        <td><?php echo $data['kd_mapel']; ?></td>
                        <td><?php echo $data['kd_kelas']; ?></td>
                        <td><?php echo $data['nm_kelas']; ?></td>
                        <td><?php echo $data['id_waktu']; ?></td>
                        <td><?php echo $data['hari']; ?></td>
                        <td><?php echo $data['jam_masuk']; ?></td>
                        <td><?php echo $data['jam_keluar']; ?></td>
                        <td>
                            <a href="EditKelas.php?id=<?php echo $data['id_jadwal']; ?>">Update |</a>
                            <a href="HapusKelas.php?id=<?php echo $data['id_jadwal']; ?>"> Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>                  
                </table>
            </div>
        </div>
    </div>

<!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="../../../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../../../bootstrap/js/bootstrap.js"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="../../../bootstrap/js/aos.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="../../../bootstrap/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="../../../bootstrap/js/flickity.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="../../../bootstrap/js/jarallax.min.js"></script>
    <script type="text/javascript" src="../../../bootstrap/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="../../../bootstrap/js/jarallax-element.min.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="../../../bootstrap/js/scrollMonitor.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="../../../bootstrap/js/jquery.smartWizard.min.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="../../../bootstrap/js/smooth-scroll.polyfills.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="../../../bootstrap/js/prism.js"></script>
    <script type="text/javascript" src="../../../bootstrap/js/zoom.min.js"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="../../../bootstrap/js/theme.js"></script>
    <script type="text/javascript" src="../../../bootstrap/js/tooltip.js"></script>

</body>
</html>