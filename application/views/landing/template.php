<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sipirang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="<?php echo base_url() ?>admin-lte-master/dist/img/title-icon.png" rel="icon">
    <link href="<?php echo base_url() ?>asset-user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url() ?>asset-user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url() ?>asset-user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset-user/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset-user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset-user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset-user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url() ?>asset-user/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>user/css/datatable.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>user/css/headertable.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>user/css/cal.css" rel="stylesheet">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>user/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>user/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->

    <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <!--==========================
  Header
  ============================-->
    <header id="header">
        <div class="container">

            <div class="logo float-left">

                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="#intro" class="scrollto"><span>Sipirang</span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#portfolio">Barang</a></li>
                    <li><a href="#footer">Contact</a></li>
                    <li><a href="<?= site_url('auth')?>">Login</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    <h2>Sipirang<br>Pinjam <span>Barang</span></h2>
                    <div>
                        <a class="btn-get-started scrollto">Pinjam?</a>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <img style="margin-left:60px;" src="<?php echo base_url() ?>asset-user/img/introo.png" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- #intro -->

    <section class="portfolio" id="portfolio">

        <?= $contents ?>

    </section>


    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="footer-info">
                                    <h3>Sipirang</h3>
                                    <p>Hubungi petugas untuk memberikan saran atau komplain dari pelayanan yang telah disediakan</p>
                                </div>

                                <div class="footer-newsletter">

                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="footer-links">
                                    <h4>Gunakan Link</h4>
                                    <ul>
                                        <li><a href="#portofolio">Home</a></li>
                                        <li><a href="#">Masuk sebagai Admin</a></li>
                                    </ul>
                                </div>

                                <div class="footer-links">
                                    <h4>Contact Us</h4>
                                    <p>
                                        Nama penangging jawab <br>
                                        blabla<br>
                                        bidang <br>
                                        <strong>No Hp:</strong> +1 5589 55488 55<br>
                                        <strong>Email:</strong> info@example.com<br>
                                    </p>
                                </div>

                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form">

                            <h4>Hubungi kami</h4>
                            <p>layanan untuk menghubungi pihak petugas atau admin sipirang</p>
                            <form action="<?= base_url() ?>web/contact" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="isi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>

                                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                            </form>
                        </div>

                    </div>



                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url() ?>asset-user/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/mobile-nav/mobile-nav.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>asset-user/lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url() ?>asset-user/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url() ?>asset-user/js/main.js"></script>
    <script src="<?php echo base_url() ?>user/js/freelancer.min.js"></script>
    <script src="<?php echo base_url() ?>user/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>user/datatables/dataTables.bootstrap4.js"></script>





    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable({
                fixedHeader: true
            });
        });
    </script>
    <script src="<?php echo base_url() ?>user/css/cal.js" type="text/javascript"></script>
    <script>
        window.addEventListener('load', function() {
            vanillaCalendar.init({
                disablePastDays: true
            });
        })
    </script>

</body>

</html>