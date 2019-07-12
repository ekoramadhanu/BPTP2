
<html>
<head>
<title><?php echo $title ?></title>
    <link href="<?php echo base_url('Assets/css/bootstrap.min.css')?>" rel="stylesheet"> 
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/animate.css')?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/owl.carousel.min.css')?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/themify-icons.css')?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/flaticon.css')?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/magnific-popup.css')?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/slick.css')?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url('Assets/css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url('Assets/css/tamplateform.css')?>">
    
</head>
<body>

   
<section class="service_part section_padding gray_bg "> 
        <div class="container">
            <div class="row">
                <div class="col-sm-0 col-lg-3 col-xl-3"></div>
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <form id="regForm" method="get" action="<?=base_url('CekStatus/formCekStatus')?>">
                    <img class="mx-auto d-block" src="<?= base_url('Assets/image/logo.png')?>" alt="logo" height="66px">
                        <h1 class="mt-4">Silakan Masukkan Data</h1>
                        <br>
                        <div class="form-group">
                        <input type="text" name="nim" class="form-control" placeholder="NIM/NISN*" value="" required />
                        </div>
                        <?= form_error('nim','<small class="text-danger pl-3">','</small>');?>
                        <Button type="submit" name="submit" class="genric-btn info-border circle mt-3">Cari</Button>                        
                        <a class="genric-btn default-border circle text-capitalize" href="<?= base_url('Home')?>" >kembali ke halaman utama</a>
                    </form> 
                </div>
            </div>
        </div>
    </section>
   
    
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?= base_url('Assets/js/jquery-1.12.1.min.js')?>"></script>
    <!-- popper js -->
    <script src="<?=  base_url('Assets/js/popper.min.js')?>"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url('Assets/js/bootstrap.min.js')?>"></script>
    <!-- easing js -->
    <script src="<?=  base_url('Assets/js/jquery.magnific-popup.js')?>"></script>
    <!-- swiper js -->
    <script src="<?= base_url('Assets/js/swiper.min.js')?>"></script>
    <!-- swiper js -->
    <script src="<?= base_url('Assets/js/masonry.pkgd.js')?>"></script>
    <!-- particles js -->
    <script src="<?= base_url('Assets/js/owl.carousel.min.js')?>"></script>
    <!-- swiper js -->
    <script src="<?= base_url('Assets/js/slick.min.js')?>"></script>
    <!-- custom js -->
    <script src="<?= base_url('Assets/js/custom.js')?>"></script>

</body>
</html>