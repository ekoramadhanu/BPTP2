
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

<section class="service_part section_padding gray_bg "> 
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class=""></div>
                <div class="col-sm-12 col-lg-6 col-xl-6">
              
                <form id="regForm1" method="post" action="<?=base_url('Permohonan/formPermohonan')?>" class="pl-3 pr-3">
                <img class="mx-auto d-block" src="<?= base_url('Assets/image/logo.png')?>" alt="logo" height="66px">
                <h1 class="mt-4">Silakan Masukkan Data</h1>
                <?= $this->session->flashdata('alert')?>
                <?= $this->session->flashdata('massage')?>
                <?= form_error('nomor[]','<div class="alert alert-success" role="alert">','</div>');?>
                        <div class="form-group">
                            <label class="text-black">Nama Pemagang</label>
                            <input type="text" class="form-control" name="nama[]" required>                
                        </div>
                        <div class="form-group">
                            <label class="text-black">NIM/NISN</label>
                            <input type="text" class="form-control" name="nomor[]" required>                
                        </div>
                        <div class="form-group">          
                        <label class="text-black">Jenis Kelamin</label>
                        <select class="form-control" name="jenisKelamin[]" style="color:black">            
                            <option class="" style="color:black" value="L">Laki - Laki</option>
                            <option class="" style="color:black" value="P">Perempuan</option>            
                        </select>
                        </div>                                                        
                        <div class="form-group">          
                        <label class="text-black">Pekerjaan </label>
                        <select class="form-control" name="pekerjaan" style="color:black" id="pekerjaan" >            
                            <option class="" style="color:black" value="siswa">Siswa</option>
                            <option class="" style="color:black" value="mahasiswa">Mahasiswa</option>            
                        </select>
                        </div>                                                        
                        <div class="form-group">
                            <label class="text-black" id="labelSekolah">Sekolah</label>
                            <input type="text" class="form-control" name="sekolah" id="inputSekolah" required>
                        </div>
                        <div class="form-group" id="programStudi">   
                        <div class="form-group">
                            <label class="text-black" id="labeljurusan">Jurusan</label>
                            <input type="text" class="form-control" name="programStudi" required>                
                        </div>
                                     
                        </div>
                        <div class="form-group">
                            <label class="text-black">Tanggal Mulai</label>
                            <input type="date" class="form-control text-black" name="tanggalMulai" required>
                        </div>
                        <div class="form-group">
                            <label class="text-black">Tanggal Selesai</label>
                            <input type="date" class="form-control text-black" name="tanggalSelesai" required>
                        </div>
                        <div class="form-group">
                        <label id="daftarMagang" class="text-black">Daftar angota</label>                
                        <div id="listAnggota" class="ml-3 mr-3"></div>
                        <a class="small text-primary" href="" data-toggle="modal" data-target="#tambahAnggota" >Tambah Anggota</a>
                        </div>
                        <button class="genric-btn info-border circle mt-3">Kirim</button>
                        <a class="genric-btn default-border circle" href="<?= base_url('Home')?>" >kembali ke halaman utama</a>
                    </form>
                    
                </div>
            </div>
            
            
        </div>

    </section>

    <!-- tambah anggota -->
    <div class="modal fade" id="tambahAnggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header" style="color:black">
        <h5 class="modal-title" id="exampleModalLabel">Isi Form Tambah Anggota</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>    
        <div class="modal-body">
            <div class="form-group">
            <input type="text" class="form-control form-control-user" placeholder="Nama anggota"  id="namaAnggota"
            name="namaAggota" required style="color:black" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control form-control-user" placeholder="NIM/NISN" id="nomorInduk"
            name="nomorInduk" min='0'required style="color:black" required>
            </div>        
            <div class="form-group">          
            <label class="text-black">jenis kelamin</label>
            <select class="form-control" name="jenisKelamin" style="color:black" id="jenisKelamin">            
                <option class="" style="color:black" value="L">Laki - Laki</option>
                <option class="" style="color:black" value="P">Perempuan</option>            
            </select>
            </div>                                                        
        </div>
        <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" id="tambah" data-dismiss="modal">tambah</button>
        </div>    
    </div>
    </div>
    </div>
    
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


    <script>
        var index = 0;
        $('#tambah').click(function(){
        // if(index === 0){
        //   $$('#listAnggota').append(
        //     "<label id='daftarMagang' class='text-black'>Daftar angota</label>"
        //   );
        // }
        var namaAnggota = document.getElementById('namaAnggota').value;
        var nomorAnggota = document.getElementById('nomorInduk').value;      
        var jenisKelamin = document.getElementById('jenisKelamin').value;      
        // console.log("nama "+namaAnggota);
        // console.log("nomor "+nomorAnggota);  
        // console.log("jenis "+jenisKelamin);  
        list(namaAnggota,nomorAnggota,jenisKelamin);
        index++;      
        });
        // ,nameNomor,valueNomor,nameGender,valueGender
        function list(valueNama,valueNomor,valueJenis){      
        $('#listAnggota').append(              
            "<div class='row mb-3' id='"+valueNomor+"'>"+        
                "<div class='col'>"+            
                    "<input class='form-control-plaintext text-black' name='nama[]' value ='"+valueNama+"' readonly>"+                            
                "</div>"+
                "<div class='col'>"+            
                    "<input class='form-control-plaintext text-black' name='nomor[]' value ='"+valueNomor+"' readonly>"+              
                "</div>"+
                "<div class='col'>"+            
                    "<input class='form-control-plaintext text-black' name='jenisKelamin[]' value ='"+valueJenis+"' readonly>"+                
                "</div>"+          
                "<button class='close text-danger ' type ='button' data-nomor='"+valueNomor+"'>"+
                "×"+ "</button>"+
            "</div>");
        }

        $('#listAnggota').on('click', '.close', function(e) {
        e.preventDefault();
        $(this).parent().remove();
        });

        $('#pekerjaan').change(function(){
        ambilVal= document.getElementById('pekerjaan').value;        
        console.log(ambilVal);
        if(ambilVal === "siswa"){
            document.getElementById('labelSekolah').innerHTML = "Sekolah";
            document.getElementById('labeljurusan').innerHTML = "Jurusan";
            $('#labelProgramStudi').remove();
            $('#inputProgramStudi').remove();
        }else{      
            document.getElementById('labelSekolah').innerHTML = "Universitas";

            $('#programStudi').append("<label class='text-black' id='labelProgramStudi' >Fakultas</label>"+
            "<input type='text' class='form-control' name='fakultas' id='inputProgramStudi'required>");
            document.getElementById('labeljurusan').innerHTML = "Program Studi";
        }
        });

        $('#cetakRekap').on('click', '.batalRekap', function(e) {
        e.preventDefault();
        document.getElementById('tahunRekap').value = "";
        });
    </script>
</body>
</html>

