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
    
    <title>SMKN | 2 Langsa</title>
</head>
<body>

    <?php include "navbar.php"; ?>

    <div class="container-fluid p-3 mb-2 bg-light text-white">
        <div class="col-12 p-3 mb-2 bg-white text-dark">
            <?php
                date_default_timezone_set("Asia/Bangkok");
            ?>
            <script type="text/javascript">
                function date_time(id){
                    date = new Date;
                    year = date.getFullYear();
                    month = date.getMonth();
                    months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
                    d = date.getDate();
                    day = date.getDay();
                    days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                    h = date.getHours();
                    if(h<10){
                        h = "0"+h;
                    }
                    m = date.getMinutes();
                    if(m<10){
                        m = "0"+m;
                    }
                    s = date.getSeconds();
                    if(s<10){
                        s = "0"+s;
                    }
                    result = ''+days[day]+' '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;
                    document.getElementById(id).innerHTML = result;
                    setTimeout('date_time("'+id+'");','1000');
                    return true;
                }
            </script>
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
            <h3 class="text-primary">Bahan Ajar</h1>

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