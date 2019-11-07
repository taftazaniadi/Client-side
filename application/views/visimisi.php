<?php $this->load->view('header.php'); ?>
<?php $this->load->view('nav.php'); ?>
<br>

    <!--Content-->
    <div class="container">
    <br> <br> <br>
    <h4 align="center"><strong>VISI dan MISI AMCC</strong></h4>
    <br> 
        <div class="row">
            <!--Second columnn-->
            <div class="col-lg-12">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="row" style="margin: 10px;">
                        <div class="col-lg-9">
                            <p class="card-text" style="margin: 9px;">
                                <h4><b><strong>Visi AMCC</strong></b></h4>
                                The Best IT Organization in Jogja            
                            </p>
                            <hr>
                            <p class="card-text" style="margin: 9px;">
                                <h4><b><strong>Misi AMCC</strong></b></h4>
                                <ol type="circle">
                                    <li>Mengadakan Pelatihan, Seminar, Workshop, Kompetisi dan Kajian IT</li>
                                    <li>Melakukan penelitian dan pengembangan di bidang IT</li>
                                    <li>Menfasilitasi anggota dan pengurus yang akan melakukan riset dan penelitian</li>
                                    <li>Melakukan pengabdian masyarakat</li>
                                </ol>           
                            </p>
                            <p class="card-text" style="margin: 9px;">
                                <h4><b><strong>Motto AMCC</strong></b></h4>
                                <q>Learning by Doing Learning by Teaching</q>           
                            </p>
                        </div>

                        <div class="card col-lg-3">
                            <p class="card-text" style="margin: 9px;">
                                <h5><b><strong>Menu</strong></b></h5>
                                <ul>
                                    <li><a href="<?php echo site_url('welcome/visi') ?>">Visi dan Misi</a></li>
                                    <li><a href="<?php echo site_url('welcome/struktur') ?>">Struktur Organisasi</a></li>
                                    <li><a href="<?php echo site_url('welcome/album') ?>">Album Kegiatan</a></li>
                                </ul>
                            </p>
                        </div>
                        
                    </div>
                    <!--/.Card image-->

                  <!-- -->
                </div>
                <!--/.Card-->
            </div>
        </div>
    </div>

    <?php $this->load->view('footer.php'); ?>