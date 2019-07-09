

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
    <link rel="stylesheet" href="<?= base_url('Assets/css/tamplateform.css')?>">
    
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
                    <li class="nav-item active">
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

    
    <section class="review_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section_tittle text-center mt-5"> 
                        <h4>Status Magang</h4>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Nama</th>
                              <th scope="col">NIM/NIS</th>
                              <th scope="col">Sekolah/Universitas</th>
                              <th scope="col">Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach($cekStatus as $cek):?>
                        <tr>
                          <td><?=$cek->fullname?></td>
                          <td><?=$cek->id?></td>
                          <td><?=$cek->institute?></td>
                          <td><?=$cek->status?></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>

          </table>
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