<?php $this->load->view('header.php'); ?>
<?php $this->load->view('nav.php'); ?>
    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('<?php echo site_url('assets/user/img/amcc.jpeg') ?>'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive">AMCC Departemen Kerumahtanggaan </h1></li>
                        <li>
                            <p>Learning by Doing, Learning by Teaching</p>
                        </li>
                        <li>
                            <a href="<?php echo site_url('user/pengajuan'); ?>" class="btn btn-info btn-lg">PINJAM</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.First slide-->
                
            </div>
            <!--/.Second slide -->
            
        </div>
        <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container" id="news">
    <h2 align="center" > <i class="large material-icons">surround_sound</i> Berita & Pengumuman</h2><hr><br>
        <div class="row">
            <?php foreach ($datas as $key) { ?>
            <!--First columnn-->
            <div class="col-lg-3">
                <!--Card-->
                <div class="card" style="height: 490px;">

                    <!--Card image-->
                    <div style="height: 200px; width: 100%;" class="view overlay hm-white-slight">
                        <img style="height: 200px; width: 100%;" src="<?php echo site_url("assets/admin/images/berita/".str_replace(" ", "_",preg_replace('/\s+/', '_', $key['foto']))) ?>" class="img-fluid" alt="" >
                        <a href="<?php echo site_url("welcome/detail/{$key['id']}") ?>">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h5 class="card-title" ><b></strong><?php echo $key['judul'] ?></strong></b></h5>
                        <!--Text-->
                        <p style="height: 120px;"><?php echo substr(strip_tags($key['isi']),0,100); ?></p>
                        <a  href="<?php echo site_url("welcome/detail/{$key['id']}") ?>" class="btn btn-info" >Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <?php } ?>
            <!--First columnn-->
        </div>
        <br>
        <div class="row">
        <div class="col-md-12 text-center">
             <?php 
        echo $this->pagination->create_links();
        ?>
        </div>
        </div>
    </div>
    <!--/.Content-->

    <div class="container" id="pinjam">
    <hr>
    <h2 align="center" ><i class="large material-icons">announcement</i>  PEMINJAMAN</h2>
    <hr>
        <div class="row">
            
            <div class="col-lg-5">
                <!--Card-->
                <div class="card" style="height: 320px;">

                   <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title"><strong>UNTUK DI PERHATIKAN</strong></h4>
                        <!--Text-->
                        <p class="card-text">Bacalah Tata Cara Peminjaman dengan Baik di Samping Berikut <br><br>
                        AMCC Departement Kerumah Tanggaan</p>
                    
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->

            <div class="col-lg-7" >
                <!--Card-->
                <div class="card" style="height: 320px;">
                     <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title"><strong>CARA MEMINJAM BARANG</strong></h4>
                        <!--Text-->
                        <p class="card-text">
                            <ol>
                                <li>untuk meminjam barang yaitu klik Tombol PINJAM</li>
                                <li>Sebelum meminjam kami sarankan untuk mengecek status ketersediaan barang.</li>
                                <li>cek status barang bisa dilakukan pada dashboard</li>
                                <li>Isilah form dengan benar dan dapat dipertanggungjawabkan</li>
                                <li>Setelah melakukan proses peminjaman anda bisa mengecek status peminjaman barang pada menu PENGAJUAN</li>
                                <li>Jika status peminjaman di Terima/ACC anda bisa menghubungi bagian Kerumahtanggaan AMCC atau kami yang akan menghubungi anda melalui SMS</li>
                            </ul>
                        </p>
                    
                    </div>
                    <!--/.Card content-->
                   

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
    </div>
    <!--/.Content-->
    <div class="container" id="kontak">
    <hr>
    <h2 align="center" > <i class="large material-icons">contacts</i> KONTAK</h2>
    <hr>
        <div class="row">
            <div class="col-lg-4" >
                <!--Card-->
                <div class="card" style="height: 500px;">
                    <div class="card-block">
                    <h3>Hubungi Kami</h3><br>
                        <address>
                        <strong><i class="large material-icons">location_on</i> Sekretariat AMCC</strong> <br>
                        Gedung BSC Lt. 3, SMTIK AMIKOM Yogyakarta<br>
                        Jalan Ringroad Utara, Condongcatur, Depok<br>
                        Sleman, Yogyakarta<br>
                        <br>
                        <strong><i class="large material-icons">location_on</i> Camp AMCC</strong><br>
                        Jalan Cempaka 115, Condongcatur, Depok<br>
                        Sleman, Yogyakarta<br>
                        </address> <br><br>
                        <strong><i class="large material-icons">call</i>  +62 856 4341 1818 </strong> <br>
                        <strong><i class="large material-icons">email</i>  amcc@amcc.or.id </strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" >
                <!--Card-->
                <div class="card" style="height: 500px;">
                    <div class="card-block">
                        <div id="map" style="height: 480px; width: auto;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.Content-->

<?php $this->load->view('footer.php'); ?>