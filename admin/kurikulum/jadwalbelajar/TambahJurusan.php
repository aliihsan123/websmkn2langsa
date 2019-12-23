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
    
    <title>Tambah Ruang</title>
</head>
<body>

    <?php include "navbar.php"; ?>

    <div class="container-fluid p-3 mb-2 bg-light text-white">
        <div class="col-12 p-3 mb-2 bg-white text-dark">
            <h3 class="text-primary">Tambah Ruang</h3>

            <div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kd_jurusan" placeholder="Kode Jurusan" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_jurusan" placeholder="Nama Jurusan" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                            <a href="DataJurusan.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
                <?php  
                    include "koneksi.php";
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $kd_jurusan = $_POST['kd_jurusan'];
                        $nama_jurusan = $_POST['nama_jurusan'];

                        if($kd_jurusan == '' || $nama_jurusan == ''){
                            echo "Form belum lengkap";
                        }else{
                            $sql = mysqli_query($koneksi, "SELECT * from jurusan where jurusan='$nama_jurusan'");

                            if(mysqli_num_rows($sql) > 0){
                                echo "Nama Jurusan Sudah Ada";
                            }else{
                                $simpan = mysqli_query($koneksi, "INSERT into jurusan values('$kd_jurusan','$nama_jurusan')");
                                if($simpan){
                                    echo "Data berhasil disimpan";
                                }else{
                                    echo "data gagal disimpan";
                                }
                            }
                        }
                    }
                ?>
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