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
    
    <title>Tambah Guru</title>
</head>
<body>

    <?php include "navbar.php"; ?>

    <div class="container-fluid p-3 mb-2 bg-light text-white">
        <div class="col-12 p-3 mb-2 bg-white text-dark">
            <h3 class="text-primary">Tambah Guru</h3>

            <div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nip" placeholder="NIP" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Guru</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_guru" placeholder="Nama Guru" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="j_kel">   
                                <option></option>                             
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                            <a href="DataGuru.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
                <?php  
                    include "koneksi.php";
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $nip = $_POST['nip'];
                        $nama_guru = $_POST['nama_guru'];
                        $alamat = $_POST['alamat'];
                        $jenkel = $_POST['j_kel'];

                        if($nip == '' || $nama_guru == ''){
                            echo "Form belum lengkap";
                        }else{
                            $sql = mysqli_query($koneksi, "SELECT * from guru where nip='$nip'");

                            if(mysqli_num_rows($sql) > 0){
                                echo "Kode Guru Sudah Ada";
                            }else{
                                $simpan = mysqli_query($koneksi, "INSERT into guru values('','$nip','$nama_guru','$alamat','$jenkel')");
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