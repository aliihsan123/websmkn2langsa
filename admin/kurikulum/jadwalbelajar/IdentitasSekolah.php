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
	
	<title>Identitas Sekolah</title>
</head>
<body>

    <?php include "navbar.php"; ?>

    <div class="container-fluid p-3 mb-2 bg-light text-white">
            <div class="row">
            <div class="col-4 p-3 mb-2 bg-white text-dark ">
                <h3 class="text-primary">Logo Sekolah</h3>
                <img class="img-fluid" src="../../../img/lgsmk.png">
            </div>
            <div class="col-8 p-3 mb-2 bg-white text-dark">
            <h3 class="text-primary">Identitas Sekolah</h3>
            <?php  
                include "../../../koneksi.php";

                $sql = mysqli_query($koneksi, "SELECT * from tbl_data_sekolah");
                $data = mysqli_fetch_array($sql);
            ?>
            <form action="simpan-buku.php" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['nama_sekolah']; ?>" name="nama" placeholder="Nama Sekolah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenjang Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['jenjang_sekolah']; ?>" name="nama" placeholder="Jenjang Sekolah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['alamat_sekolah']; ?>" name="nama" placeholder="Alamat Sekolah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Telp</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['no_telp']; ?>" name="nama" placeholder="No Telp" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Fax</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['no_fax']; ?>" name="nama" placeholder="No Fax" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['email']; ?>" name="nama" placeholder="Email Sekolah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Website Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['website']; ?>" name="nama" placeholder="Website Sekolah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kepala Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['nama_kepala']; ?>" name="nama" placeholder="Nama Kepala Sekolah" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIP Kepala Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $data['nip_kepala']; ?>" name="nama" placeholder="Nip Kepala Sekolah" class="form-control">
                    </div>
                </div>
            </form>
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