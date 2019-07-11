<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
    
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
  
</head>
<body>
	
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?= base_url('Home') ?>"> <img src="<?= base_url('Assets/image/logo.png')?>" alt="logo" height="33px"> BPTP JATIM </a>
					   	
						<button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('permohonan') ?>">Permohonan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('CekStatus') ?>">Cek Status</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part image_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
							<h2>Balai Pengkajian Teknologi Pertanian <br> Jawa Timur</h2>
							<br>
							<h3>Program Magang</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores architecto quod, ea laboriosam exercitationem aspernatur debitis obcaecati incidunt ad recusandae eveniet qui sed culpa!
								 Cupiditate voluptatum unde vitae enim! Temporibus!</p>
								 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores architecto quod, ea laboriosam exercitationem aspernatur debitis obcaecati incidunt ad recusandae eveniet qui sed culpa!
								 Cupiditate voluptatum unde vitae enim! Temporibus!</p>
								 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-1 custom-animation"><img src="<?= base_url('Assets/image/animate_icon/icon_1.png')?>" alt=""></div>
        <div class="hero-app-2 custom-animation2"><img src="<?= base_url('Assets/image/animate_icon/icon_3.png')?>" alt=""></div>
        <div class="hero-app-5 custom-animation4"><img src="<?= base_url('Assets/image/animate_icon/icon_5.png')?>" alt=""></div>
        <div class="hero-app-7 custom-animation2"><img src="<?= base_url('Assets/image/animate_icon/icon_4.png')?>" alt=""></div>
        <div class="hero-app-4 custom-animation"><img src="<?= base_url('Assets/image/animate_icon/icon_1.png')?>" alt=""></div>
    </section>
    <!-- banner part end-->

	
    <!-- guide internship start-->
    <section class="service_part section_padding gray_bg ">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 col-lg-12 col-xl-12">
            <h1>Prosedur Pendaftaran</h1>
            <br>
            <br>
            </div>
                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="single_service_part shadow-sm p-3 mb-5 bg-white rounded">
                    <img class="mb-5" src="<?= base_url('Assets/image/iconguide/Isi form.png')?>" alt="" height="100px" style="display:block; margin:auto;">
                        <h4 align="center">Isi Formulir </h4>
                        <p>Isi form pendaftaran magang dengan memilih 
                        menu permohonan pada website ini</p>
                       
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="single_service_part shadow-sm p-3 mb-5 bg-white rounded">
                    <img class="mb-5" src="<?= base_url('Assets/image/iconguide/Cek status new.png')?>" alt="" height="100px" style="display:block; margin:auto;">
                        <h4 align="center">Cek status</h4>
                        <p>Lakukan cek status untuk melihat apakah kamu 
                        diterima/tidak diterima.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3">
					<div class="single_service_part shadow-sm p-3 mb-5 bg-white rounded ">
						<img class="mb-5" src="<?= base_url('Assets/image/iconguide/Dokumen new.png')?>" alt="" height="100px" style="display:block; margin:auto;">
						<h4 align="center">Siapkan  Dokumen</h4>
                        <p>Jika di terima Siapkan dokumen yang berupa surat pengajuan 
                        PKL dari fakultas / sekolahmu</p>
                     
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3">
					<div class="single_service_part shadow-sm p-3 mb-5 bg-white rounded ">
						<img class="mb-5" src="<?= base_url('Assets/image/iconguide/Kirim surat.png')?>" alt="" height="100px" style="display:block; margin:auto;">
						<h4 align="center">Kirim  Dokumen</h4>
                        <p>Setelah itu, kirim dokumen yang telah kamu siapkan 
                        sebelumnya ke kantor BPTP Jatim </p>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="review_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center mt-5"> 
                        <h2>Siapa saja yang bisa bergabung?</h2>
                        
                    </div>
                </div>
            

                 <div class="col-xl-3 ml-4 ">
                 <img class="mx-auto d-block" height="250px" src="<?=base_url('Assets/image/orang.png')?>" style="margin-top:-13px;">
                 </div>
            </div>  
        </div>
        <div class="hero-app-1 custom-animation"><img src="<?= base_url('Assets/image/animate_icon/icon_1.png')?>" alt=""></div>
        <div class="hero-app-2 custom-animation2"><img src="<?= base_url('Assets/image/animate_icon/icon_3.png')?>" alt=""></div>
        <div class="hero-app-2 custom-animation3"><img src="<?= base_url('Assets/image/animate_icon/icon_5.png')?>" alt=""></div>
        <div class="hero-app-7 custom-animation2"><img src="<?= base_url('Assets/image/animate_icon/icon_4.png')?>" alt=""></div>
        <div class="hero-app-3 custom-animation"><img src="<?= base_url('Assets/image/animate_icon/icon_1.png')?>" alt=""></div>
    </section>

    <section class="service_part section_padding gray_bg">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-6 col-xl-6">
					<div class="single_service_part shadow-sm p-3 mb-5 bg-white rounded ">
						<img class="mb-5" src="<?= base_url('Assets/image/iconguide/mahasiswa.png')?>" alt="" height="100px" style="display:block; margin:auto;">
						<h4 class="text-center">Mahasiswa</h4>
                        <p>Lorem ipsum dolor sit amet elit asdew as consectetur adipisicing asd. </p>
                    </div>
                 </div>
                 <div class="col-sm-6 col-lg-6 col-xl-6">
					<div class="single_service_part shadow-sm p-3 mb-5 bg-white rounded ">
						<img class="mb-5" src="<?= base_url('Assets/image/iconguide/siswa.png')?>" alt="" height="100px" style="display:block; margin:auto;">
						<h4 class="text-center">siswa</h4>
                        <p>Lorem ipsum dolor sit amet elit asdew as consectetur adipisicing asd. </p>
                    </div>
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