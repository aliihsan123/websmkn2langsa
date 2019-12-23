<?php include "../../koneksi.php"; ?>
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

	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/socicon.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/theme.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/entypo.css">
	
	<title>SMKN | 2 Langsa</title>
</head>
<body>


	<div class="navbar-container">
		<div class="bg-dark navbar-dark" data-sticky="top">

			<!-- Start container -->
			<div class="container">
				<nav class="navbar navbar-expand-lg">

					<a class="navbar-brand" href="index.php">
		              <img alt="SMKN2LANGSA" src="../../img/lgsmk.png" width="30px" />
		            </a>
		            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		              <i class="icon-menu h4"></i>
		            </button>
		            <!-- Start navbar collapse -->
		            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
		            	<ul class="navbar-nav">
		            		<li class="nav-item">
		            			<a href="../index.php" class="nav-link">Dashboard Admin</a>
		            		</li>
		            	</ul>

		            	<ul class="navbar-nav">
			                <li class="nav-item d-flex align-items-center">
			                  <a href="logout.php" class="btn btn-success">Logout</a>
			                </li>
			            </ul>
		            </div>
		            <!-- End navbar collapse -->
				</nav>
			</div>
			<!-- End container -->

		</div>
	</div>

	<!-- start main container -->
	<div class="main-container">
		<section class="bg-light text-dark space-lg overflow-hidden">
			<div class="container">
				<ul class="row feature-list feature-list-sm">
		            <li class="col-12 col-md-4">
		              <a href="bahan_ajar/index.php" class="card">
		                <img alt="Image" src="../../images/bahan.png" class="img-fluid rounded" />
		              </a>
		              <h5>Bahan Ajar</h5>
		              <p>
		                Bahan Ajar SMKN 2 Langsa.
		              </p>
		              <a href="bahan_ajar/index.php">Kelola &rsaquo;</a>
		            </li>
		            <!--end of col-->
		            <li class="col-12 col-md-4">
		              <a href="dokumen/index.php" class="card">
		                <img alt="Image" src="../../images/dokumen.png" class="img-fluid rounded" />
		              </a>
		              <h5>Dokumen Kurikulum</h5>
		              <p>
		                Dokumen Kurikulum SMKN 2 Langsa.
		              </p>
		              <a href="dokumen/index.php">Kelola &rsaquo;</a>
		            </li>
		            <!--end of col-->
		            <li class="col-12 col-md-4">
		              <a href="jadwalbelajar/index.php" class="card">
		                <img alt="Image" src="../../images/empty.png" class="img-fluid rounded" />
		              </a>
		              <h5>Jadwal Belajar</h5>
		              <p>
		                Jadwal belajar mengajar sekolah.
		              </p>
		              <a href="jadwalbelajar/index.php">Kelola &rsaquo;</a>
		            </li>
		            <!--end of col-->
		            <li class="col-12 col-md-4">
		              <a href="peraturan/index.php" class="card">
		                <img alt="Image" src="../../images/peraturan.png" class="img-fluid rounded" />
		              </a>
		              <h5>Peraturan-peraturan</h5>
		              <p>
		                Peraturan-peraturan sekolah.
		              </p>
		              <a href="peraturan/index.php">Kelola &rsaquo;</a>
		            </li>
		            <!--end of col-->
		            <li class="col-12 col-md-4">
		              <a href="ekstrakurikuler/index.php" class="card">
		                <img alt="Image" src="../../images/ekstra.png" class="img-fluid rounded" />
		              </a>
		              <h5>Ekstra Kurikuler</h5>
		              <p>
		                Ekstra Kurikuler SMKN 2 Langsa.
		              </p>
		              <a href="ekstrakurikuler/index.php">Kelola &rsaquo;</a>
		            </li>
		            <!--end of col-->
		            <li class="col-12 col-md-4">
		              <a href="tefa/index.php" class="card">
		                <img alt="Image" src="../../images/tefa.png" class="img-fluid rounded" />
		              </a>
		              <h5>Teaching Factory</h5>
		              <p>
		                Pengembangan Teaching Factory.
		              </p>
		              <a href="tefa/index.php">Kelola &rsaquo;</a>
		            </li>
		            <!--end of col-->
		        </ul>
		        <!-- end of row -->
			</div>
		</section>
	</div>


<!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="../../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="../../bootstrap/js/aos.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="../../bootstrap/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="../../bootstrap/js/flickity.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="../../bootstrap/js/jarallax.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/jarallax-element.min.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="../../bootstrap/js/scrollMonitor.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="../../bootstrap/js/jquery.smartWizard.min.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="../../bootstrap/js/smooth-scroll.polyfills.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="../../bootstrap/js/prism.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/zoom.min.js"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="../../bootstrap/js/theme.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/tooltip.js"></script>

</body>
</html>